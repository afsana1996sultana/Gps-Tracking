<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Support\Facades\DB;
use App\Models\Service;
use App\Models\Submenu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $submenu=Submenu::all();
        $service =DB::table('services')
            ->join('submenus','submenus.id', '=', 'services.s_name')
            ->select('submenus.submenu_name', 'services.*')
            ->get();
        return view("pages.backends.service.index",["service"=>$service, "submenu"=>$submenu]);
        
    }


    public function store(Request $request){
        $service=new Service; 
        $service->s_name=$request->txtServiceName;
        $service->slug=$request->txtSlug;
        $service->icon=$request->txtIcon;
        $service->title=$request->txtTitle;
        $service->heading=$request->txtHeading;
        $service->other_title=$request->txtOtherTitle;
        $service->other_heading=$request->txtOtherHeading;
        $service->details=$request->txtDetails;

        if(isset($request->filePhoto)){
            $imgName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$service->image=$imgName;
			$service->update();
			$request->filePhoto->move(public_path('img'),$imgName);
		}

        $service->deleted_at=$request->txtDeleted_at;
        $service->save();     
        return back()->with('success','Created Successfully.');
          
    }


    public function edit($id){
		$service=Service::find($id);
		return response()->json([
			'status'=>200,
			'service'=>$service
		]);
	}


    public function update(Request $request,Service $service){
        $serviceid=$request->input('cmbServiceId');
        $service = Service::find($serviceid);
        $service->id=$request->cmbServiceId; 
        $service->s_name=$request->txtServiceName;
        $service->slug=$request->txtSlug;
        $service->icon=$request->txtIcon;
        $service->title=$request->txtTitle;
        $service->heading=$request->txtHeading;
        $service->other_title=$request->txtOtherTitle;
        $service->other_heading=$request->txtOtherHeading;
        $service->details=$request->txtDetails;

        if(isset($request->filePhoto)){
			$imgName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$service->image=$imgName;
			$request->filePhoto->move(public_path('img'),$imgName);
		}

        $service->deleted_at=$request->txtDeleted_at;		   
        $service->update();
        return redirect()->back()
        ->with('success',' Updated successfully');               
    }


    public function destroy(Request $request){  
        $serviceid=$request->input('d_service');
		$service= Service::find($serviceid);
		$service->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
