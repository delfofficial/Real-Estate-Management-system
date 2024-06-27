
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include("admin.admincss");

  </head>
  <body>
    <div class="container-scroller">
      @include("admin.navbar");


    <form action="{{url('/addLocation') }}" method="POST" enctype="multipart/form-data">
        @if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" items-dismiss="alert"></button>
    {{session()->get('message')}}
    </div>
    @endif
        @csrf
        <div class="form-group">
          <label >Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter name">
        </div>

<br> <br>

        <button type="submit" class="btn btn-primary">Save</button>

      </form>
    </div>
    @include("admin.adminscript");


  </body>
</html>

