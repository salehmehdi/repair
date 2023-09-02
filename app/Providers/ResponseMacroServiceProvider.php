<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class ResponseMacroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      Response::macro('success',function($message)
      {
        return response()->json([
          'message'=>$message,
        
        ]);
      });
     
      Response::macro('error',function($message)
      {
         return response()->json([
          'message'=>$message,
        ]);
      });
    }
}
