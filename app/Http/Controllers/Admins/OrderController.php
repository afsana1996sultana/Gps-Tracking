<?php

namespace App\Http\Controllers\Admins;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        $order=Order::all();
        return view("pages.backends.order.index",["order"=>$order]);
    }


    public function store(Request $request){
        $order = new Order; 
        $order->name=$request->name;
        $order->email=$request->email;
        $order->phone=$request->phone;
        $order->address=$request->address;
        $order->title=$request->title;
        $order->price=$request->price;
        $order->renew=$request->renew;
        $order->save();
        //return $request;
        return back()->with('your Order has been Submitted successfully!');
    }


    public function show($id){
		$order=Order::find($id);
		return response()->json([
			'status'=>200,
			'order'=>$order
		]);
	}


    public function destroy(Request $request){  
        $orderid=$request->input('d_order');
		$order= Order::find($orderid);
		$order->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
