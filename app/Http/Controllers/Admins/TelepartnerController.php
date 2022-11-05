<?php

namespace App\Http\Controllers\Admins;

use App\Models\Telepartner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TelepartnerController extends Controller
{
    public function index()
    {
        $telepartner=Telepartner::all();
        return view("pages.backends.tele-partner.index",["telepartner"=>$telepartner]);
        
    }


    public function store(Request $request){
        $telepartner=new Telepartner; 
        $telepartner->name=$request->txtName;

        if(isset($request->filePhoto)){
            $imgName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$telepartner->partner_logo=$imgName;
			$telepartner->update();
			$request->filePhoto->move(public_path('img'),$imgName);
		}
        $telepartner->deleted_at=$request->txtDeleted_at;
        $telepartner->save();
               
        return back()->with('success','Created Successfully.');     
    }


    public function edit($id){
		$telepartner=Telepartner::find($id);
		return response()->json([
			'status'=>200,
			'telepartner'=>$telepartner
		]);
	}


    public function update(Request $request,Telepartner $telepartner){
        $telepartnerid=$request->input('cmbTelepartnerId');
        $telepartner = Telepartner::find($telepartnerid);
        $telepartner->id=$request->cmbTelepartnerId; 
        $telepartner->name=$request->txtName;
        
        if(isset($request->filePhoto)){
			$imgName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$telepartner->partner_logo=$imgName;
			$request->filePhoto->move(public_path('img'),$imgName);
		}
        $telepartner->deleted_at=$request->txtDeleted_at;		   
        $telepartner->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


    public function destroy(Request $request){  
        $telepartnerid=$request->input('d_telepartner');
		$telepartner= Telepartner::find($telepartnerid);
		$telepartner->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
