<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Submenu;

class ServicedetailController extends Controller
{
    public function service_unit(Request $request){

        $data['SubmenuId'] = Submenu::where('slug',$request->slug)->select('id','submenu_name')->first();

        // $data['ProductData'] = Product::where('sub_category',$data['SubmenuId']->id)
        // ->get();

        return view('pages.frontend.service_unit.index', $data);
    }
}
