<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Agent;
use App\Models\Salerequest;


class HomeController extends Controller
{
    //


    public function redirects()
    {
        $user=auth()->user();
        $role= $user['role'];
        $data=product::paginate('3');
        $count=cart::where('phone',$user['phone'])->count();
        if($role=='1')
        {
            return view('admin.adminhome');
        }
        else
        {
            return view('homm',compact("data","count"));

        }
    }
    public function home()
    {
        $user=auth()->user();
        $data= product::paginate('3');
        $count=cart::where('phone',$user['phone'])->count();
        return view('homm',compact('data','count'));

    }

    public function showcart()
    {
        $user=auth()->user();
        $cart=Cart::where('phone',$user['phone'])->get();

        $count=cart::where('phone',$user['phone'])->count();

        return view('showcart',compact('cart','count'));
    }
    public function cartshow()
    {
        $user=auth()->user();
        $cart=cart::where('phone',$user['phone'])->get();

        $count=cart::where('phone',$user['phone'])->count();

        return view('cartshow');
    }
    public function agenta()
    {
        $data=agent::all()->firstOrFail();
        return view('agents');
    }
    public function  usersale()
    {
        return view(' usersale');
    }
    public function salerequest(Request $request)
    {
     $data=new salerequest;
     $image=$request->image;
     $imagename=time(). '.'.$image->getClientOriginalExtension();
     $request->image->move('productimage',$imagename);
     $data->image=$imagename;
     $data->name=$request->name;
     $data->email=$request->email;
     $data->phone=$request->phone;
     $data->title=$request->title;
     $data->price=$request->price;
     $data->description=$request->description;
     $data->save();
     return redirect()->back()->with('message','property submitted successfully! Pending to be approved');

    }
    public function  status()
    {
        $user=auth()->user();
        $data=Salerequest::where('id',$user['id'])->get();
        return view('status',compact('data'));
    }
    public function salestatus(Request $request)
    {
     $data=new salerequest;
     $data->email=$request->email;
     $data->title=$request->title;
     $data->price=$request->price;
     
     $data->save();
     return redirect()->back()->with('message','property submitted successfully! Pending to be approved');

    }



}

