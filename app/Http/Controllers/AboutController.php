<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Illuminate\Support\Facades\Storage;



class AboutController extends Controller
{
    public function edit(){
        $about= About::find(1);

        return view('admin.about.index',compact('about')) ;
    }

    public function update(){

        $about= About::find(1);
        if(empty($about)){
            $about=new About();
            $about->section_title=request('titre');
            $about->section_description=request('description1');
            $about->about_title=request('titre2');
            $about->about_text=request('description2');
            $about->img_path=request('img')->store('img');
            $about->save();
            return redirect()->route('admin.index');
        }else{

            if(request('img')!=null){
                $about->img_path=request('img')->store('img');
            }
            $about->section_title=request('titre');
            $about->section_description=request('description1');
            $about->about_title=request('titre2');
            $about->about_text=request('description2');
            $about->save();
            return redirect()->route('admin.index');
        }

    
    }

}
