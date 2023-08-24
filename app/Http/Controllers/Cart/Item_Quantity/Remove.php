<?php

namespace App\Http\Controllers\Cart\Item_Quantity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CartItem;

class Remove extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $productId)
    {
        $orderCode = $request->session()->get('order_code');
        $delete = CartItem::where('product_id',$productId)->where('order_code',$orderCode)->delete();
        if(!$delete)
        {
          return response()->json([
            'success' => false,
            'message' => 'Ürün sepette bulunamadı.',
          ]); 
        }
        
        return response()->json([
          'success' => true,
          'message' => 'Ürün sepetten ve veritabanından kaldırıldı.',
        ]);
    }
}
