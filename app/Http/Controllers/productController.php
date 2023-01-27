<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use App\Models\order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    //


    public function addcart(Request $request, $id)
    {
        if(Auth::id())
        {
            $user=auth()->user();
            $product=product::find($id);
            $cart=new cart;
            $cart->name=$user->name;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->product_title=$product->title;
            $cart->price=$product->price;
            $cart->image=$product->image;
            $cart->save();


            return redirect()->back()->with('message','property added successfully');
        }
        else
        {
            return redirect('login');
        }
    }
    public function prd()
    {
        $prd=product::all();
        return view('prd',compact('prd'));
    }


    public function showcart()
    {
        $user=auth()->user();
        $cart=cart::where('phone',$user['phone'])->get();

        $count=cart::where('phone',$user['phone'])->count();

        return view('showcart',compact('count','cart'));
    }
    public function deletecart($id)
    {
        $cart=cart::find($id);
        $cart->delete();
        return redirect()->back()->with('message','product removed successfully');
    }
     public function confirmorder(Request $request)
     {
        $user=auth()->user();
        $name=$user->name;
        $phone=$user->phone;
        $address=$user->address;
       foreach($request->productname as $key=>$productname)
       {
        $order=new order;
        $order->product_name = $request->productname[$key];
        $order->price = $request->price[$key];
        $order->name = $request->name[$key];
        $order->name = $name;
        $order->phone = $phone;
        $order->address = $address;
        $order->status = $request->status[$key];

        $order->save();
       }
       DB::table('carts')->where('phone',$phone)->delete();
       return redirect()->back()->with('message','product orderd successfully');
     }
     public function order(Request $request)
     {
        $user=auth()->user();
        $order=new order;
        $cart=cart::where('phone',$user['phone'])->firstOrFail();
        $order->name=$user->name;
        $order->phone=$user->phone;
        $order->address=$user->address;
        $order->product_name=$cart->product_title;
        $order->price=$cart->price;
        $total=DB::table('orders')->sum('price');
        $order->save();
        DB::table('carts')->where('phone',$phone)->delete();
        return redirect()->back()->with('message','product orderd successfully');


     }

     public function search(Request $request)
     {
        $search=$request->search;
        $data=product::where('title','Like','%'.$search.'%')->get();
        return view('search',compact('data'));
     }


}
