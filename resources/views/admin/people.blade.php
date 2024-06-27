<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <base href="/public">
    @include("css");
</head>
<body>
    

             <div style="position:relative; top:60px; right:-60px">
                 <table bgcolor="grey" border="3px">
                    <a href="{{ route('downloadPDF') }}">Download PDF</a>
                     <tr>
                         <th style="padding: 30px">Name</th>
                         <th  style="padding: 30px">Email</th>
                         <th  style="padding: 30px"></th>
                     </tr>
                     @foreach ($data as $people)
                     <tr align="center">
                         <td>{{$people->name}}</td>
                         <td>{{$people->email}}</td>


                     </tr>
                     @endforeach
                 </table>
             </div>

            </div>
            @include("js");


          </body>
        </html>


</body>
</html>
