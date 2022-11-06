<?php

namespace App\Http\Controllers\Admins;

use App\Models\Achievement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function index()
    {
        $achievement=Achievement::all();
        return view("pages.backends.achievement.index",["achievement"=>$achievement]);
        
    }


    public function store(Request $request){
        $achievement=new Achievement; 
        $achievement->name=$request->txtName;
        $achievement->count=$request->txtCount;

        $achievement->deleted_at=$request->txtDeleted_at;
        $achievement->save();
               
        return back()->with('success','Created Successfully.');     
    }


    public function edit($id){
		$achievement=Achievement::find($id);
		return response()->json([
			'status'=>200,
			'achievement'=>$achievement
		]);
	}



    public function update(Request $request,Achievement $achievement){
        $achievementid=$request->input('cmbAchievementId');
        $achievement = Achievement::find($achievementid);
        $achievement->id=$request->cmbAchievementId; 
        $achievement->name=$request->txtName;
        $achievement->count=$request->txtCount;
        
        $achievement->deleted_at=$request->txtDeleted_at;		   
        $achievement->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


    public function destroy(Request $request){  
        $achievementid=$request->input('d_achievement');
		$achievement= Achievement::find($achievementid);
		$achievement->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
