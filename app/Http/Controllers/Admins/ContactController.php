<?php

namespace App\Http\Controllers\Admins;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact=Contact::all();
        return view("pages.backends.contact.index",["contact"=>$contact]);
        
    }


    public function edit($id){
        $contact=Contact::find($id);
        return view("pages.backends.contact.index",["contact"=>$contact]);	
    }


    public function update(Request $request,$id){
        $contact = Contact::find($id);

        if(isset($request->txtHeader1)){
            $contact->header1=$request->txtHeader1;
        }

        if(isset($request->txtHeader2)){
            $contact->header2=$request->txtHeader2;
        }

        if(isset($request->txtPhone)){
            $contact->phone=$request->txtPhone;
        }

        if(isset($request->txtEmail)){
            $contact->email=$request->txtEmail;
        }

        if(isset($request->txtDetail)){
            $contact->detail=$request->txtDetail;
        }

        $contact->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }
}
