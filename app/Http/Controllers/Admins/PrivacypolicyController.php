<?php

namespace App\Http\Controllers\Admins;

use App\Models\Privacypolicy;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrivacypolicyController extends Controller
{
    public function index()
    {
        $privacy=Privacypolicy::all();
        return view("pages.backends.privacy.index",["privacy"=>$privacy]);
        
    }


    public function edit($id){
        $privacy=Privacypolicy::find($id);
        return view("pages.backends.privacy.index",["privacy"=>$privacy]);	
    }


    public function update(Request $request,$id){
        $privacy = Privacypolicy::find($id);

        if(isset($request->txtTitle)){
            $privacy->title=$request->txtTitle;
        }


        if(isset($request->txtDescription)){
            $privacy->description=$request->txtDescription;
        }

        $privacy->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }

}
