
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        @include("admin.admincss");

      </head>
      <body>
        <div class="container-scroller">
          @include("admin.navbar");


        <form action="{{url('/addagent') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label >Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email"  placeholder="Enter email">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone"  placeholder="Enter phone numbe">
            </div>


                <div>
                    <label >image</label>
                <input type="file"  name="image" required>
                </div>
<br> <br>

            <button type="submit" class="btn btn-primary">Save</button>

          </form>
        </div>
        @include("admin.adminscript");


      </body>
    </html>

