<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <base href="/public">
    @include("admin.admincss");
</head>
<body>
    <x-app-layout>

            <!-- Required meta tags -->

            <div class="container-scroller">
              @include("admin.navbar");
             <div style="position:relative; top:60px; right:-60px">
                 <table bgcolor="grey" border="3px">
                     <tr>
                         <th style="padding: 30px">Name</th>
                         <th  style="padding: 30px">Email</th>
                         <th  style="padding: 30px">Action</th>
                     </tr>
                     @foreach ($data as $data )
                     <tr align="center">
                         <td>{{$data->name}}</td>
                         <td>{{$data->email}}</td>
                         <!--td><a href="{url('/edituser', $data->id)}}" class="btn btn-success">edit</a></td-->
                         @if ($data->role=='0')
                         <td><a href="{{url('/deleteuser', $data->id)}}" class="btn btn-danger">Delete</a></td>
                         <td><a href="{{url('/edituser', $data->id)}}" class="btn btn-success">Edit</a></td>


                         @else
                         <td><a>Not Allowed</a></td>

                         @endif

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
