<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Pay;
use Illuminate\Http\Request;

class PayController extends Controller
{
    public function index()
    {

       return view('pages.frontend.pay.index'); 
    }
}
