<?php

namespace App\Http\Controllers;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){

        $services=Service::all();
return view('admin.services.index', compact('services'));

    }


public function create(){


    return view('admin.services.create');

}

public function store(Request $request){

    $service=new Service();

    $service->titre=request('titre');
    $service->description=request('description');
    $service->fontImg=request('fontImg');

    $service->save();

    return redirect()->route('service');

}

    public function edit($id){

        $service=Service::find($id);

        return view('admin.services.edit', compact('service'));

    }


    public function update(request $request, $id){

        $service=Service::find($id);

        $service->titre=request('titre');
    $service->description=request('description');
    $service->fontImg=request('fontImg');

    $service->save();

    return redirect()->route('service');
    }


        public function destroy($id){

            $service=Service::find($id);
            $service->delete();
            return redirect()->back();

        }
}