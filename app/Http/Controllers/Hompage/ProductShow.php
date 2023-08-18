<?php

namespace App\Http\Controllers\Hompage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductShow extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('homepage.productshow');
    }
}
