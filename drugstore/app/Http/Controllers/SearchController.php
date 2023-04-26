<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\ProductType;
use Illuminate\Http\Request;

/**
 * Gera a paginação dos itens de um array ou collection.
 *
 * @param array|Collection      $items
 * @param int   $perPage
 * @param int  $page
 * @param array $options
 *
 * @return LengthAwarePaginator
 */

class SearchController extends Controller
{
    public function search(Request $request){
        $product = Products::all();
        $productTypes = ProductType::all();
        $search = $request->input('search') ?? "";
        session()->put('searching', [$request->input('search'), $request->input('role')]);
        if ($search == "" && $request->input('role') == 0) {
            $products = '';
        } else if ($search != "" && $request->input('role') == 0) {
            $products = Products::where('name', 'LIKE', "%$search%")->get()->paginate(9);
        } else {
            $products = Products::where('name', 'LIKE', "%$search%")->where('role', 'LIKE', $request->input('role'))->get()->paginate(9);
        }
        return view('search-page', compact('products', 'search', 'productTypes'));
    }
}
