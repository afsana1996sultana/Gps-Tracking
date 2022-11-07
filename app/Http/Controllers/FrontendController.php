<?php

namespace App\Http\Controllers;

use App\Models\Frontend;
use App\Models\Client;
use App\Models\Achievement;
use App\Models\Testimonial;
use App\Models\Cartraker;
use App\Models\Videocontent;
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

        return view('pages.frontend.home', $data);
        
    }
}
