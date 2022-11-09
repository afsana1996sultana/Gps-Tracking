<?php

namespace App\Http\Controllers\Admins;

use App\Models\Choosensection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChoosensectionController extends Controller
{
    public function index()
    {
        $section=Choosensection::all();
        return view("pages.backends.choosen-section.index",["section"=>$section]);
        
    }


    public function store(Request $request){
        $section=new Choosensection; 
        $section->icon=$request->txtIcon;
        $section->title=$request->txtTitle;
        $section->detail=$request->txtDetail;

        $section->deleted_at=$request->txtDeleted_at;
        $section->save();
               
        return back()->with('success','Created Successfully.');     
    }


    public function edit($id){
		$section=Choosensection::find($id);
		return response()->json([
			'status'=>200,
			'section'=>$section
		]);
	}


    public function update(Request $request,Choosensection $section){
        $sectionid=$request->input('cmbChoosensectionId');
        $section = Choosensection::find($sectionid);
        $section->id=$request->cmbChoosensectionId; 
        $section->icon=$request->txtIcon;
        $section->title=$request->txtTitle;
        $section->detail=$request->txtDetail;
        
        $section->deleted_at=$request->txtDeleted_at;		   
        $section->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


    public function destroy(Request $request){  
        $sectionid=$request->input('d_section');
		$section= Choosensection::find($sectionid);
		$section->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
