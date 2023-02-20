<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Models\OrderProducts;
use App\Models\Orders;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PayPalController extends Controller
{
    /**
     * create transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function createTransaction()
    {
        return view('');
    }

    /**
     * process transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function processTransaction(CartRequest $request)
    {
        $user = Auth::user();
        $total=session()->get('total_paypal');
        session()->put('orderInfomation',
        [
                    'name'=>$request->input('name'),
                    'id'=>$user->id,
                    'moneys'=>session()->get('moneys'),
                    'phone'=>$request->input('phone'),
                    'note'=>$request->input('note'),
                    'address'=>$request->input('address'),
                    'ordertypes_id'=>$request->input('ordertypes_id')
                ]);
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('successTransaction'),
                "cancel_url" => route('cancelTransaction'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $total
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {

            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }

            return redirect()
                ->route('viewpaychoose')
                ->with('error', 'Something went wrong.');

        } else {
            return redirect()
                ->route('viewpaychoose')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    /**
     * success transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function successTransaction(Request $request)
    {
        $user = Auth::user();
        $order=new Orders();
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            $orderInfomation= session()->get('orderInfomation');
            
                $order->usernametake= $orderInfomation['name'];
                $order->users_id= $orderInfomation['id'];
                $order->price= $orderInfomation['moneys'];
                $order->phonefortake= $orderInfomation['phone'];
                $order->note= $orderInfomation['note'];

                $order->addressfortake=$orderInfomation['address'];
                $order->ordertypes_id= $orderInfomation['ordertypes_id'];
                $order->save();
                
            
            foreach (session()->get('cart') as $ids=>$product){
                DB::insert('insert into orderproducts (orders_id, products_id,quantity_of_product) values (?, ?, ?)', [$order->id, $ids, $product['quantity'] ]);
            }
            if($orderInfomation['ordertypes_id']==1){
                User::where('id', $user->id)->increment('account', $order->price);
            }
            foreach (session('cart') as $id => $products){
                Products::where('id', $id)->decrement('quantity', $products['quantity']);
                
            }
            session()->forget(['cart', 'moneys']);

            
            return redirect()
                ->route('viewpaychoose')
                ->with('success', 'Thanh toán thành công.');
        } else {
            return redirect()
                ->route('viewpaychoose')
                ->with('error', $response['message'] ?? 'Thanh toán thất bại.');
        }
    }

    /**
     * cancel transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function cancelTransaction(Request $request)
    {
        return redirect()
            ->route('viewpaychoose')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }
}