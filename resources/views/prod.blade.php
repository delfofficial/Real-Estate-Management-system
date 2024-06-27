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
    <div class="row">

        @foreach ($data as $item)
            <div class="col-md-3">
                <!-- Display the item here -->
                <br>

                <!--img src="/productimage/{$item->image }}" alt="prd" height="100px;" width="50px;">
                <img src="/salerequest/{$item->image }}" alt="prd" style="width:100px; height:50px;"-->
                <img src="{{ $item->image }}" alt="{{ $item->title }}">



                <h2>{{  $item->title}}</h2>
                <h3>{{  $item->price }}</h3>
                <p>{{  $item->description}}</p>
            </div>
        @endforeach
        <form action="{{route('addcart',$item1->id)}}" method="POST">
            @csrf

            <input type="submit" class="cart btn btn-success"  value="Save property">


        </form>
         <a href="{{url('/video',$item1->id)}}" class="btn btn-warning" style="height:40px; margin-left:20px;">View Property tour</a>

         <form action="{{route('addcart',$item2->id)}}" method="POST">
            @csrf

            <input type="submit" class="cart btn btn-success"  value="Save property">


        </form>
        <a href="{{url('/video',$item2->id)}}" class="btn btn-warning" style="height:40px; margin-left:20px;">View Property tour</a>
    </div>
    @include('js');
</body>
</html>
