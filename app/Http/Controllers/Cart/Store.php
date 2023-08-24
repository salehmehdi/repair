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
        $quantity = $request->input('quantity',1);
       
        
        $orderCode = $request->session()->get('order_code');
        if(!$orderCode)
        {
            $orderCode = rand(1,1000);
            $request->session()->put('order_code',$orderCode);
        }


        $cart_item = CartItem::where('product_id',$productId)->where('order_code',$orderCode)->first();
        if($cart_item)
        {
            $cart_item->quantity+= $quantity;
            $cart_item->total_price= $cart_item->unit_price*$cart_item->quantity;
            $cart_item->save(); 
        }
        else
        {
            $cart_item = new CartItem([
                'product_id'=> $productId,
                'quantity'=>$quantity,
                'unit_price'=> $product->price,
                'total_price'=>$product->price*$quantity,
                'order_code' => $orderCode,
            ]);
            $cart_item->save();
        }

        $cart_items = CartItem::where('order_code', $orderCode)->get();
        $data = [];

       foreach ($cart_items as $cart_item) 
       {
           $data[] = [
           'product_id' => $cart_item->product_id,
           'unit_price' => $cart_item->unit_price,
           'quantity' => $cart_item->quantity,
           'total_price' => $cart_item->total_price,
           'order_code' => $orderCode,
          ];
        }

        return response()->json([
            'success' => true,
            'message' => 'Ürün sepete eklendi.',
            'cart' => $data,
        ]);

        
        
        
        
    
    }
}
