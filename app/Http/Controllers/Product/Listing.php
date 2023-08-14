<?php

namespace App\Http\Controllers\Product;

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

      
        
        $minPrice = $request->input('minPrice'); 
        $maxPrice = $request->input('maxPrice'); 
        $orderBy = $request->input('orderBy', 'title'); 

        $products = Product::query();

        if (!empty($minPrice)) 
        {
          $products->where('price', '>=', $minPrice);
        }

        if (!empty($maxPrice)) 
        {
          $products->where('price', '<=', $maxPrice);
        }

        if ($orderBy === 'price_asc') 
        {
          $products->orderBy('price', 'asc');
        } 
        elseif ($orderBy === 'price_desc') 
        {
          $products->orderBy('price', 'desc');

        } 
        elseif ($orderBy === 'title') 
        {
          $products->orderBy('title', 'asc');

        } 
        elseif ($orderBy === 'created_at') 
        {
          $products->orderBy('created_at', 'desc');
        }
        else 
        {
        return response()->json([]); 
        }

        $product = $products->get()->toArray();

        return response()->json($product);
    


    }
}
