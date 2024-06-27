
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @include('css');
<style>
 img {
        max-width: 100%;
        height: auto;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .col-md-6,
    .serch {
        flex: 1;
        max-width: 100%; /* Adjust maximum width for small screens */
    }

        /* Light yellow background for the container */
        .newsletter-container {
            background-color: #fffed8; /* Light yellow color */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Box shadow for the container */
        }

        /* White background for the input and button */
        .newsletter-form {
            background-color: #ffffff; /* White color */
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Box shadow for the input and button */
        }

        /* Style for the email input */
        .newsletter-input {
            width: 70%; /* Adjust the width as needed */
            padding: 8px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            outline: none;
        }

        /* Style for the subscribe button */
        .newsletter-button {
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            background-color: #4caf50; /* Green color for the button */
            color: #fff; /* White color for the text */
            cursor: pointer;
        }

        @media only screen and (max-width: 768px) {
        .newsletter-container {
            padding: 10px;
        }

        .col-md-6,
        .col-md-3 {
            max-width: 100%; /* Full width on small screens */
        }

        /* Additional responsive styles as needed */
    }

</style>
</head>
<body>

    @include('navbar');
    <div class="container container-fluid ">
        <br> <br> 
        <div class="row mx-3" style="height:400px; margin-top:10px;">
            <div class="col-md-6 bg-light">
                <h1 class="text-warning" style="font-weight:80px; margin-top:40%"><b>Let us find a home for you</b></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. cum quia! Voluptate, aperiam.</p>
            </div>
            <div class="col-md-6" >
                <img src="bg-image/1705610553061.jpg" alt="" style="" class="img-fluid">
            </div>
        </div>
    </div>
<h1 class="text-warning text-center"><b>Search Property</b></h1>
    <div class="container  bg-white" style=" top:80%; left:20%; right:15%; height:auto; box-shadow:0.5px 0.5px 5px rgb(0,0,0,0.5),-1.5px 1.5px 2.5px #ffff; border-radius:10px;">
        <!--div class="row" style="align-items:center; text-align:center; position: ;"-->
        <form action="{{ route('search1') }}" method="post" class="container">
            @csrf

            <div class="row">
                <div class="col-md-3 col-sm-6 text-center">
                    <label for="min_price">Min Price:</label>
                    <input type="number" name="min_price" id="min_price" class="form-control">
                </div>

                <div class="col-md-3 col-sm-6 text-center">
                    <label for="max_price">Max Price:</label>
                    <input type="number" name="max_price" id="max_price" class="form-control">
                </div>

                <div class="col-md-3 col-sm-6 text-center">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="col-md-3 col-sm-6 text-center">
                    <label for="location">Location:</label>
                    <select name="location" id="location" class="form-control text-center">
                        @foreach($locations as $location)
                            <option value="{{ $location->name }}">{{ $location->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12 mt-3 text-center mb-2">
                    <button type="submit" class="btn btn-warning" style="align-items: center; width:30%;">Search</button>
                </div>
            </div>
        </form>
        <!--/div-->
    </div>
    <div class="container why-us container-fluid ml-3" style="margin-top:50px;">
        <div class="row" style="height:">
            <div class="col-md-6 text-center" style="margin-top:10%;">
                <h1 class="text-warning" style="" ><b>Why Choose us</b></h1>
                <h5 class="text-warning"><b>Easy and Safe</b></h5>
                <small class="text-dark">Find many real available properties</small>
                <h5 class="text-warning"><b>Investment Property</b></h5>
                <small class="text-dark">Find many real available properties</small>
                <h5 class="text-warning"><b>Trusted Partnerships</b></h5>
                <small class="text-dark">Find many real available properties</small>
                <h5 class="text-warning"><b>Licences And Contracts</b></h5>
                <small class="text-dark">Find many real available properties</small>
            </div>
            <div class="col-md-6">
                <div class="img">
                    <img src="bg-image/1705610559620.jpg" alt="" style="height:500px;" class="img">
                </div>

            </div>



        </div>
    </div>
    <div class="cont container-fluid">
        <h2 class="text-warning text-center">Explore Various Locations</h2>
        <div class="row">
            <div class="col-md-3">
                <img src="bg-image/1705610553061.jpg" alt="" style="width:100%; height:200px;">
            </div>
            <div class="col-md-3">
                <img src="bg-image/1705611049795.jpg" alt="" style="width:100%; height:200px;">
            </div>
            <div class="col-md-3">
                <img src="bg-image/1705611011852.jpg" alt="" style="width:100%; height:200px;">
            </div>
            <div class="col-md-3">
                <img src="bg-image/hero_2.jpg" alt="" style="width:100%; height:200px;">
            </div>
        </div>
    </div>
    <div class="container container-fluid">
        <h2 class="text-center text-warning">Propety Listing</h2>
        <div class="row">
            <div class="col-md-3">
                <img src="bg-image/1705611100512.jpg" alt="" style="width:100%; height:200px;">
            </div>
            <div class="col-md-3">
                <img src="bg-image/1705608184436.jpg" alt="" style="width:100%; height:200px;">
            </div>
            <div class="col-md-3">
                <img src="bg-image/slide_3.jpg" alt="" style="width:100%; height:200px;">
            </div>
            <div class="col-md-3">
                <img src="bg-image/1705608771768.jpg" alt="" style="width:100%; height:200px;">
            </div>

        </div>
    </div>
    <div class="container container-fluid">
        <div class="row" style="overflow:hidden;">
            <h2 class="text-warning text-center"><b>Testimonials</b></h2>
            <div class="col-md-3 card">
                <div class="test title d-flex">
                    <img src="bg-image/hair-stck-photo-1.jpg" alt="" style="width:30%; border-radius:50%;">
                    <div class="name">
                        <p><b>Hannah Morris</b></p>
                        <small> @ hannah</small>
                    </div>
                </div>
                <p>
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia aut voluptatum, vel eligendi ad atque saepe harum omnis placeat praesentium libero modi possimus. Laborum fuga excepturi veritatis mollitia, est dolores!
                </p>
            </div>
            <div class="col-md-3 card">
                <div class="test title d-flex">
                    <img src="bg-image\menBox3.jfif" alt="" style="width:30%; border-radius:50%;">
                    <div class="name">
                        <p><b>Rocky Robinson</b></p>
                        <small> @Rocky</small>
                    </div>
                </div>
                <p>
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia aut voluptatum, vel eligendi ad atque saepe harum omnis placeat praesentium libero modi possimus. Laborum fuga excepturi veritatis mollitia, est dolores!
                </p>
            </div>
            <div class="col-md-3 card">
                <div class="test title d-flex">
                    <img src="bg-image\locsF.jfif" alt="" style="width:30%; border-radius:50%;">
                    <div class="name">
                        <p><b>Alicia Smith</b></p>
                        <small> @alicia</small>
                    </div>
                </div>

                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam facilis sint illo qui esse nobis fugiat vero voluptate quos assumenda voluptatem soluta eaque architecto, fuga ipsa non explicabo voluptatibus nulla.
                </p>
            </div>
            <div class="col-md-3 card">
                <div class="test title d-flex">
                    <img src="bg-image\locsF.jfif" alt="" style="width:30%; border-radius:50%;">
                    <div class="name">
                        <p><b>Alicia Smith</b></p>
                        <small> @alicia</small>
                    </div>
                </div>

                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam facilis sint illo qui esse nobis fugiat vero voluptate quos assumenda voluptatem soluta eaque architecto, fuga ipsa non explicabo voluptatibus nulla.
                </p>
            </div>

        </div>
    </div>


    <!--div class="hommy " style="background-image: url(bg-image/images/property_4.jpg); height:900px; margin-bottom:100px; solid black;" items-aos="fade" id="home-section"-->


<!--div class="searchy" style="margin-left:170px; align-items:center;">
    <input  class="search" type="search" name="search" placeholder="search">
    <input type="submit" value="Search" class="btn btn-success">
</div-->



    </div>

@if(session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" items-dismiss="alert"></button>
{{session()->get('message')}}
</div>
@endif
<div class="lis" style="margin-top: 100px; text-align:center; font-size: 40px; margin-bottom:10px; ">


       <h1>Featured Properties</h1>

       <form action="{{url('search')}}" method="POST"  style="float:right; padding:10px;">
        @csrf
         <input  class="search" type="search" name="search" placeholder="search">
         <button></button>
     </form>

</div>


<br> <br> <br> <br>
<div class="row" style="margin-top: 30px; margin-left:30px;">
    @foreach($data as $item1)
      <div class="col-md-4 mr-2">

        <img src="/productimage/{{$item1->image }}" alt="prd" style="width:; height:200px;" >

        <div><h2>{{ $item1->title }}</h2></div>
      <div><p> KES:{{ $item1->price }}</p></div>
      <div><p>{{ $item1->location }}</p></div>
      <div><h5>{{ $item1->features }} |</h5></div>


        <div class="col" style="display: flex;">
           <!-- if ($item1->ordered)
            <input class="cart btn btn-danger disabled"  value="Already saved">
        else -->


<form action="{{route('addcart',$item1->id)}}" method="POST">
    @csrf

    <input type="submit" class="cart btn btn-success"  value="Save property">


</form>



            <a href="{{url('/video',$item1->id)}}" class="btn btn-warning" style="height:40px; margin-left:20px;">View Property tour</a>
        </div>

      </div>

      @if($loop->iteration % 3 == 0)
        </div><div class="row">
      @endif
    @endforeach
    @foreach($sale_items as $item2)
    <div class="col-md-3">
      <img src="/salerequest/{{$item2->image }}" alt="prd" style="height:300px; width:300px; margin-left:20px;">

     <div><h2>{{ $item2->title }}</h2></div>
      <div><h3> KES:{{ $item2->price }}</h3></div>
      {{ $item2->description }}

        <div class="col" style="display: flex;">
            <form action="{{route('addcart',$item2->id)}}" method="POST">
                @csrf

                <input type="submit" class="cart btn btn-success"  value="Save property">


            </form>
            <a href="{{url('/video',$item2->id)}}" class="btn btn-warning" style=" ">View Property tour</a>
        </div>



    </div>

    @if($loop->iteration % 3 == 0)
      </div><div class="row">
    @endif
  @endforeach
</div>
<div class="newsletter-container">
    <h2>Subscribe to our Newsletter</h2>
    <div class="newsletter-form">
        <input type="email" class="newsletter-input" placeholder="Your email address">
        <button class="newsletter-button">Subscribe</button>
    </div>
</div>

@include('footer');
@include('js');
</body>
</html>
