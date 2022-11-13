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
        $pricing->service1=$request->txtService1;
        $pricing->service2=$request->txtService2;
        $pricing->service3=$request->txtService3;
        $pricing->service4=$request->txtService4;
        $pricing->service5=$request->txtService5;
        $pricing->service6=$request->txtService6;
        $pricing->service7=$request->txtService7;
        $pricing->service8=$request->txtService8;
        $pricing->service9=$request->txtService9;
        $pricing->service10=$request->txtService10;
        $pricing->service11=$request->txtService11;
        $pricing->service12=$request->txtService12;
        $pricing->service13=$request->txtService13;
        $pricing->service14=$request->txtService14;
        $pricing->service15=$request->txtService15;
        $pricing->service16=$request->txtService16;
        $pricing->service17=$request->txtService17;
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

        if(isset($request->txtService1)){
        $pricing->service1=$request->txtService1;
        } 

        if(isset($request->txtService2)){
        $pricing->service2=$request->txtService2;
        } 

        if(isset($request->txtService3)){
        $pricing->service3=$request->txtService3;
        } 

        if(isset($request->txtService4)){
        $pricing->service4=$request->txtService4;
        } 

        if(isset($request->txtService5)){
        $pricing->service5=$request->txtService5;
        } 

        if(isset($request->txtService6)){
        $pricing->service6=$request->txtService6;
        } 

        if(isset($request->txtService7)){
        $pricing->service7=$request->txtService7;
        } 

        if(isset($request->txtService8)){
        $pricing->service8=$request->txtService8;
        } 

        if(isset($request->txtService9)){
        $pricing->service9=$request->txtService9;
        } 

        if(isset($request->txtService10)){
        $pricing->service10=$request->txtService10;
        } 

        if(isset($request->txtService11)){
        $pricing->service11=$request->txtService11;
        }

        if(isset($request->txtService12)){
        $pricing->service12=$request->txtService12;
        }

        if(isset($request->txtService13)){
        $pricing->service13=$request->txtService13;
        }

        if(isset($request->txtService14)){
        $pricing->service14=$request->txtService14;
        }

        if(isset($request->txtService15)){
        $pricing->service15=$request->txtService15;
        }

        if(isset($request->txtService16)){
        $pricing->service16=$request->txtService16;
        }

        if(isset($request->txtService17)){
        $pricing->service17=$request->txtService17;
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
