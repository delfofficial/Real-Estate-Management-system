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
                         <th style="padding: 30px">Name</th>
                         <th  style="padding: 30px">Phone</th>
                         <th  style="padding: 30px">Address</th>
                         <th  style="padding: 30px">productName</th>
                         <th  style="padding: 30px">Price</th>
                         <th  style="padding: 30px">Action</th>
                     </tr>
                     @foreach ($data as $data )
                     <tr align="center">
                         <td>{{$data->name}}</td>
                         <td>{{$data->phone}}</td>
                         <td>{{$data->address}}</td>
                         <td>{{$data->product_name}}</td>
                         <td>{{$data->price}}</td>
                         <td>delete</td>

                     </tr>
                     @endforeach
                     <tr>

                        <spanclass="tot" style="background: red">
                    <h3>Total:{{ $total }}</h3>
                </span>

                     </tr>
                 </table>


             </div>

            </div>

            @include("admin.adminscript");


          </body>
        </html>
    </x-app-layout>


</body>
</html>
