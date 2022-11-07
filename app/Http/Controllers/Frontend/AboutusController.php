<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use App\Models\Client;
use App\Models\Achievement;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index()
    {
        $data['client'] = Client::select('id', 'name', 'client_logo')->get();

        $data['achievement'] = Achievement::select('id', 'name', 'count')->get();

       return view('pages.frontend.about-us.index', $data); 
    }
}
