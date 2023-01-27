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

<h1 style="color:rgb(247, 123, 7)">Kay Stated</h1>
@if(session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert"></button>
{{session()->get('message')}}
</div>
@endif
<div class="lis">
    <ul style="list-style: none;">

        <li>hello</li>
    </ul>
</div>
<form action="{{url('search')}}" method="POST"  style="float:right; padding:10px;">
   @csrf
    <input  class="search" type="search" name="search" placeholder="search">
    <input type="submit" value="Search" class="btn btn-success">
    <button></button>

</form>
@foreach ( $prd as $data )
<div class="row">
    <div class="prd col-md-6" style=";" >
    <img src="{{$data['image']}}" alt="prd" style="height:40%">
    <img src="/productimage/{{$data->image }}" alt="prd" style="height:40%"></a>
                <div class="down-content">

                    <h6>{{  $data['title'] }}</h6>
                    <p>{{  $data['price']}}</p>
                    <p>{{  $data['description']}}</p>
                    <!--
                    <form action="/add_to_cart" method="POST">
                        csrf
                        <input type="hidden" name="product_id" value="{$product['id'] }}">
                        <button class="btn btn-primary">Add to Cart</button>
                    </form> -->
                    <form action="/addcart/{id}" method="POST">
                        @csrf
                        <input type="submit" class="cart btn btn-warning" value="Add cart">
                    </form>

    </div>
</div>

@endforeach
@include('js');
</body>
</html>
