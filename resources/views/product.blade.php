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
<h1>produuct</h1>
<form  action="{{ url('/products') }}" method="POST" enctype="multipart/form-data" >
    @csrf
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
        <input type="text" name="description" class="form-control"  placeholder="description">
      </div>
      <div class="form-group">
        <label>Product Image</label>
        <input type="file" name="image" class="form-control-file" >
      </div>
    <button type="submit" class="btn btn-primary">Save</button>

  </form>
@include('js');
</body>
</html>
