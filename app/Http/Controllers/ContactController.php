<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    
    
    public function index(){

        $contacts=Contact::all();

        return view('admin.contact.index', compact('contacts'));
    }

    public function store(Request $request){


    $contact= new Contact();

        $contact->nom=request('nom');
        $contact->email=request('email');
        $contact->sujet=request('sujet');
        $contact->message=request('message');

        $contact->save();

        return redirect()->back();
    }


    public function destroy($id){

        $contact= Contact::find($id);

        $contact->delete();
         return redirect()->back();
    }
}
