<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Search_log;

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

        /**
         * seach term ile product tablosunda verileri listele (maksimum kaç adet ürün listeleneceğini  belirle)
         * listelen verilerin sayısını bul
         * arama terimi ve listelenen veri sayısının search_log tablouna yazdır
         * propduct tablsoundan gelen sonuçları json gönder
         */


        $searchTerm = $request->input('searchTerm');

        
        $products = Product::where('title','like','%'.$searchTerm.'%')->limit(10)->get()->toArray();
       
        
       
    
        
        
         Search_log::create([
           'searchTerm' =>$searchTerm,
                'count' => count($products)
            ]);
       
        
        
        return response()->json( $products);
        
    }
}
