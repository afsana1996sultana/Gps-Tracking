<?php

namespace App\Http\Controllers\Admins;

use App\Models\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile=Profile::all();
        return view("pages.backends.profile.index",["profile"=>$profile]);
        
    }


    public function edit($id){
		$profile=Profile::find($id);
        return view("pages.backends.profile.index",["profile"=>$profile]);	
	}


    public function update(Request $request,$id){
        $profile = Profile::find($id);
        
        if(isset($request->txtName)){
            $profile->name=$request->txtName;
        }


        if(isset($request->txtEmail)){
            $profile->email=$request->txtEmail;
        }

        if(isset($request->txtDesignation)){
            $profile->designation=$request->txtDesignation;
        }


        if(isset($request->txtPhone)){
            $profile->phone=$request->txtPhone;
        }


        if(isset($request->txtBio)){
            $profile->bio=$request->txtBio;
        }


        if(isset($request->fileimg)){
            $imgName = time().(rand(100,1000)).'.'.$request->fileimg->extension();
            $profile->img=$imgName;
            $request->fileimg->move(public_path('img'),$imgName);
        }


        $profile->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }

}
