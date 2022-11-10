<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Privacy;
use App\Models\Privacypolicy;
use App\Models\Choosensection;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function index()
    {
       $data['section'] = Choosensection::select('id', 'title', 'detail', 'icon')->get();

       $data['privacy'] = Privacypolicy::select('id', 'title', 'description')->get();

       return view('pages.frontend.privacy-policy.index', $data); 
    }
}
