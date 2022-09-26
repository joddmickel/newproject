<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Store;

use Illuminate\Http\Request;

class StoresController extends Controller
{
    public function store(Request $request){
        dd($request->all()); 
        // $table= new devices();
        $table=$request->DeviceName;
        $table=$request->SerialNumber;
        $table=$request->Status;
        $table=$request->Count;
        $table->save();
    }
}
