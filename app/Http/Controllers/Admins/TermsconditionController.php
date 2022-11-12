<?php

namespace App\Http\Controllers\Admins;

use App\Models\Termscondition;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TermsconditionController extends Controller
{
    public function index()
    {
        $terms=Termscondition::all();
        return view("pages.backends.terms-condition.index",["terms"=>$terms]);
        
    }


    public function edit($id){
        $terms=Termscondition::find($id);
        return view("pages.backends.terms-condition.index",["terms"=>$terms]);	
    }


    public function update(Request $request,$id){
        $terms = Termscondition::find($id);

        if(isset($request->txtTitle)){
            $terms->title=$request->txtTitle;
        }


        if(isset($request->txtDescription)){
            $terms->description=$request->txtDescription;
        }

        $terms->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }
}
