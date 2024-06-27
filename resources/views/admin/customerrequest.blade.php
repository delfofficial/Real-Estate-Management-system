<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-app-layout>
        <!DOCTYPE html>
        <html lang="en">
          <head>
            <!-- Required meta tags -->
            @include("admin.admincss");

          </head>
          <body>
            <div class="container-scroller">
              @include("admin.navbar");
             <div style="position:relative; top:60px; right:-60px; bgcolor:black;">
                 <table bgcolor="grey" border="3px">
                     <tr>
                         <th style="padding: 20px">Name</th>
                         <th  style="padding: 20px">Phone</th>
                         <th  style="padding: 20px">Email</th>
                         <th  style="padding: 20px">title</th>
                         <th  style="padding: 20px">Price</th>
                         <th  style="padding: 20px">Image</th>
                         <th  style="padding: 20px">Status</th>
                         <th  style="padding: 20px">Approve</th>
                         <th  style="padding: 20px">Cancel</th>
                         <th  style="padding: 20px">Edit</th>

                     </tr>
                     @foreach ($data as $data )
                     <tr align="center">
                         <td>{{$data->name}}</td>
                         <td>{{$data->phone}}</td>
                         <td>{{$data->email}}</td>
                         <td>{{$data->title}}</td>
                         <td>{{$data->price}}</td>
                         <td>{{$data->image}}</td>
                         <td>{{$data->status}}</td>
                         <td>
                         <a href="{{url('/approve',$data->id)}}" class="btn btn-success">Approve</a>

                         </td>
                         <td>
                         <a href="{{url('/cancel',$data->id)}}" class="btn btn-danger">Cancel</a>
                        </td>
                         <td>
                            <a href="{{url('/editsale',$data->id)}}" class="btn btn-primary">Edit

                            </td>

                     </tr>
                     @endforeach

                 </table>


             </div>

            </div>

            @include("admin.adminscript");


          </body>
        </html>
    </x-app-layout>


</body>
</html>
