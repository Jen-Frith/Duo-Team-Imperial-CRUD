<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;


class SubscriberController extends Controller
{
    public function index(){
$subscriber=Subscriber::find(1);

        return view('admin/subscriber/index', compact('subscriber'));
    }


    public function create(){
        
        $subscriber= new Subscriber();
        $subscriber->subscriberLink=request('subscriberLink');
        $subscriber->save();

    return redirect()->route('admin.index');

    }


    public function update(){

        $subscriber=Subscriber::find(1);

        $subscriber->subscriberLink=request('subscriberLink');
        $subscriber->save();

    return redirect()->route('admin.index');

    }
}
