<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Exceptions\Handler;
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

            $cart_item = new CartItem([
                'product_id'=> $productId,
                'quantity'=>$quantity,
                'unit_price'=> $product->price,
                'total_price'=>$product->price*$quantity,
                'order_code' => $orderCode,
            ]);
            $save = $cart_item->save();
            if(!$save) {
                throw new \Exception('sepete eklenmedi');
            }
    

           return response()->json([
             'success' => true,
             'message' => 'Ürün sepete eklendi.',
             'data' => [],
            ]);
        }
        catch (\Exception $e) 
        {
            \Log::debug($e->getMessage());
    
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
                'data' => [],
               ]);
        }

    }
}
