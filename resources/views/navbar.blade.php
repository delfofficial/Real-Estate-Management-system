<div class="col-6 col-xl-2">
    <h1 class="mb-0 site-logo m-0 p-0">Kay Stated</h1>
</div>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Brand</a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
         <span class="navbar-toggler-icon"></span>
      </button>
     <div class="collapse navbar-collapse" id="main_nav">
       <ul class="navbar-nav ms-auto">
       <li class="nav-item"><a class="nav-link active" href="{{url('/') }}"> Home </a></li>
       <li class="nav-item"><a class="nav-link" href="{{url('/prd') }}"> Properties </a></li>
       <li class="nav-item"><a class="nav-link" href="{{url('/agenta') }}"> Agents </a></li>
       <li class="nav-item"><a class="nav-link" href="#"> About </a></li>
       <li>
        @if(Route::has('login'))
                                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                            @auth
                                           <li>
                                            <x-app-layout>

                                            </x-app-layout>
                                           </li>
                                           <div class="req">
                                            <li class="nav-item"><a class="nav-link" href="{{url('/usersale')}}"> Sell Property </a></li>
                                        </div>
                                         <li>
        <a href="{{url('/showcart') }}">
         cart[{{$count}}]
     </a>
     </li>
                                            @else
                                                <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                                                @if (Route::has('register'))
                                                    <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                                @endif
                                            @endauth
                                        </div>
                                        
                                    @endif
     </li>

      



       </ul>
     </div> <!-- navbar-collapse.// -->
    </div> <!-- container-fluid.// -->
   </nav>

