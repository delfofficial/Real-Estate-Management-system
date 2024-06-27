<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    //session_start();
    //error_reporting(E_ALL);
    //ini_set('display_errors', '1');
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            .navbar-nav .nav-item {
        margin-right: 20px; /* Adjust the margin as needed */
    }

    .nav-item:hover {
        background-color: crimson;
    }

    .navbar-nav .nav-item .dropdown-item:hover {
        background-color: crimson;
    }

    .navbar-nav .nav-item.active,
    .bannerButton:hover {
        background-color: crimson;
        color: white;
    }

    .navbar-brand {
        height: 100px;
        width: 300px;
    }

    .navbar-brand img {
        height: 100%;
        width: 100%;
        object-fit: contain;
    }

    .navbar {
        display: space-between;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .rounded-initial {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: #red;
        color: white;
        margin-right: 10px;
    }

    /* Align the icon container to the right */
    .cont {
        display: flex;
        align-items: center;
        margin-right: 20px;
        border-left: 1px solid #e0e0e0;

    }

    .cont i {
        margin-left: 10px; /* Adjust the margin as needed */
    }

    /* Style the icon container */
    .cont i {
        font-size: 24px;
        /*color: #333; */
    }

    /* Adjust the margin between icons */
    .cont i + i {
        margin-left: 10px;
    }

        .rounded-initial {
        width: 50px;
        height: 50px;
        /*line-height: 20px;
        text-align: center;
        align-items:center;  */
        border-radius: 50%;
        background-color: crimson; /* Your background color */
        color: white;
        margin-right: 10px; /* Adjust as needed */
    }
        </style>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-warning " style="margin-bottom:0;">
            <!-- Your navbar code here -->
            <a class="navbar-brand" href="#">
            <h2 class="text-dark text-center" style="padding-top:30px;;">Kay<span class="text-danger">Retail</span></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">about us</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="bridal.php">Bridal</a>
                            <a class="dropdown-item" href="braids.php">Braids</a>
                            <a class="dropdown-item" href="Makeup.php">Makeup</a>
                            <a class="dropdown-item" href="locs.php">Locs</a>
                            <a class="dropdown-item" href="wigs.php">Wigs</a>
                            <a class="dropdown-item" href="facials.php">Facial</a>
                            <a class="dropdown-item" href="laser.php">Laser</a>
                            <a class="dropdown-item" href="Haircut.php">Haircuts</a>
                          <div class="dropdown-divider"></div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="stylists.php">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Consult Us</a>
                    </li>
                    <li class="nav-item rounded-initial ">

                    </li>
                    <li class="nav-item  ">

                    </li>
                </ul>
                <div class="cont">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter"></i>
               <i class="fab fa-instagram"></i>
               <i class="fab fa-tiktok"></i>
               <i class="fab fa-whatsapp"></i>


                </div>

                <!--
                <form class="form-inline my-2 my-lg-0 d-flex">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
                </form> -->
            </div>
        </nav>


    </body>
    </html>
    <div class="hommy " style="background-image: url(bg-image/images/property_4.jpg); height:900px; margin-bottom:100px; solid black;" items-aos="fade" id="home-section">


        <div class="searchy" style="margin-left:170px; align-items:center;">
            <input  class="search" type="search" name="search" placeholder="search">
            <input type="submit" value="Search" class="btn btn-success">
        </div>



            </div>

</body>
</html>
