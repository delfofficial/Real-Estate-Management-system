<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Location;
use App\Models\Agent;
use App\Models\Salerequest;
use App\Models\requestsale;
use Illuminate\Support\Facades\DB;
use Notification;
use App\Notifications\sendNotification;


class HomeController extends Controller
{
    //


    public function redirects()
    {
        $sale_items = DB::table('requestsales')
        ->where('status', '=', 'approved')
        ->get();
        $user=auth()->user();
        $role= $user->role;
        $data=product::paginate(4);
        $locations = Location::all(); // Use camelCase for variable name

        $count=cart::where('phone',$user['phone'])->count();
        if($role=='1')
        {
            return view('admin.adminhome');
        }
        else
        {
            return view('homm',compact("data","count","sale_items","locations"));

        }
    }
    public function home()
    {
        $sale_items = DB::table('requestsales')
            ->where('status', '=', 'approved')
            ->get();

        $user=auth()->user();
        $data= product::paginate('3');
        $locations = Location::all(); // Use camelCase for variable name
        $count = 0;
        if ($user) {
            $count = cart::where('phone', $user['phone'])->count();
        }

      return view('homm',compact('data','count','sale_items','locations'));


    }
    public function sendnotification()
    {
        $order=order::all();

        $details=[
            'greeting'=>'Greetings! ',
            'body'=>'This is to confirm purchase purchase of property from Kaystated',
            'actiontext'=>'We are grateful to you for being our customer',
            'actionurl'=>'',
            'lastline'=>'Thank you!',
        ];
    Notification::send($order,new  sendNotification($details));
    dd('done');

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
        $data=agent::all();
        return view('agents',compact('data'));
    }
    public function prod()
    {

        $data = DB::table('products')
           ->select('id', 'title', 'price', 'description', 'image')
           ->union(DB::table('requestsales')
                     ->select('id', 'title', 'price', 'description', 'image' ))
           ->get();
        return view('prod',compact('data'));

    }
    public function  usersale()
    {
        return view('usersale');
    }
    public function salerequest(Request $request)
    {
     $data=new Salerequest;
     $image=$request->image;
     $imagename=time(). '.'.$image->getClientOriginalExtension();
     $request->image->move('salerequest',$imagename);
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
        $data=requestsale::where('id',$user['id'])->get();
        return view('status',compact('data'));
    }
    public function salestatus(Request $request)
    {
     $data=new requestsale;
     $data->email=$request->email;
     $data->title=$request->title;
     $data->price=$request->price;

     $data->save();
     return redirect()->back()->with('message','property submitted successfully! Pending to be approved');

    }



}

