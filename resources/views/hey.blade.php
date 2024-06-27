<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>hello there</h1>
</body>
</html>
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
<div class="container">
    <div class="row" style="display:flex;">
        <div class="col-md-6">
            @foreach ( $prd as $data )
            <!-- Product item code -->
             <img src="{{$data['image']}}" alt="prd" style="height:40%">
    <img src="/productimage/{{$data->image }}" alt="prd" style="height:40%"></a>
                <div class="down-content">

                    <h6>{{  $data['title'] }}</h6>
                    <p>KES {{  $data['price']}}</p>
                    <p>{{  $data['description']}}</p>
                    <!--
                    <form action="/add_to_cart" method="POST">
                        csrf
                        <input type="hidden" name="product_id" value="{$product['id'] }}">
                        <button class="btn btn-primary">Add to Cart</button>
                    </form> -->
                    <form action="/addcart/{id}" method="POST">
                        @csrf
                        <input type="submit" class="cart btn btn-warning" value="save property">
                    </form>
            @endforeach
        </div>
        <div class="col-md-6">
            @foreach ($sale_items as $sale_item)
            <!-- Sale item code -->
            <img src="/salerequest/{{$sale_item->image }}" alt="prd" height="400" width="500">
        <br>
        <!--iframe src="/productvideo/{$items->video}" height="200" width="300" title="video"--><!--/iframe-->
                    <div class="down-content">

                        <h6>{{  $sale_item->title }}</h6>
                        <p>{{  $sale_item->price }}</p>
                        <p>{{  $sale_item->description}}</p>


                        <!--a href="{ url('/hey') }}">hey there</a> -->
                        <!--a href="{ url('/video',$items->id)  }}" class="btn btn-warning">Check Property tour</a-->
                        <form action="{{route('addcart',$sale_item->id)}}" method="POST">
                            @csrf

                            <input type="submit" class="cart btn btn-success"  value="Save property">


                        </form>
            @endforeach
        </div>
    </div>
</div>



@include('js');
</body>
</html>
