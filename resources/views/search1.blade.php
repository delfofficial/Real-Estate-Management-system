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
    @include('navbar');


    <h1>Result for Search</h1>

    @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ session()->get('message')}}
        </div>
    @endif

    <div class="prd" style="margin: 5%">
        @if ($products->isEmpty())
            <p>No products found</p>
        @else
        <div class="prd" style="margin: 5%">
            @foreach ($products as $product)
            <img src="/productimage/{{$product->image }}" alt="prd" style="height: 30%"></a>
                    <div class="down-content">

                        <h6>{{  $product->title }}</h6>
                        <p>{{  $product->price }}</p>
                        <p>{{  $product->description}}</p>
                        <form action="{{route('addcart',$product->id)}}" method="POST">
                            @csrf

                            <input type="submit" class="btn btn-primary" value="Add cart">
                        </form>

        @endforeach
        </div>
        @endif
    </div>

@include('js');
</body>
</html>
