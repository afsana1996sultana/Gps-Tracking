<?php

namespace App\Http\Controllers\Admins;
use App\Models\Footer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $footer=Footer::all(); 
        return view("pages.backends.footer.index",["footer"=>$footer]);
        
    }


    public function edit($id){
		$footer=Footer::find($id);
        return view("pages.backends.footer.index",["footer"=>$footer]);	
	}


    public function update(Request $request,$id){
        $footer = Footer::find($id);
        
        if(isset($request->txtPhone)){
            $footer->phone=$request->txtPhone;
        }


        if(isset($request->txtEmail)){
            $footer->email=$request->txtEmail;
        }

        if(isset($request->txtAddress)){
            $footer->address=$request->txtAddress;
        }


        if(isset($request->filelogo)){
            $logoName = time().(rand(100,1000)).'.'.$request->filelogo->extension();
            $footer->find_logo=$logoName;
            $request->filelogo->move(public_path('img'),$logoName);
        }


        $footer->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }
}
