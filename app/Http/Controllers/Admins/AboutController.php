<?php

namespace App\Http\Controllers\Admins;
use App\Models\About;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use Request;

class AboutController extends Controller
{
    public function index()
    {
        $about=About::all();
        return view("pages.backends.about.index",["about"=>$about]);
        
    }


    public function edit($id){
        $about=About::find($id);
        return view("pages.backends.about.index",["about"=>$about]);	
    }


    public function update(Request $request,$id){
        $about = About::find($id);

        if(Request::has('txtTitle')){
            $about->title=strval(Request::input('txtTitle'));
        }

        if(Request::has('txtMissionTitle')){
            $about->mission_title=strval(Request::input('txtMissionTitle'));
        }


        if(Request::has('txtVissionTitle')){
            $about->vission_title=strval(Request::input('txtVissionTitle'));
        }


        if(Request::has('txtDetail')){
            $about->detail=strval(Request::input('txtDetail'));
        }


        if(Request::has('txtMissionDetail')){
            $about->mission_detail=strval(Request::input('txtMissionDetail'));
        }


        if(Request::has('txtVissionDetail')){
            $about->vission_detail=strval(Request::input('txtVissionDetail'));
        }


        if(Request::hasFile('about_video_url')){

            $file = Request::file('about_video_url');
            $filename = $file->getClientOriginalName();
            $about->about_video_url = $filename;
            $file->move(public_path('video'), $filename);
        }


        if(Request::hasFile('img')){
            $file = Request::file('img');
            $imgName = time().(rand(100,1000)).'.'.$file->extension();
            $about->img=$imgName;
            $file->move(public_path('img'), $imgName);
        }


        if(Request::hasFile('icon_img1')){
            $file = Request::file('icon_img1');
            $img1Name = time().(rand(100,1000)).'.'.$file->extension();
            $about->icon_img1=$img1Name;
            $file->move(public_path('img'), $img1Name);
        }


        if(Request::hasFile('icon_img2')){
            $file = Request::file('icon_img2');
            $img2Name = time().(rand(100,1000)).'.'.$file->extension();
            $about->icon_img2=$img2Name;
            $file->move(public_path('img'), $img2Name);
        }


        if(Request::hasFile('icon_img3')){
            $file = Request::file('icon_img3');
            $img3Name = time().(rand(100,1000)).'.'.$file->extension();
            $about->icon_img3=$img3Name;
            $file->move(public_path('img'), $img3Name);
        }

        $about->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }
}
