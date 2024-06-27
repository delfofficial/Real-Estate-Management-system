<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include("admin.admincss");
</head>
<body>
    <x-app-layout>

            <!-- Required meta tags -->

            <div class="container-scroller">
              @include("admin.navbar");
             <div style="position:relative; top:60px; right:-60px">
                 <table class="bg-dark text-white" >
                     <tr>
                         <th style="padding: 30px"><b>Title</b></th>
                         <th  style="padding: 30px"><b>Price</b></th>
                         <th  style="padding: 30px"><b>Image</b></th>
                         <th  style="padding: 30px"><b>Action</b></th>
                     </tr>
                     @foreach ($data as $data )
                     <tr align="center"style="border: 1px solid rgb(233, 11, 11);" >
                         <td>{{$data->title}}</td>
                         <td>{{$data->price}}</td>
                         <td>
                            <img  style="height:100px; width:200px;" src="/productimage/{{$data->image }}"></a>
                         </td>
                         <td style="padding:15px;">
                            <a href="{{url('/editproduct',$data->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('/delete',$data->id)}}" class="btn btn-danger">Delete</a>

                        </td>
                         <br>

                     </tr>
                     @endforeach
                     @foreach ($sale_items as $sale_items )
                     <tr align="center" style="border: 1px solid rgb(233, 11, 11);" >
                         <td>{{$sale_items->title}}</td>
                         <td>{{$sale_items->price}}</td>
                         <td>
                            <img  style="height:100px; width:200px;" src="/salerequest/{{$sale_items->image }}"></a>

                         </td>
                         <td style="padding:15px;">
                            <a href="{{url('/delete',$data->id)}}" class="btn btn-danger">Delete</a>
                            <a href="" class="btn btn-primary">Edit</a>

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
