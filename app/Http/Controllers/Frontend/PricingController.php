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

        $data['addpricing'] = Addpricing::select('id', 'title', 'price', 'renew', 'service1', 'service2',
        'service3', 'service4', 'service5', 'service6', 'service7', 'service8', 'service9', 'service10', 'service11',
        'service12', 'service13', 'service14', 'service15', 'service16', 'service17')
        ->get();

       return view('pages.frontend.pricing.index', $data); 
    }
}
