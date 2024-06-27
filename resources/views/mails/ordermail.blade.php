<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>order confirmation</title>
</head>
<body>
    <p>Hi {{ $order->name }}</p>
    <p>You have successfully purchased a property from Kay Stated. Thank you for buying from us.</p>
    <br>
    @foreach ($order as $order )
    <img src="/productimage/{{$order->image }}" alt="prd" height="40"/>

                <div class="down-content">

                    <h6 style="font-size: 20px; font-weight:bold;"> Title:{{  $order->title }}</h6>
                    <p>Price: KES{{  $order->price }}</p>
                    <p>Description{{$order->description}}</p>


    @endforeach


</body>
</html>
