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

    <h1><b>EDIT PROPERTY DETAILS</b></h1>
    <form action="{{url('/updateproduct',$data->id)}}" method="POST" enctype="multipart/form-data" style="width:900px; height:500px; margin-left:40px;  align-items:center;">
        @csrf
        <input type="hidden" name="_method" value="POST">
        <div class="form-group">
          <label >Title</label>
          <input type="text" name="title" class="form-control"  value="{{ $data->title }}" required="">
        </div>
        <div class="form-group">
          <label >Price</label>
          <input type="number" name="price" class="form-control"  value="{{ $data->price }}" required="">
        </div>
        <div class="form-group">
            <label >Features</label>
            <input type="text" name="features" class="form-control"  value="{{ $data->features }}" required="">
          </div>
          <div class="form-group">
            <label >Features</label>
            <input type="text" name="features" class="form-control"  value="{{ $data->features }}" required="">
          </div>
          <div class="form-group">
            <label >Features</label>
            <input type="text" name="features" class="form-control"  value="{{ $data->features }}" required="">
          </div>
          <div class="form-group">
            <label >Location</label>
            <input type="text" name="location" class="form-control"  value="{{ $data->location }}" required="">
          </div>
        <div class="form-group">
            <label >Description</label>
            <input type="text" name="description" class="form-control"  value="{{ $data->description }}" required="">
          </div>

          <div class="form-group">
            <label>Product Video</label>
            <input type="file" name="video" class="form-control-file" value="{{ $data->video }}" required="">
          </div>

          <div class="form-group">
            <label>Old Image</label>
            <img src="/productimage/{{$data->image }}" alt="prd" height="100px;" width="160px;">
          </div>

          <div class="form-group">
            <label>Change Image</label>
            <input type="file" name="image" class="form-control-file" value="{{ $data->image }}" required="">
          </div>
        <button type="submit" class="btn btn-primary">Save</button>

      </form>

 </div>
@include('js');
</body>
</html>
