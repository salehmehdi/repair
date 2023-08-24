<?php

namespace App\Http\Controllers\Cart\Item_Quantity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Product;

class Update extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $productId)
    {
       try
       {
         $newQuantity = $request->input('quantity', 6);
         $orderCode = $request->session()->get('order_code');
         $cartItem = CartItem::where('product_id', $productId)->where('order_code', $orderCode)->first();
         if(!$cartItem)
          {
            throw new \Exception('Ürün sepetinizde bulunamadı.');
          }
         
         $cartItem->quantity = $newQuantity;
         $cartItem->total_price = $cartItem->unit_price * $newQuantity;
         $cartItem->save();

         return response()->json([
         'success' => true,
         'message' => 'Ürün güncellendi.',
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
