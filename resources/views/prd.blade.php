<?php error_reporting(E_ALL);
ini_set('display_errors', 1); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">



    @include('css');
    <style>
        .product-image {
            width: 200px; /* Set the desired width */
            height: 150px; /* Set the desired height */
            object-fit: cover; /* Optional: Adjusts how the image is resized to fit its container */
        }
    </style>

</head>
<body>

@include('navbar');

@if(session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" items-dismiss="alert"></button>
{{session()->get('message')}}
</div>
@endif
<!--
<div class="lis" style="margin-top: 100px; text-align:center; font-size: 40px; margin-bottom:10px;">


       <h1> Property Listing</h1>

</div>

<form action="{url('search')}}" method="POST"  style="float:right; padding:10px;">
   csrf
    <input  class="search" type="search" name="search" placeholder="search">
    <input type="submit" value="Search" class="btn btn-success">
    <button></button>
</form>
<br> <br><br>
<div class="row">
    foreach($prd as $item1)
      <div class="col-md-3">

        <img src="/productimage/{$item1->image }}" alt="prd" class="product-image" >


        <div>{$item1->title }}</div>
        <div>{ $item1->price }}</div>
        <div>{ $item1->location }}</div>
        <div>{ $item1->features }}</div>



      </div>

      if($loop->iteration % 4 == 0)
        </div><div class="row">
      endif
      <form action="{route('addcart',$item1->id)}}" method="POST">
        csrf

        <input type="submit" class="cart btn btn-success"  value="Save property">


    </form>

    endforeach

    foreach($sale_items as $item2)
      <div class="col-md-3">
        <img src="/salerequest/{$item2->image }}" alt="prd" class="product-image">

       <div> { $item2->title }}</div>
        <div>{ $item2->price }}</div>
        <div>{ $item1->location }}</div>
        <div>{ $item1->features }}</div>
        <div class="col" style="display: flex;">

<form action="{route('addcart',$item2->id)}}" method="POST">
    csrf

    <input type="submit" class="cart btn btn-success"  value="Save property">


</form>


      </div>

      if($loop->iteration % 4 == 0)
        </div><div class="row">
      endif
    endforeach
  </div> -->
  <br> <br>  <br>
  <div class="container cont">
    <div class="row mt-3">
      @foreach($prd as $item2)
          <div class="col-md-3 mr-2" style="position:relative; height:300px; ">
            <img src="/productimage/{{$item2->image }}" alt="prd" class="product-image" >

              <div class="pp bg-warning" style="position: absolute; top:10px; right:10px;">
                  <button class="btn btn-warning">For {{ $item2->title }}</button>
              </div>
              <p>{{ $item2->features }}</p>
              <p class="text-warning{{ $item2->price }}"></p>
              <div class="loc d-flex justify-content-between">
                <a style="padding: 3px;" class="p-0"><i class="fas fa-map-marker-alt text-warning"></i>{{ $item2->location }}</a>
                <a style="padding: 3px;" class="p-0"><i class="fas fa-money"></i><b>${{ $item2->price }}</b></a>
            </div>


            <a href="{{url('/video',$item2->id)}}" class="btn btn-success" style="width:100%; ">View Property tour</a>


          </div>
      @endforeach
  </div>

  </div>
  <h1 class="text-center text-warning">Search Properties</h1>
  <!-- resources/views/property/search.blade.php -->

  <form action="{{ route('search1') }}" method="post" class="container">
    @csrf

    <div class="row">
        <div class="col-md-3 col-sm-6">
            <label for="min_price">Min Price:</label>
            <input type="number" name="min_price" id="min_price" class="form-control">
        </div>

        <div class="col-md-3 col-sm-6">
            <label for="max_price">Max Price:</label>
            <input type="number" name="max_price" id="max_price" class="form-control">
        </div>

        <div class="col-md-3 col-sm-6">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="col-md-3 col-sm-6">
            <label for="location">Location:</label>
            <select name="location" id="location" class="form-control">
                @foreach($locations as $location)
                    <option value="{{ $location->name }}">{{ $location->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-warning">Search</button>
        </div>
    </div>
</form>




@include('footer');
@include('js');
</body>
</html>
