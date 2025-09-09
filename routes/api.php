<?php

use Illuminate\Support\Facades\Route;

route::prefix('v1')->group(function(){
    route::get('handsets',[App\Http\Controllers\Api\v1\handsetController::class,'index']);
    route::get('handsets/{id}',[App\Http\Controllers\Api\v1\handsetController::class,'show']);


});


