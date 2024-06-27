<?php

namespace App\Http\Controllers;
use App\Mail\ordermail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\agent;
use App\Models\order;
use App\Models\Location;
use App\Models\Product; //requestsale
use App\Models\salerequest;
use App\Models\requestsale;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
//use Barryvdh\DomPDF\Facade\Pdf;
use Spatie\Activitylog\Traits\LogsActivity;

use Illuminate\Support\Facades\Log;
use PDF;

class adminController extends Controller
{
    //

    public function user()
    {
        $data=user::all();
        return view('admin.users',compact("data"));
    }
    public function people()
    {
        $data=user::all();
        return view('people',compact("data"));
    }
    public function downloadPDF()
{
    $data = user::all(); // Retrieve all users from the database
    $pdf = PDF::loadView('people',compact('data')); // Generate PDF from 'people' view and pass 'data' to it
    return $pdf->download('people-details'.time().'.pdf'); // Download the PDF with a filename including the current timestamp
}
    public function deleteuser($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function product()
    {
        $locations = Location::all(); 

        return view('admin.uploadproperty',compact('locations'));
    }
    public function video($id)
    {
        $data=product::find($id);

        return view('tour',compact('data'));
    }
//ordermail
public function ordermail($id)
{
    $order =order()->all();

        $user_email = $purchase->user->email;

        $data = [
            'title' => 'Email Subject',
            'body' => 'Email Body',
            'actionurl' => 'actionurl',juhjbkdffdcz
        ];
        Mail::to($order->email)->send(new ordermail($order));

        //Mail::send('email.purchase', $data, function($message) use ($user_email) {
           // $message->to($user_email)
                    //->subject('Purchase Confirmation');
       // });
    } //confirmationmail
    public function confirmationmail($id)
    {
        Mail::to($order->email)->send(new ordermail($order));

    }




   public function products(Request $request)
   {
       $data = new Product(); // Assuming 'Product' is your model
   
       // Handle features and quantities
       // Inside your controller's products method
       /*
$features = $request->input('features', []);
$quantities = $request->input('quantities', []);

// Combine features and quantities into a single array
$selectedFeatures = array_combine($features, $quantities);

// Convert the array to JSON and store in the 'features' column
$data->features = json_encode($selectedFeatures); */

// ... rest of your code ...

       $data->features = $request->features;
       $image = $request->image;
       $imagename = time() . '.' . $image->getClientOriginalExtension();
       $request->image->move('productimage', $imagename);
   
       $video = $request->video;
       $videoname = time() . '.' . $video->getClientOriginalExtension();
       $request->video->move('productvideo', $videoname);
   
       $locations = Location::all(); // Assuming you have a 'Location' model
       $data->location = $request->location;
       $data->image = $imagename;
       $data->video = $videoname;
       $data->title = $request->title;
       $data->price = $request->price;
       $data->description = $request->description;
   
       $data->save();
   
       return redirect()->back()->with('message', 'Property added successfully!');
   }
   

    public function agent()
    {
    return view('admin.adminagent');

    }
    public function customerrequest()
    {
        $data=requestsale::all();
        return view('admin.customerrequest',compact("data"));

    }
    //listing
    public function listing()
    {
        $data=product::all();
        $sale_items = DB::table('requestsales')
            ->where('status', '=', 'approved')
            ->get();
        return view('admin.listing',compact("data","sale_items"));

    }
    public function requestsale(Request $request)
    {
     $data=new requestsale;
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
    public function approve($id)
    {
        $data =requestsale::find($id);
        $data->status = 'approved';
        $data->save();
        return redirect()->back();

    }
    public function cancel($id)
    {
        $data=requestsale::find($id);
        $data->status='cancelled';
        $data->save();
        return redirect()->back();

    }
    public function edituser($id)
    {
        $data=user::find($id);

        return view('admin.edituser',compact('data'));

    }
    public function updateuser(Request $request,$id)
    {
      $data=user::find($id);
      $image=$request->image;
      if($image){
        $imagename=time(). '.'.$image->getClientOriginalExtension();
        $request->image->move('productimage',$imagename);
        $data->image=$imagename;

      }

     $data->name=$request->name;
     $data->email=$request->email;
     $data->role=$request->role;
     $data->phone=$request->phone;
     $data->address=$request->address;
     $data->save();
     return redirect()->back()->with('message','user details updated successfully!');
    }

    //editproduct
    public function editproduct($id)
    {
        $data=product::find($id);

        return view('admin.editproduct',compact('data'));

    }
    //editsale
    public function editsale($id)
    {

        $data =requestsale::find($id);

        return view('admin.editsale',compact('data'));

    }

    //updateproduct
    public function updateproduct(Request $request,$id)
    {
      $data=product::find($id);
      $image=$request->image;
      if($image){
        $imagename=time(). '.'.$image->getClientOriginalExtension();
        $request->image->move('productimage',$imagename);
        $data->image=$imagename;

      }
      $video=$request->video;
      if($video){

     $videoname=time(). '.'.$video->getClientOriginalExtension();
     $request->video->move('productvideo',$videoname);
      }



     $data->video=$videoname;
     $data->title=$request->title;
     $data->price=$request->price;
     $data->location=$request->location;
     $data->features=$request->features;
     $data->description=$request->description;
     $data->save();
     return redirect()->back()->with('message','property updated successfully!');

    } //updatesale
    public function updatesale(Request $request,$id)
    {
        $data =requestsale::find($id);
      $image=$request->image;
      if($image){
        $imagename=time(). '.'.$image->getClientOriginalExtension();
        $request->image->move('salerequest',$imagename);
        $data->image=$imagename;

      }
      $video=$request->video;
      if($video){

     $videoname=time(). '.'.$video->getClientOriginalExtension();
     $request->video->move('productvideo',$videoname);
      }



     $data->video=$videoname;
     $data->title=$request->title;
     $data->price=$request->price;
     $data->features=$request->features;
     $data->location=$request->location;
     $data->description=$request->description;
     $data->save();
     return redirect()->back()->with('message','property edited successfully!');

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
        return redirect()->back()->with('message','property added successfully!');
       }

       public function paid()
       {
           $data=Order::all();
           $total=$data->sum('price');
           return view('admin.paid',compact("data","total"));
       }
       public function getLocationView()
       {

           return view('admin.addLocation');
       }

//usercancel
public function usercancel($id)
    {
        $req= requestsale::find($id);
        $req->delete();
        return redirect()->back();
    }
    public function addLocation(Request $request)

       {
        $data = new Location;
        $data->name=$request->name;

        $data->save();
        return redirect()->back()->with('message','location added successfully!');
       }



}
