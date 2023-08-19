<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class Show extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
            
        $product = Product::where('id',$id)->first();
        try 
        {
           if (!$product)
            {
                throw new \Exception('Product not found');
            }
    
        return view('product.show', compact('product'));
        }
        
        catch (\Exception $e) 
        {
            \Log::debug($e->getMessage());
    
             return redirect('/homepage/show')->with('error', 'Something went wrong.');
        }
            
        
        
    }
}
