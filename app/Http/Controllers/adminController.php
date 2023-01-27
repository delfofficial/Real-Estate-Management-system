<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\agent;
use App\Models\order;
use App\Models\Product;
//use App\Models\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    //

    public function user()
    {
        $data=user::all();
        return view('admin.users',compact("data"));
    }
    public function deleteuser($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function product()
    {
        return view('admin.uploadproperty');
    }
    public function products(Request $request)
    {
     $data=new product;
     $image=$request->image;
     $imagename=time(). '.'.$image->getClientOriginalExtension();
     $request->image->move('productimage',$imagename);
     $data->image=$imagename;
     $data->title=$request->title;
     $data->price=$request->price;
     $data->description=$request->description;
     $data->save();
     return redirect()->back();

    }

    public function agent()
    {
    return view('admin.adminagent');

    }
    public function customerrequest()
    {
        $data=salerequest::all();
        return view('admin.customerrequest',compact("data"));

    }
    public function approve($id)
    {
        $data=salerequest::find($id)
        $data->status='approved';
        $data->save();
        return redirect()->back();

    }
    public function cancel($id)
    {
        $data=salerequest::find($id)
        $data->status='approved';
        $data->save();
        return redirect()->back();

    }
    
    
    public function addagent(Request $request)

       {
        $data = new agent;
        $image=$request->image;
        $imagename=time(). '.'.$image->getClientOriginalExtension();
        $request->image->move('agentimage',$imagename);
        $data->image=$imagename;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->save();
        return redirect()->back();
       }

       public function paid()
       {
           $data=Order::all();
           $total=$data->sum('price');
           return view('admin.paid',compact("data","total"));
       }


}
