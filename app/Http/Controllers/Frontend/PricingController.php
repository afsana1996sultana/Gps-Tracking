<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Pricing;
use App\Models\Client;
use App\Models\Addpricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        $data['client'] = Client::select('id', 'name', 'client_logo')->get();

        $data['addpricing'] = Addpricing::select('id', 'title', 'price', 'renew', 'design', 'information',
        'form', 'loading', 'media', 'update', 'slider', 'page', 'sample', 'affordable', 'security')
        ->get();

       return view('pages.frontend.pricing.index', $data); 
    }
}
