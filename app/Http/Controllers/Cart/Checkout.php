<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exceptions\Handler;
use App\Models\Transaction;
use App\Models\CartItem;
use App\Providers\ResponseMacroServiceProvider;
use Illuminate\Support\Facades\Response;

class Checkout extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  public function __invoke($orderCode)
  {
   
    try
    {
      $bin_number = $request->get('card_no'); //
      $totalPrices = CartItem::where('order_code',$orderCode)->sum('total_price');
      
      $response = Http::post('https:://isbankas.com', ['amount' => $totalPrices, 'card_number' => $request->get('card_no') ]);
      $status = $response['status']; // 0
      $error_message = $response['error_message']; // "Geçersiz Kart"
      $gateway = 'banka';
      $order_id = rand(1,100);
      
      Transaction::create([
        'gateway'=>$gateway,
        'order_id'=>$order_id,
        'total'=>$totalPrices,
        'eror_message'=>$error_message,
        'bin_number'=>$bin_number,
        'status'=>$status,
      ]);
      if(!$status)
      { 
        throw new \Exception('basarisiz'); 
      }
      session()->forget('order_code');
      return Response::success('siparis tamamlandi');
    }
    catch(\Exception $e)
    {
      $error_message = $e->getMessage();
      $status = 0;
      return Response::error($error_message);
    }
  }
}
