<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Ourteam;
use App\Models\Team;
use App\Models\Client;
use App\Models\Achievement;
use Illuminate\Http\Request;

class OurteamController extends Controller
{
    public function index()
    {
        $data['client'] = Client::select('id', 'name', 'client_logo')->get();

        $data['achievement'] = Achievement::select('id', 'name', 'count')->get();

        $data['team'] = Team::select('id', 'name', 'email', 'designation', 'img', 'facebook_url')->get();

        return view('pages.frontend.our-team.index', $data); 
    }
}
