<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <base href="/public">
    @include('css');
    <!--
        mt1
    -->

</head>
<body>
    @include('navbar');


   <div class="container">
    <div class="row" style="display:flex;">
        <div class="col-md-12">
            <iframe src="/productvideo/{{$data->video}}" height="400" width="100%" title="video"></iframe>
            <div class="down-content">
              <div class="price"><p><b>{{$data->title }}</b></p></div>
              <div class="price"><p><b>${{$data->price }}</b></p></div>
              <div class="description">{{$data->description}}</div>
            </div>

            <form action="{{ route('addcart', $data->id) }}" method="POST">
              @csrf

                <input type="submit" class="cart btn btn-success"  value="Save property">

            </form>
        </div>
    </div>
   </div>
@include('footer');
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>
