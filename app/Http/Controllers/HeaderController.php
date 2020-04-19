<?php

namespace App\Http\Controllers;
use App\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderController extends Controller
{
    public function Edit(){

    $header=Header::find(1);
    return view('admin.header.index', compact('header'));
    
    }




   public function create(){

   $header=new Header();
   $header->img_path=request('img_path')->store('img');

   $header->save();
   
   return redirect()->route('admin.index');


}
   
   
    

   public function update(Request $request){

    

$header=Header::find(1);

$header->img_path=request('img_path')->store('img');
// dd(request('img_path')>store('img'));
$header->save();

return redirect()->route('admin.index');
}

}

// $about= new About();

// $about->paragraphe_gauche=request('paragraphe_gauche');
// $about->paragraphe_droite=request('paragraphe_droite');
// $about->button=request('button');

// $about->save();

// return redirect()->route('admin');