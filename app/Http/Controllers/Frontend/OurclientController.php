<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Ourclient;
use App\Models\Client;
use App\Models\Testimonial;
use App\Models\Cartraker;
use Illuminate\Http\Request;

class OurclientController extends Controller
{
    public function index()
    {
        $data['client'] = Client::select('id', 'name', 'client_logo')->get();

        $data['testimonial'] = Testimonial::select('id', 'company_name', 'header', 'detail', 'img')->get();

        $data['cartraker'] = Cartraker::select('id', 'name', 'img1', 'img2')->get();

       return view('pages.frontend.our-clients.index', $data); 
    }
}
