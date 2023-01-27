<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @include('css');
</head>
<body>


    @include('navbar');


    <div class="hommy " style="background-image: url(bg-image/images/property_4.jpg); height:900px; margin-bottom:100px; solid black;" data-aos="fade" id="home-section">


<div class="searchy" style="margin-left:170px; align-items:center;">
    <input  class="search" type="search" name="search" placeholder="search">
    <input type="submit" value="Search" class="btn btn-success">
</div>



    </div>

@if(session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert"></button>
{{session()->get('message')}}
</div>
@endif
<div class="lis" style="margin-top: 100px; text-align:center; font-size: 40px; margin-bottom:10px;">


       <h1>Featured Properties</h1>

</div>

<form action="{{url('search')}}" method="POST"  style="float:right; padding:10px;">
   @csrf
    <input  class="search" type="search" name="search" placeholder="search">
    <input type="submit" value="Search" class="btn btn-success">
    <button></button>
</form>
<br> <br><br>

<div class="row" style="margin:60px;">
    <div class="prd col-md-6" style=";" >
        @foreach ($data as $data)
    <img src="/productimage/{{$data->image }}" alt="prd" style="height:40%">
                <div class="down-content">

                    <h6>{{  $data->title }}</h6>
                    <p>{{  $data->price }}</p>
                    <p>{{  $data->description}}</p>
                    <form action="{{route('addcart',$data->id)}}" method="POST">
                        @csrf
                        @if(!empty($data))
                        <button class="btn btn-danger"  disabled>Sold out</button>
                        @else
                        <input type="submit" class="cart btn btn-success"  value="Add cart">
                        @endif

                    </form>

    @endforeach
    </div>
</div>
@include('js');
</body>
</html>
