<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use Illuminate\Support\Facades\Storage;

class HeaderController extends Controller
{   
    public function edit(){
        $header= Header::find(1);
        return view('admin.header.index' ,compact('header')) ;
    }

    public function create(){
        $header=new Header();
        $header->img_path = request('img_path')->store('img');
        $header->save();
        return redirect()->route('admin.index');

    }

    public function update(Request $request){
        $header=Header::find(1);
        $header->img_path = request('img_path')->store('img');
        $header->save();
        return redirect()->route('admin.index');
    }
}


