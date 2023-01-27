<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
        <!DOCTYPE html>
        <html lang="en">
          <head>
            <!-- Required meta tags -->
            

          </head>
          <body>
           
             <div style="position:relative; top:60px; right:-60px">
                 <table bgcolor="grey" border="3px">
                     <tr>
                         <th  style="padding: 30px">Email</th>
                         <th style="padding: 30px">Title</th>
                         <th  style="padding: 30px">status</th>
                         <th  style="padding: 30px">Cancel Sale</th>
                     </tr>
                     
                     @foreach ($data as $data )
                     <tr align="center">
                         <td>{{$data->name}}</td>
                         <td>{{$data->email}}</td>
                         <td>{{$data->status}}</td>
                         
                         <td><a href="{url('/deleteuser', $data->id)}}">Cancel</a></td>
                        

                     </tr>
                     @endforeach

                 </table>
             </div>

           


          </body>
        </html>
    


</body>
</html>
