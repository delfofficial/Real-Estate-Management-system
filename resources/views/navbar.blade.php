<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">


</head>
<body>
    <div class="col-6 col-xl-2">
    </div>
    <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand text-warning text-center" href="#"><b style="font-size:1.5em;">Kay<span class="text-warning">Stated<i class="fas fa-home"></i></span></b><br><small><small><small><small>Discover, Dream, Dwell</small></small></small></small></a>
          <a class="nav-link active" href="{{url('/redirects') }}"> _ </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".collapse ">
             <span class="navbar-toggler-icon"></span>
          </button>
         <div class="collapse navbar-collapse" id="main_nav">
           <ul class="navbar-nav ms-auto text-warning">

           <li class="nav-item text-warning"><a class="nav-link active text-warning" href="{{url('/') }}"> Home </a></li>
           <li class="nav-item"><a class="nav-link text-warning" href="{{url('/prd') }}"> Properties </a></li>
           <li class="nav-item"><a class="nav-link text-warning" href="{{url('/agenta') }}"> Agents </a></li>
           <li class="nav-item"><a class="nav-link text-warning" href="#"> About </a></li>
           <li>
            @if(Route::has('login'))
                                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                                @auth
                                               <li>
                                                <x-app-layout>

                                                </x-app-layout>
                                               </li>
                                               <div class="req">
                                                <li class="nav-item"><a class="nav-link text-warning" href="{{url('/usersale')}}"> Sell Property </a></li>
                                            </div>
                                             <li  class="nav-item">
            <a class="nav-link text-warning" href="{{url('/showcart') }}">
             Saved properties[{{$count}}]
         </a>
         </li>
                                                @else
                                                    <li class="nav-item"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline nav-link text-warning">Log in</a></li>

                                                    @if (Route::has('register'))
                                                        <li class="nav-item"><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline nav-link text-warning">Register</a></li>
                                                    @endif
                                                @endauth
                                            </div>

                                        @endif
         </li>





           </ul>
         </div> <!-- navbar-collapse.// -->
        </div> <!-- container-fluid.// -->
       </nav>


       @include('js');
</body>
</html>
