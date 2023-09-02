<?php

namespace App\Http\Controllers\Cart\Item_Quantity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CartItem;
use Illuminate\Support\Facades\Session;
use App\Exceptions\Handler;
use log;

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
        try
        {
          $orderCode = $request->session()->get('order_code');
          $delete = CArtItem::where('product_id',$productId)->where('order_code',$orderCode)->delete();
          if(!$delete)
          {
            throw new \Exception('islem gerceklestirilemedi');
          }
          return response()->json([
            'succes'=>true,
            'message'=>'urun sepetten ve veri tabanindan silindi',
            'data'=>$delete
          ]);
        }
        catch(\Exception $e)
        {
          \log::debug($e->getmessage());
          return response()->json([
            'succes'=>false,
            'message'=>$e->getmessage(),
            'data'=>null
          ]);
        }
    }
}
