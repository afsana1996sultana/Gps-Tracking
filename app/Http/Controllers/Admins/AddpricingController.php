<?php

namespace App\Http\Controllers\Admins;

use App\Models\Addpricing;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddpricingController extends Controller
{
    public function index()
    {
        $pricing=Addpricing::all();
        return view("pages.backends.add-pricing.index",["pricing"=>$pricing]);
        
    }


    public function create()
    {
        $pricing=Addpricing::all();
        return view("pages.backends.add-pricing.create",["pricing"=>$pricing]);
    }


    public function store(Request $request){
        $pricing=new Addpricing;
        $pricing->title=$request->txtTitle;
        $pricing->price=$request->txtPrice;
        $pricing->renew=$request->txtRenew;
        $pricing->design=$request->txtDesign;
        $pricing->information=$request->txtInformation;
        $pricing->form=$request->txtForm;
        $pricing->loading=$request->txtLoading;
        $pricing->media=$request->txtMedia;
        $pricing->update=$request->txtUpdate;
        $pricing->slider=$request->txtSlider;
        $pricing->page=$request->txtPage;
        $pricing->sample=$request->txtSample;
        $pricing->affordable=$request->txtAffordable;
        $pricing->security=$request->txtSecurity;
        $pricing->deleted_at=$request->txtDeleted_at;

        $pricing->save();
        //dd($pricing);        
        return back()->with('success','Created Successfully.');
          
    }


    public function edit($id){
        $pricing=Addpricing::find($id);    
        return view("pages.backends.add-pricing.edit",["pricing"=>$pricing]);
		
	}



    public function update(Request $request,$id){
        $pricing = Addpricing::find($id);

        if(isset($request->txtTitle)){
        $pricing->title=$request->txtTitle;
        }

        if(isset($request->txtPrice)){
        $pricing->price=$request->txtPrice;
        }

        if(isset($request->txtRenew)){
        $pricing->renew=$request->txtRenew;
        }

        if(isset($request->txtDesign)){
        $pricing->design=$request->txtDesign;
        } 

        if(isset($request->txtInformation)){
        $pricing->information=$request->txtInformation;
        } 

        if(isset($request->txtForm)){
        $pricing->form=$request->txtForm;
        } 

        if(isset($request->txtLoading)){
        $pricing->loading=$request->txtLoading;
        } 

        if(isset($request->txtMedia)){
        $pricing->media=$request->txtMedia;
        } 

        if(isset($request->txtUpdate)){
        $pricing->update=$request->txtUpdate;
        } 

        if(isset($request->txtSlider)){
        $pricing->slider=$request->txtSlider;
        } 

        if(isset($request->txtPage)){
        $pricing->page=$request->txtPage;
        } 

        if(isset($request->txtSample)){
        $pricing->sample=$request->txtSample;
        } 

        if(isset($request->txtAffordable)){
        $pricing->affordable=$request->txtAffordable;
        } 

        if(isset($request->txtSecurity)){
        $pricing->security=$request->txtSecurity;
        } 

        $pricing->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


    public function destroy(Request $request){  
        $pricingid=$request->input('d_pricing');
		$pricing= Addpricing::find($pricingid);
		$pricing->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }

}
