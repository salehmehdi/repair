<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class Store extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);
        
        $cart = $request->session()->get('cart', []);

    
        $cart[] = [
            'product_id' => $product->id,
            'price' => $product->price,
            'name'=>$product->title,
            //'user_id' => auth()->user()->id,
           
        ];

        
        $request->session()->put('cart', $cart);

    
        Cart::create([
            'product_id' => $product->id,
            'price' => $product->price,
            //'user_id' => auth()->user()->id,
            
        ]);

        dd($cart); 
    }
}
