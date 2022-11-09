<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Serviceunit;
use App\Models\Service;
use App\Models\Submenu;
use App\Models\Choosensection;
use Illuminate\Http\Request;

class ServiceunitController extends Controller
{
    public function service_unit(Request $request){
        

        $SubmenuId = Submenu::where('slug',$request->url)->select('id', 'submenu_name')->first();

        $data['ServiceData'] = Service::where('s_name',$SubmenuId->id)->first();

        $data['section'] = Choosensection::select('id', 'title', 'detail', 'icon')->get();

        return view('pages.frontend.service_unit.index', $data);

    }
}
