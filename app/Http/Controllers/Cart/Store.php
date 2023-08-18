<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\CartItem;
use App\Models\Product;

use Log;

class Store extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $productId,)
    {
        $product = Product::findOrFail($productId);
        
        $cart = $request->session()->get('cart', []);
       
        $orderCode = session('order_code');
        Log::info($orderCode);
        if (!$orderCode) {
            Log::debug($orderCode);
            $orderCode = rand(1, 1000);
            session(["order_code" => $orderCode]);
        }
        
        
        
        $cart[] = [
            'product_id' => $product->id,
            'price' => $product->price,
            'name' => $product->title,
            'order_code' => $orderCode,
        ];
        
        $request->session()->put('cart', $cart);
        
        CartItem::create([
            'product_id' => $product->id,
            'price' => $product->price,
            'order_code' => $orderCode,
        ]);

        $Data = [
            'success' => true,
            'message' => 'Ürün sepete eklendi.',
            'cart' => $cart,
        ];
    
        return response()->json($Data);

    
    }
}
