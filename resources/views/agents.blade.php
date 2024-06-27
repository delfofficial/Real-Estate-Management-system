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

    <style>
        .direct-message-link {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }
        .direct-message-link i {
            margin-right: 5px;
        }
        .direct-message-link:hover {
            background-color: #b35100;
            border-color: #b3a700;
        }
        .card {
            margin-bottom: 20px;
            border: none;
            height: 180px;

        }
        .card img {
            height: 100px;
            border-radius: 50%;
        }
        .card .team-member {
            padding: 10px; /* Adjust padding here */
        }
        .card .team-member h3 {
           /* margin-bottom: 5px;
            margin-top: 0;  Add margin-top */
        }
        .card .position {
            font-style: italic;
            color: #888;
            margin-top: 0; /* Add margin-top */
        }
        .card .contact-details p {
            margin: 0; /* Remove margin */
        }
        .card .social-icons a {
            padding: 3px;
        }
    </style>

</head>
<body>
    @include('navbar');

    <div class="container container-fluid">
        <br> <br>  <br>
        <div class="row">
            @foreach ($data as $agent)
            <div class="col-md-3">
                <div class="card">
                    <div class="team-member">
                        <figure>
                            <a href="#"><img class="img-fluid" style=" border-radius: 50%;" src="/agentimage/{{$agent->image }}" alt="none"></a>
                        </figure>
                        <div class="p-3">
                            <h3 class="mb-2 text-warning">{{$agent->name}}</h3>
                            <span class="position">Real Estate Agent</span>
                        </div>
                        <div class="contact-details">
                           <!-- <p>{$agent->email}}</p>
                            <p>{$agent->phone}}</p> -->
                        </div>
                        <div class="social-icons" style="text-align:center; display:flex;">
                            <a style="padding:3px;"><i class="fab fa-twitter text-warning"></i></a>
                            <a style="padding:3px;"><i class="fab fa-facebook text-warning"></i></a>
                            <a style="padding:3px;"><i class="fab fa-instagram text-warning"></i></a>
                            <a style="padding:3px;"><i class="fab fa-tiktok text-warning"></i></a>
                            <a style="padding:3px;"><i class="fas fa-location text-warning"></i></a>
                        </div>
                    </div>
                    <div class="bg">
                        <a href="{{ route('agent.chat') }}" class="direct-message-link bg-success">
                            <i class="fas fa-envelope"></i> Direct message
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @include('footer');
    @include('js');

</body>
</html>
