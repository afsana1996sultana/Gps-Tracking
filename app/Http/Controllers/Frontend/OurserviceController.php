<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Ourservice;
use Illuminate\Http\Request;

class OurserviceController extends Controller
{
    public function index()
    {
        // $data['client'] = Client::select('id', 'name', 'client_logo')->get();

        // $data['achievement'] = Achievement::select('id', 'name', 'count')->get();

       return view('pages.frontend.our-services.index',); 
    }
}
