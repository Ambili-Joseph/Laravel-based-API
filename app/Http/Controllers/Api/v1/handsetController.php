<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\HandsetResource;
use App\Models\Handset;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class handsetController extends Controller
{
    //
    public function index(\App\Http\Requests\HandsetFilterRequest $req ,$query)
    {
        $q =Handset::$query();
        if($req->brand) $q->where('brand',$req->brand);
        if($req->price_min) $q->where('price',$req->min);
        if($req->price_max) $q->where('price',$req->max);
         if($req->features) foreach ($req->features as $f) $q->whereJsonContains('features',$f);
         return HandsetResource::collection(($q->paginate(5)));

        
    }
    public function show($id){
        $h=Handset::findorfail($id);
        event((new \App\Events\HandsetViewedEvent($h)));
        Return new \App\Http\Resources\HandsetResource($h);
    }

}
