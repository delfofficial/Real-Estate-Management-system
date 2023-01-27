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

<h1>prd</h1>
@if(session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert"></button>
    {{ session()->get('message')}}
</div>
@endif
<div class="lis">
    <ul style="list-style: none;">

        <li>hello</li>
    </ul>
</div>
<div style="padding:40px;" align="center">
    <table align="center" >
        <tr>
            <th style="">Product Name</th>
            <th style="">Price</th>
            <th style="">image</th>
            <th style="">Action</th>
        </tr>
        <form action="{{url('order') }}" method="POST">
            @csrf
            @foreach( $cart as $carts )
            <tr>
                <td style="padding:15px;">
                    <input type="text" name="productname[]" value=" {{$carts->product_title }}" hidden>
                    {{$carts->product_title }}

                </td>

                <td style="padding:15px;">
                    <input type="text" name="price" value=" {{$carts->product_title }}" hidden>
                    {{$carts->price }}
                </td>
                <td style="padding:15px;">

                    <img  style="height:200px; width:200px;" src="/productimage/{{$carts->image }}"></a>
                    <img class="trending-img" src="{{$carts->image }}">

                </td>
                <td style="padding:15px;">
                    <a href="{{url('/delete',$carts->id)}}" class="btn btn-danger">Delete</a>
                    <a href="" class="btn btn-primary">Edit</a>

                </td>
            </tr>
            @endforeach
    </table>
    <div class="pay">
        <h2>Payment Method:</h2>

      <div class="payment"><input type="radio" value="cash" name="payment"><span>Online Payment</span></div>
      <div class="payment"><input type="radio" value="cash" name="payment"><span>EMI</span></div>
      <div class="payment"><input type="radio" value="cash"  name="payment"><span>Payent on delivery</span></div>
    </div>
    <br> <br>
    <button class="btn btn-success">Confirm Order</button>
</form>

</div>
@include('js');
</body>
</html>
