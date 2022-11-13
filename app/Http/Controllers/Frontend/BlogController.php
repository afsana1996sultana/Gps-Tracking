<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Allblog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data['blog'] = Allblog::select('id', 'name', 'title', 'slug', 'blog_img','banner_img', 'published_date', 'description')->get();
        
        return view('pages.frontend.blog.index', $data); 
    }
}
