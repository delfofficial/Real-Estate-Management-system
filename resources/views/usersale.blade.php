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
    @if(session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert"></button>
{{session()->get('message')}}
</div>
@endif
    <div class="row">
        <div class="col sm-4 col-sm-offset-4">
<span style="display: flex;"><h1 style="margin:30px;">Sell Property</h1>
    <h3 style="margin:30px;"/.lkjyu>or</h3>
    <button class="btn btn-success" style="margin:30px;"><a href="{{ url('/status') }}">check status  of submitted property</a></button>

</span>
<form action="{{ url('/salerequest') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label >Full name</label>
      <input type="text" name="name" class="form-control"   placeholder="Enter title">
    </div>
    <div class="form-group">
        <label >Email</label>
        <input type="email" name="email" class="form-control"   placeholder="Enter title">
      </div>
      <div class="form-group">
        <label >phone</label>
        <input type="text" name="phone" class="form-control"   placeholder="Enter title">
      </div>
      <div class="form-group">
        <label >Title</label>
        <input type="text" name="title" class="form-control"   placeholder="Enter title">
      </div>
    <div class="form-group">
      <label >Price</label>
      <input type="number" name="price" class="form-control"  placeholder="price">
    </div>

    <div class="form-group">
        <label >Description</label>
        <textarea name="description" placeholder="description" cols="30" rows="10"></textarea>
        <input type="text" name="description" class="form-control"  placeholder="description">
      </div>
      <div class="form-group">
        <label>Product Image</label>
        <input type="file" name="image" class="form-control-file" >
      </div>
    <button type="submit" class="btn btn-primary">Submit your Property for sale</button>

  </form>
</div>
</div>
@include('js');
</body>
</html>
