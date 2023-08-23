<?php

namespace App\Http\Controllers\Cart\Item_Quantity;

use Illuminate\Support\Facades\Session;
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
    public function __invoke($orderCode)
    {
       
        $orderCode = session('order_code');
        $cartItemCount = CartItem::where('order_code', $orderCode)->sum('quantity');
        return $cartItemCount;
        
    }
}
