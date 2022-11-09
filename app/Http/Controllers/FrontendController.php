<?php

namespace App\Http\Controllers;

use App\Models\Frontend;
use App\Models\About;
use App\Models\Client;
use App\Models\Achievement;
use App\Models\Testimonial;
use App\Models\Cartraker;
use App\Models\Videocontent;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\DB;


class FrontendController extends Controller
{
    public function home()
    {
        $data['client'] = Client::select('id', 'name', 'client_logo')->get();

        $data['achievement'] = Achievement::select('id', 'name', 'count')->get();

        $data['testimonial'] = Testimonial::select('id', 'company_name', 'header', 'detail', 'img')->get();

        $data['cartraker'] = Cartraker::select('id', 'name', 'img1', 'img2')->get();

        $data['videocontent'] = Videocontent::select('id', 'name', 'video_url')->get();

        $data['about'] = About::select('id', 'title', 'detail', 'mission_detail', 'mission_detail', 'mission_title', 'vission_title', 'img', 'icon_img1', 'icon_img2', 'icon_img3', 'about_video_url')->get();

        $data['service'] = Service::select('id', 's_name', 'title', 'other_title', 'heading', 'other_heading', 'slug', 'icon', 'details', 'image')->get();

        return view('pages.frontend.home', $data);
        
    }
}
