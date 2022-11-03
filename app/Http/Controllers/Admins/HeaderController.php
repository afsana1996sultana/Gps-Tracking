<?php

namespace App\Http\Controllers\Admins;
use App\Models\Header;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index()
    {
        $header=Header::all();
        return view("pages.backends.header.index",["header"=>$header]);
        
    }


    public function edit($id){
        $header=Header::find($id);
        return view("pages.backends.header.index",["header"=>$header]);	
    }


    public function update(Request $request,$id){
        $header = Header::find($id);

        if(isset($request->fileLogo)){
            $LogoName = time().(rand(100,1000)).'.'.$request->fileLogo->extension();
            $header->company_logo=$LogoName;
            $request->fileLogo->move(public_path('img'),$LogoName);
        }


        if(isset($request->txtPhone)){
            $header->phone=$request->txtPhone;
          }

        $header->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }
}
