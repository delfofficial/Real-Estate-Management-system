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

<div class="form" style="height:3000px;" >

    <h1><b>UPLOAD PROPERTY </b></h1>
    @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" items-dismiss="alert"></button>
        {{session()->get('message')}}
        </div>
        @endif
    <form action="{{ url('/products') }}" method="POST" enctype="multipart/form-data" style="width:700px; height:500px; margin-left:40px;  align-items:center;">
        
        @csrf

        <div class="form-group">
          <label >Title</label>
          <input type="text" name="title" class="form-control"   placeholder="Enter title">
        </div>
        <div class="form-group">
          <label >Price</label>
          <input type="number" name="price" class="form-control"  placeholder="price" step="0.01">
        </div>
        <div class="form-group">
            <label>Location</label>
            <select name="location" class="form-control">
                @foreach ($locations as $location)
                    <option value="{{ $location->name }}">{{ $location->name }}</option>
                @endforeach
            </select>

        </div>
        <div class="form-group">
            <label >features</label>
            <input type="text" name="features" class="form-control"  placeholder="add features">
          </div>
        <div class="form-group">
            <label >Description</label>
            <input type="text" name="description" class="form-control"  placeholder="description">
          </div>
          <div class="form-group">
            <label>Product Video</label>
            <input type="file" name="video" class="form-control-file" >
          </div>
          <div class="form-group">
            <label>Product Image</label>
            <input type="file" name="image" class="form-control-file" >
          </div>
        <!-- Inside your form in the Blade file -->
  <!--      
<div class="form-group">
    <label>Features</label>

    <div class="form-check">
        <input type="checkbox" name="features[bathrooms]" class="form-check-input">
        <label class="form-check-label">Bathrooms</label>
        <input type="number" name="quantities[bathrooms]" class="form-control" placeholder="Quantity">
    </div>

    <div class="form-check">
        <input type="checkbox" name="features[bedrooms]" class="form-check-input">
        <label class="form-check-label">Bedrooms</label>
        <input type="number" name="quantities[bedrooms]" class="form-control" placeholder="Quantity">
    </div>

    <div class="form-check">
        <input type="checkbox" name="features[swimming_pool]" class="form-check-input">
        <label class="form-check-label">Swimming Pool</label>
        <input type="number" name="quantities[swimming_pool]" class="form-control" placeholder="Quantity">
    </div> -->

    <!-- Add more feature checkboxes and quantity inputs as needed -->
<!--
    <div class="form-check">
        <input type="checkbox" name="features[other]" class="form-check-input">
        <label class="form-check-label">Other Feature</label>
        <input type="text" name="custom_feature" class="form-control" placeholder="Custom Feature">
        <input type="number" name="quantities[other]" class="form-control" placeholder="Quantity">
    </div>
</div> -->

        

        <button type="submit" class="btn btn-primary">Save</button>


      </form>

 </div>
@include('js');
</body>
</html>
