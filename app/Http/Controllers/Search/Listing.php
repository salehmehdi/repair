<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class Listing extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $searchTerm = $request->input('searchTerm');
       
        $products = Product::where('title','like','%'.$searchTerm.'%')->get();
       
        return response()->json($products);
    }
}
