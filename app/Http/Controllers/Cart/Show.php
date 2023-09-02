<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CartItem;

class Show extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request,$orderCode)
    {
       // $orderCode = $request->session()->get('order_code');
        $cartItems = CartItem::where('order_code',$orderCode)->get()->toArray();

         return view('cart.show',compact('cartItems'));
    }
}
