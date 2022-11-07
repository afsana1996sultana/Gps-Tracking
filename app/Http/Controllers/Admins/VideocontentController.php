<?php

namespace App\Http\Controllers\Admins;

use App\Models\Videocontent;
use App\Http\Controllers\Controller;
use Request;
//use Illuminate\Http\Request; 

class VideocontentController extends Controller
{
    public function index()
    {
        $content=Videocontent::all();
        return view("pages.backends.video-content.index",["content"=>$content]);
        
    }


    public function edit($id){
        $content=Videocontent::find($id);
        return view("pages.backends.video-content.index",["content"=>$content]);	
    }


    public function update(Request $request,$id){
        $content = Videocontent::find($id);

        if(Request::has('txtName')){
            $content->name=strval(Request::input('txtName'));
        }

        if(Request::hasFile('video_url')){

            $file = Request::file('video_url');
            $filename = $file->getClientOriginalName();
            $content->video_url = $filename;
            $file->move(public_path('video'), $filename);
        }

        $content->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }
}
