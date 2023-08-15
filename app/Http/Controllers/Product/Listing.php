<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class Listing extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $minPrice = $request->input('minPrice', 0); 
        $maxPrice = $request->input('maxPrice', 999999999999999999); 
        $orderBy = $request->input('orderBy', 'title'); 

        
        $order = $request->get('order', 'title');
        $sort = $request->get('sort', 'ASC');

        $products = Product::query();

        $products->where('price', '>=', $minPrice)->where('price', '<=', $maxPrice);

        $products->orderBy($order, $sort);

        $product = $products->get()->toArray();

        return response()->json($product);
    


    }
}
