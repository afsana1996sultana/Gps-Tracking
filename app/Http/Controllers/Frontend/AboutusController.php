<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use App\Models\About;
use App\Models\Client;
use App\Models\Achievement;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index()
    {
        $data['client'] = Client::select('id', 'name', 'client_logo')->get();

        $data['achievement'] = Achievement::select('id', 'name', 'count')->get();

        $data['about'] = About::select('id', 'title', 'detail', 'mission_detail', 'vission_detail', 'mission_title', 'vission_title', 'img', 'icon_img1', 'icon_img2', 'icon_img3', 'about_video_url')->get();


       return view('pages.frontend.about-us.index', $data); 
    }
}
