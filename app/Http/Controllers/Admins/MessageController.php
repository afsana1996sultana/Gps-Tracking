<?php

namespace App\Http\Controllers\Admins;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function index()
    {
        $message=Message::all();
        return view("pages.backends.message.index",["message"=>$message]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'services' => 'required',
            'msg' => 'required'
         ]);


        $message = new Message; 
        $message->name=$request->name;
        $message->email=$request->email;
        $message->phone=$request->phone;
        $message->subject=$request->subject;
        $message->service=$request->services;
        $message->message=$request->msg;

        $message->save();
        //return $request;
        return back()->with('your message has been saved successfully!');
    }


    public function show($id){
		$message=Message::find($id);
		return response()->json([
			'status'=>200,
			'message'=>$message
		]);
	}


    public function destroy(Request $request){  
        $messageid=$request->input('d_message');
		$message= Message::find($messageid);
		$message->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
