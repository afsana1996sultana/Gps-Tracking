<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Contactus;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function index()
    {
        $data['service'] = Service::select('id', 's_name', 'title', 'other_title', 'heading', 'other_heading', 'slug', 'icon', 'details', 'image')->get();

        $data['contact'] = Contact::select('id', 'header1', 'header2', 'phone', 'email', 'detail')->get();

        return view('pages.frontend.contact-us.index', $data); 
    }
}
