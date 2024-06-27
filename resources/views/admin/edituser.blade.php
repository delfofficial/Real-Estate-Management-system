<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <base href="/public">
    @include('css');
    @include('admin.admincss');
</head>
<body>
 <div class="container-scroller">
    @include("admin.navbar");


<div class="form"  >
    @if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" items-dismiss="alert"></button>
    {{session()->get('message')}}
    </div>
    @endif

    <h1><b>EDIT USER DETAILS</b></h1>
    <form action="{{url('/updateuser',$data->id)}}" method="POST" enctype="multipart/form-data" style="width:700px; height:500px; margin-left:40px;  align-items:center;">
        @csrf
        <input type="hidden" name="_method" value="POST">
        <div class="form-group mb-10">
          <label >Name</label>
          <input type="text" name="name" class="form-control"  value="{{$data->name}}" required="">
        </div>
        <div class="form-group mb-10">
            <label >Email</label>
            <input type="text" name="email" class="form-control"  value="{{$data->email}}" required="">
          </div>

          <div class="form-group mb-10">
            <label>Role</label>
            <input type="number" name="role" class="form-control-file" value="{{$data->role}}" required="">
          </div>

          <div class="form-group mb-10">
            <label>Phone</label>
            <input type="number" name="phone" class="form-control-file" value="{{$data->phone}}" required="">
          </div>
          <div class="form-group mb-10">
            <label>Address</label>
            <input type="number" name="address" class="form-control-file" value="{{$data->address}}" required="">
          </div>
        <button type="submit" class="btn btn-primary">Save</button>

      </form>

 </div>
@include('js');
</body>
</html>
