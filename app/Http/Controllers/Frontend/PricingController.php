<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Pricing;
use App\Models\Client;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        $data['client'] = Client::select('id', 'name', 'client_logo')->get();

       return view('pages.frontend.pricing.index', $data); 
    }
}
