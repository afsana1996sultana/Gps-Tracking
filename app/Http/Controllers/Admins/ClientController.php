<?php

namespace App\Http\Controllers\Admins;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $client=Client::all();
        return view("pages.backends.client.index",["client"=>$client]);
        
    }

    public function store(Request $request){
        $client=new Client; 
        $client->name=$request->txtName;

        if(isset($request->filePhoto)){
            $imgName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$client->client_logo=$imgName;
			$client->update();
			$request->filePhoto->move(public_path('img'),$imgName);
		}
        $client->deleted_at=$request->txtDeleted_at;
        $client->save();
               
        return back()->with('success','Created Successfully.');     
    }


    public function edit($id){
		$client=Client::find($id);
		return response()->json([
			'status'=>200,
			'client'=>$client
		]);
	}


    public function update(Request $request,Client $client){
        $clientid=$request->input('cmbClientId');
        $client = Client::find($clientid);
        $client->id=$request->cmbClientId; 
        $client->name=$request->txtName;
        
        if(isset($request->filePhoto)){
			$imgName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$client->client_logo=$imgName;
			$request->filePhoto->move(public_path('img'),$imgName);
		}
        $client->deleted_at=$request->txtDeleted_at;		   
        $client->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


    public function destroy(Request $request){  
        $clientid=$request->input('d_client');
		$client= Client::find($clientid);
		$client->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
