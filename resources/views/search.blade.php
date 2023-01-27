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

<h1>Search</h1>
@if(session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">x</button>
    {{ session()->get('message')}}
</div>
@endif

<form action="{{url('search')}}" method="POST" class="form-inline" style="float:right; padding:10px;">
    @csrf
    <input  class="form-control" type="search" name="search" placeholder="search">
    <input type="submit" value="Search" class="btn btn-success">
</form>
<div class="prd" style="margin: 5%">
    @foreach ($data as $data)
<img src="/productimage/{{$data->image }}" alt="prd" style="height: 30%"></a>
            <div class="down-content">

                <h6>{{  $data->title }}</h6>
                <p>{{  $data->price }}</p>
                <p>{{  $data->description}}</p>
                <form action="{{route('addcart',$data->id)}}" method="POST">
                    @csrf
                   
                    <input type="submit" class="btn btn-primary" value="Add cart">
                </form>

@endforeach
</div>
@include('js');
</body>
</html>
