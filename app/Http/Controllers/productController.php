<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use App\Models\order;
use App\Models\Location;

use App\Models\requestsale;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    //

/*
    public function addcart(Request $request, $id)
    {
        if(Auth::id())
        {
            $user=auth()->user();
            $product=product::find($id);
            $data=requestsale::find($id);
            $cart=new cart([]);
            $cart->name=$user->name;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->product_title=$product->title || $data->title;
            $cart->price=$product->price ||  $data->price;
            $cart->image=$product->image || $data->image;
            $cart->save();


            return redirect()->back()->with('message','property added successfully');
        }
        else
        {
            return redirect('login');
        }
    } */


/*
public function addcart(Request $request, $id)
{
    if(Auth::id())
    {
        $user=auth()->user();
        $salesRequest = requestsale::find($id);
        $product = product::find($id);

        $cart=new cart();
        $cart->name=$user->name;
        $cart->phone=$user->phone;
        $cart->address=$user->address;

        // Check if the product and sales request objects are not null before trying to access their properties
        $cart->title = '';
        if ($product) {
            $cart->title = $product->title;
        }
        if ($salesRequest) {
            $cart->title = $salesRequest->title;
        }
        $cart->product_title= $title;

        // Set the price and image attributes to the values from the product
       if ($product) {
            $cart->price=$product->price;
            $cart->image=$product->image;
        }
        $cart->price = '';
        if ($product) {
            $cart->price = $product->price;
        }
        if ($salesRequest) {
            $cart->price =  $salesRequest->price;
        }
        $cart->image = '';
        if ($product) {
            $cart->image = $product->image;
        }
        if ($salesRequest) {
            $cart->image = $salesRequest->image;
        }
        $cart->save();

        return redirect()->back()->with('message','property added successfully');
    }
    else
    {
        return redirect('login');
    }
}
*/

public function addcart(Request $request, $id)
{
    if (Auth::id()) {
        $user = auth()->user();
        $salesRequest = requestsale::find($id);
        $product = product::find($id);
        $order= order::find($id);
        $cartItem = cart::where('id', $id)->where('phone', $user->phone)->first();
        //if ($cartItem) {
            //return redirect()->back()->with('error', 'Product already in cart.');
       // }




        $cart = new cart();
        $cart->name = $user->name;
        $cart->phone = $user->phone;
        $cart->address = $user->address;


        if ($product) {
            $cart->product_title = $product->title;
            $cart->price = $product->price;
            $cart->image = $product->image;
        }

        if ($salesRequest) {
            $cart->product_title = $salesRequest->title;
            $cart->price = $salesRequest->price;
            $cart->image = $salesRequest->image;

        }

        //cart->title = $title;
        $cart->save();

        return redirect()->back()->with('message', 'property added successfully');
    }
    else {
        return redirect('login');
    }
}



public function placeorder(Request $request)
{
    if(Auth::id())
    {
        $user = auth()->user();
        $carts = Cart::where('name', $user->name)->get();

        foreach ($carts as $cart) {
            $order = new Order();
            $order->name = $cart->name;
            $order->phone = $cart->phone;
            $order->email = $cart->email;
            $order->address = $cart->address;
            $order->product_name = $cart->product_title;
            $order->price = $cart->price;

            $order->save();
        }

        // Delete the cart records after the order has been placed
        Cart::where('name', $user->name)->delete();

        return redirect()->back()->with('message', 'Order placed successfully');
    }
    else
    {
        return redirect('login');
    }
}






    public function prd()
    {
        $sale_items = DB::table('requestsales')
        ->where('status', '=', 'approved')
        ->get();
        $prd=product::all();
        $locations = Location::all(); // Use camelCase for variable name

        return view('prd',compact('prd','sale_items','locations'));
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
    public function video($id)
    {
        $data=product::find($id);
        $req=requestsales::find($id);
        return view('tour',compact('data','req'));
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
     /*
     public function order(Request $request)
     {
        $user=auth()->user();
        $order=new order;
        $cart=cart::where('phone',$user['phone'])->get();
        $order->name=$user->name;
        $order->phone=$user->phone;
        $order->email=$user->email;
        $order->address=$user->address;
        $order->product_name=$cart->product_title;
        $order->price=$cart->price;

        $total=DB::table('orders')->sum('price');
        $order->save();
        DB::table('carts')->where('phone',$phone)->delete();
        return redirect()->back()->with('message','product orderd successfully');


     } */

     public function order(Request $request)
{
    $user = auth()->user();
    $order = new Order;
    $carts = Cart::where('phone', $user['phone'])->get();
    // Get a list of product titles that have already been ordered
    $ordered_product_titles = order::pluck('product_name')->toArray();

    // Loop through the cart and create an order for each item
    foreach ($carts as $item) {
        // Check if the current product has already been ordered
        if (in_array($item->product_title, $ordered_product_titles)) {
            // If the product has already been ordered, skip it and move on to the next item
            continue;
        }



        $order->name = $user->name;
        $order->phone = $user->phone;
        $order->email = $user->email;
        $order->address = $user->address;
        $order->product_name = $item->product_title;


        $order->price = $item->price;


        $order->save();
    }
    // Add the product ID of the current item to the list of ordered products

    $total = DB::table('orders')->sum('price');
    DB::table('carts')->where('phone', $user['phone'])->delete();
    return redirect()->back()->with('message', 'Property purchased successfully');
}
/*
php artisan make:migration add_video_to_salereusts_table --table=requestsales
public function order(Request $request)
{
    $user = auth()->user();
    $carts = Cart::where('phone', $user['phone'])->get();

    foreach ($carts as $cart) {
        $order = new Order;
        $order->name = $user->name;
        $order->phone = $user->phone;
        $order->email = $user->email;
        $order->address = $user->address;

        // Check if the cart item has a product or a sales request
        $product = Product::find($cart->product_id);
        $salesRequest = RequestSale::find($cart->request_id);

        $order->title = '';
        if ($product) {
            $order->product_name .= $product->title;
        }
        if ($salesRequest) {
            $order->product_name .= ' - ' . $salesRequest->title;
        }
        //order->product_name = $title;

        $order->price = 0;
        if ($product) {
            $order->price += $product->price;
        }
        if ($salesRequest) {
            $order->price += $salesRequest->price;
        }
    //$cart->price= $price;

        $order->save();
    }

    $total = DB::table('orders')->sum('price');
    DB::table('carts')->where('phone', $user['phone'])->delete();
    return redirect()->back()->with('message', 'Property purchased successfully');
}
*/





     public function search(Request $request)
     {
        $search=$request->search;
        $data=product::where('title','Like','%'.$search.'%')->get();
        return view('search',compact('data'));
     }
     // ProductController.php

public function search1(Request $request)
{
    $query = Product::query();
    //$locations=location::all();
    $locations = Location::all(); // Use camelCase for variable name


    // Check if title is provided
    if ($request->has('title')) {
        $query->where('title', 'like', '%' . $request->input('title') . '%');
    }

    // Check if location is provided
    if ($request->has('location')) {
        $query->where('location', $request->input('location'));
    }
    //$location = $request->input('location');
     // Check if location is provided
     if ($request->has('location')) {
        $query->where('location', $request->input('location'));
    }


    // Check if min and max price are provided
    if ($request->has('min_price')) {
        $query->where('price', '>=', $request->input('min_price'));
    }

    if ($request->has('max_price')) {
        $query->where('price', '<=', $request->input('max_price'));
    }

    $products = $query->get();

    return view('search1', compact('products'));
}



}
