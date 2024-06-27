<?php
//session_start();
//include('connect.php');
//include('./functions/common_functions.php');
?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Mz7Yl72Ffp5lMjA8t+83jTw+k4o4w0r8w+VlhAq5ti2EAZ/jMOcCApYCowgDA4J" crossorigin="anonymous">
    <style>
      .nav-item:hover {
    background-color: crimson;
}
img{
  height:100px;
  width:200px;
  object-fit:contain;
  border-radius:50%;
}
    </style>
</head>
<body>
<div class="container-fluid d-none d-lg-block" style="box-shadow:1px 1px 10px rgb(0,0,0,0.5),-3px 3px 10px #ffff;">
  <div class="row align-items-center bg-white px-lg-5">
     <nav class="navbar navbar-expand-sm bg-white p-0 text-dark">
                <ul class="navbar-nav ml-n2">
                    <li class="nav-item border-right border-secondary" style="align-items:center;">
                    <div class="navbar-brand" style="margin-bottom:0;">
                    <h2 class="text-dark" style="padding-top:30px;;">Kay<span class="text-danger">Retail</span></h2>
  </div>


                    </li>
                    <li class="nav-item border-right border-secondary tex-center;" style="justify-content:center; align-items:center; text-align:center; margin-top:40px; ">
<!- Search Form 
<form class="form-inline d-flex" method="POST" action="search.php">
        <input class="form-control mr-sm-2" type="text" name="search_query" placeholder="search product" style="width:500px;bhj">
        <button class="btn btn-outline-white my-2 my-sm-0 bg-danger tex-white" type="submit" name="search">Search</button>
      </form>                    </li>
                    <li class="nav-item border-right border-secondary" style="justify-content:center; align-items:center; text-align:center; margin-top:40px; ">
                    <a class="nav-link" href="cart_items.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php /*  cart_item() ?></sup></a>
                    </li>
                    <li class="nav-item border-right border-secondary" style="justify-content:center; align-items:center; text-align:center; margin-top:40px; ">
                    <div class="profSearch d-flex">
      <div class="prof">
        <?php
        if (isset($_SESSION['user_name'])) {
          $user_session_name = $_SESSION['user_name'];
          $sql1 = "SELECT * FROM users WHERE user_name='$user_session_name'";
          $rsl = mysqli_query($conn, $sql1);
          $rsl_row = mysqli_num_rows($rsl);
          $row = mysqli_fetch_assoc($rsl);
          $user_image = $row['user_image'];
          $image_url = 'users/user_images/' . $user_image;
          if ($image_url) {
            echo "<a  href='profile.php'><img src='$image_url' alt='User Image' class='card-img-top' style='height:60px; width:60px; object-fit:contain; border-radius:300%;'></a>";# code...
          }
          else {
            echo "  <img src='images/defaultNews.jfif' alt=''>

            ";
          }
        }
        ?>
      </div>
    </div>                    </li>

                </ul>
            </nav>
<nav class="navbar navbar-expand-lg navbar-light bg-white text-dark" style="justify-content:space-between; ">

  <!-- Brand Image -->
  
  <!-- Navbar Toggler -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Navbar Items -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="AllProducts.php">Products <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart_items.php"><i class="fa-solid fa-cart-shopping"></i><sup>cart</sup></a>
      </li>
      
      <!-- Add other navbar items as needed -->
    </ul>

    <!-- User Information and Search Form -->
    <div class="d-flex">
      <ul class="navbar-nav">
        <li class="nav-item">
          <?php
          if (isset($_SESSION['username'])) {
            echo "<a class='nav-link' href='#'>{$_SESSION['username']}</a>";
          } else {
            echo "<a class='nav-link' href='#'>Register</a>";
          }
          ?>
        </li>
        <li class="nav-item">
          <?php
          if (isset($_SESSION['user_name'])) {
            echo "<a class='nav-link' href='#'>{$_SESSION['user_name']}</a>";
          } else {
            echo "<a class='nav-link' href='users/login.php'>login</a>";
          }
          ?>
        </li>
        <li class="nav-item">
          <?php
          if (isset($_SESSION['user_name'])) {
            echo "<a class='nav-link' href='users/logout.php'>logout</a>";
          } else {
            echo "<a class='nav-link' href='#'>Link</a>";
          }
          ?>
        </li>
        <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Categories
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php
        $sql = "SELECT * FROM categories";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $category_id = $row['category_id'];
            $category_name = $row['category_name'];
            echo "<a class='dropdown-item' href='index.php?category=$category_id'>$category_name</a>";
        } */
        ?>
        <div class="dropdown-divider"></div>
    </div>
</li>
<li class="nav-item">
        <a class="nav-link" href="cart_items.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php //cart_item() ?></sup></a>
      </li>

      </ul>

      
    </div>
  </div>
</nav>
      </div>
      </div>

</body>
</html> -->
<?php
//session_start();
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
//include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Mz7Yl72Ffp5lMjA8t+83jTw+k4o4w0r8w+VlhAq5ti2EAZ/jMOcCApYCowgDA4J" crossorigin="anonymous">
    <style>
        .navbar-nav .nav-item {
    margin-right: 20px; /* Adjust the margin as needed */
}

.nav-item:hover {
    background-color: #e0a800;
}

.navbar-nav .nav-item .dropdown-item:hover {
    background-color: #e0a800;
}

.navbar-nav .nav-item.active,
.bannerButton:hover {
    background-color: #e0a800;
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
    background-color: #e0a800;
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
    background-color: #e0a800; /* Your background color */
    color: white;
    margin-right: 10px; /* Adjust as needed */
}
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-warning bg-dark ">
        <!-- Your navbar code here -->
        <a class="navbar-brand" href="#">
        <img src="images/Starlet shoes brand logo - Made with PosterMyWall.png" alt="">
        </a>
        
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">

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
        <div>
                <form action="">
                    <input type="text" placeholder="search product" width:60%;>
                    <button>search</button>
                </form>
                <button>cart</button>
                <button>cart2</button>
                <button>you</button>

            </div>
    </nav>


</body>
</html>