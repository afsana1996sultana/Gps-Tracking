<?php

namespace App\Http\Controllers\Admins;
use App\Models\Allblog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllblogController extends Controller
{
    public function index()
    {
        $blog=Allblog::all();
        return view("pages.backends.all-blog.index",["blog"=>$blog]);
        
    }

    public function create()
    {
        $blog=Allblog::all();
        return view("pages.backends.all-blog.create",["blog"=>$blog]);
    }


    public function store(Request $request){
        //return $request->all();
        $blog=new Allblog; 
        $blog->user_id=Auth::user()->id;
        $blog->name=$request->txtName;
        $blog->title=$request->txtTitle;
        $blog->slug=$request->txtSlug;
        $blog->description=$request->txtDescription;
        $blog->published_date=$request->txtPublishedDate;
        $blog->deleted_at=$request->txtDeleted_at;

        if(isset($request->fileblogPhoto)){
            $blogimgName = time().(rand(100,1000)).'.'.$request->fileblogPhoto->extension();
			$blog->blog_img=$blogimgName;
			$blog->update();
			$request->fileblogPhoto->move(public_path('img'),$blogimgName);
		}

        if(isset($request->filebannerPhoto)){
            $bannerimgName = time().(rand(100,1000)).'.'.$request->filebannerPhoto->extension();
			$blog->banner_img=$bannerimgName;
			$blog->update();
			$request->filebannerPhoto->move(public_path('img'),$bannerimgName);
		}
        $blog->save();        
        return back()->with('success','Created Successfully.');
          
    }


    public function edit($id){
        $blog=Allblog::find($id);	    
        return view("pages.backends.all-blog.edit",["blog"=>$blog]);
		
	}


    public function update(Request $request,$id){
        $blog = Allblog::find($id);

        if(isset($request->txtName)){
        $blog->name=$request->txtName;
        }

        if(isset($request->txtTitle)){
        $blog->title=$request->txtTitle;
        }

        if(isset($request->txtSlug)){
        $blog->slug=$request->txtSlug;
        }

        if(isset($request->txtDescription)){
        $blog->description=$request->txtDescription;
        }

        if(isset($request->txtPublishedDate)){
        $blog->published_date=$request->txtPublishedDate;
        }

        if(isset($request->fileblogPhoto)){
            $blogimgName = time().(rand(100,1000)).'.'.$request->fileblogPhoto->extension();
			$blog->blog_img=$blogimgName;
			$request->fileblogPhoto->move(public_path('img'),$blogimgName);
		}

        if(isset($request->filebannerPhoto)){
            $bannerimgName = time().(rand(100,1000)).'.'.$request->filebannerPhoto->extension();
			$blog->banner_img=$bannerimgName;
			$request->filebannerPhoto->move(public_path('img'),$bannerimgName);
		}

        $blog->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


    
    public function destroy(Request $request){  
        $blogid=$request->input('d_blog');
		$blog= Allblog::find($blogid);
		$blog->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
