{{--Sử dụng layout nào để thực hiện vieew--}}
@include('layouts.apps._header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    
    <div class="container d-flex justify-content-center p-3">
        <table class="table table-striped">
            <tr style="border:1px black solid">
                <th>id</th>
                <th>Tên người nhận hàng</th>
                <th>Tên người đặt hàng</th>
                <th>Địa chỉ nhận hàng</th>
                <th>Số điện thoại nhận hàng</th>
                <th>Tổng tiền hàng</th>
                <th>Ghi chú</th>
                <th>created_at</th>
                <th>updated_at</th>



                
            </tr>
            @foreach ($orders as $order)

            <tr style="border:1px black solid">
                <td>{{ $order->id }}</td>
                <td>{{ $order->usernametake }}</td>
                <td>{{ $order->user->name }}</td>
                <td>{{ $order->addressfortake }}</td>
                <td>{{ $order->phonefortake }}</td>
                <td>{{ $order->price }}</td>
                <td>{!! $order->note !!}</td>


                <td>{{ $order->created_at }}</td>
                <td>{{ $order->updated_at }}</td>
                
            </tr>
            @endforeach
        </table>
        
    </div>
 
    
    <script type="text/javascript" src="js.js"></script>
</body>
</html>

@include('layouts.apps._footer')


    
