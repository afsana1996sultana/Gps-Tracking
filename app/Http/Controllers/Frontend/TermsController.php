<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Terms;
use App\Models\Termscondition;
use App\Models\Choosensection;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function index()
    {
       $data['section'] = Choosensection::select('id', 'title', 'detail', 'icon')->get();

       $data['terms'] = Termscondition::select('id', 'title', 'description')->get();

       return view('pages.frontend.terms-condition.index', $data); 
    }
}
