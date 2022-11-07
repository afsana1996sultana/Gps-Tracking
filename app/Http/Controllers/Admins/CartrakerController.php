<?php

namespace App\Http\Controllers\Admins;

use App\Models\Cartraker;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartrakerController extends Controller
{
    public function index()
    {
        $cartraker=Cartraker::all();
        return view("pages.backends.car-traker.index",["cartraker"=>$cartraker]);
        
    }


    public function store(Request $request){
        $cartraker=new Cartraker; 
        $cartraker->name=$request->txtName;

        if(isset($request->filePhoto1)){
            $img1Name = time().(rand(100,1000)).'.'.$request->filePhoto1->extension();
			$cartraker->img1=$img1Name;
			$cartraker->update();
			$request->filePhoto1->move(public_path('img'),$img1Name);
		}

        if(isset($request->filePhoto2)){
            $img2Name = time().(rand(100,1000)).'.'.$request->filePhoto2->extension();
			$cartraker->img2=$img2Name;
			$cartraker->update();
			$request->filePhoto2->move(public_path('img'),$img2Name);
		}
        $cartraker->deleted_at=$request->txtDeleted_at;
        $cartraker->save();
               
        return back()->with('success','Created Successfully.');     
    }


    public function edit($id){
		$cartraker=Cartraker::find($id);
		return response()->json([
			'status'=>200,
			'cartraker'=>$cartraker
		]);
	}


    public function update(Request $request,Cartraker $cartraker){
        $cartrakerid=$request->input('cmbCartrakerId');
        $cartraker = Cartraker::find($cartrakerid);
        $cartraker->id=$request->cmbCartrakerId; 
        $cartraker->name=$request->txtName;
        
        if(isset($request->filePhoto1)){
            $img1Name = time().(rand(100,1000)).'.'.$request->filePhoto1->extension();
			$cartraker->img1=$img1Name;
			$request->filePhoto1->move(public_path('img'),$img1Name);
		}

        if(isset($request->filePhoto2)){
            $img2Name = time().(rand(100,1000)).'.'.$request->filePhoto2->extension();
			$cartraker->img2=$img2Name;
			$request->filePhoto2->move(public_path('img'),$img2Name);
		}

        $cartraker->deleted_at=$request->txtDeleted_at;		   
        $cartraker->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


    public function destroy(Request $request){  
        $cartrakerid=$request->input('d_cartraker');
		$cartraker= Cartraker::find($cartrakerid);
		$cartraker->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
