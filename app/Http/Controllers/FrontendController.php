<?php

namespace App\Http\Controllers;

use App\Models\Frontend;
use App\Models\Client;
use App\Models\Achievement;
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

        return view('pages.frontend.home', $data);
        
    }
}
