<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
                    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

        <link rel="stylesheet" href="yami2.css">

        <title>Yami Home</title>

    </head>
    <body>
        <!--Business logo-->
        <div class="container-fluid fullWid">
            <div class="d-flex justify-content-center"><img src="logo.png" id="logo-brand" alt=""></div>
        </div >

        <!--Full width navigation bar-->
        <div class="fullWid d-flex justify-content-center sticky-top shadow">

            <!--navigation bar itself-->
            <nav class="navbar navbar-expand-md navbar-dark background sticky-top shadow-sm">

                <a class="navbar-brand mr-5" id="brand-name" href="#">Yami</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">

                    <!--nav links of the pages-->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link nav-hover mr-2 active activo" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-2 nav-hover" href="services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-2 nav-hover" href="registerrescafe.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-5 nav-hover" href="recipes.php">Recipes</a>
                        </li>    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                <?php echo $_SESSION['username'] ; ?>
                            </a>
                            <!--collapsible links -->
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="profile.php">Manage profile</a>
                                <a class="dropdown-item" href="#">Track my progress</a>
                                <a class="dropdown-item" href="#">Chats</a>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>  
            </nav>

        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 welcome-part">
                        <h1 class="welcome-text">Welcome to <span class="text-success">Yami</span> website</h2>
                    </div>
                    <div class="col-md-4 services-yami" style="text-align: center;">
                        <p >
                            <h3 style="font-weight: 600;" id="customer-services">Our services</h3>
                            <br>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="services.php">Search for a restaurant</a>
                                </li>
                                <hr>
                                <li class="list-group-item">
                                    <a href="services.php">Search for a Cafeteria</a>
                                </li>
                                <hr>
                                <li class="list-group-item">
                                    <a href="services.php">Delivering Restaurants</a>
                                </li>
                                <hr>
                                <li class="list-group-item">
                                    <a href="services.php">Delivering Cafeterias</a>
                                </li>
                                <hr>
                                <li class="list-group-item">
                                    <a href="services.php">Booking services</a>
                                </li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid footer-things">
            <div class="container">
            <footer>
                <div class="row">
                    <div class="col-md-4" style="border-left:1px solid #FFF;border-right:1px solid #FFF;  height:205px">
                        <h4>Check</h4>
                        <hr>
                        <p><a class="dark-grey-text"href="#">Contact us</a></p>
                        <p><a class="dark-grey-text" href="#">About us</a></p>
                        <p><a class="dark-grey-text" href="#customer-services">Customer Service </a></p>
                        <p><a class="dark-grey-text" href="#">Privacy Policy</a></p>
                    </div>
                    <div class="col-md-4" style="border-right:1px solid #FFF; ">
                        <h4>Use full links</h4>
                        <hr>
                        <p><a class="dark-grey-text"href="#" id="footer-contact">Your Account</a></p>
                        <p><a class="dark-grey-text" href="#">Help</a></p>
                    </div>
                    <div class="col-md-4" style="border-right:1px solid #FFF;">
                        <h4>contact us</h4>
                        <hr>
                        <p><i class="fas fa-home mr-3"></i>&nbsp;&nbsp; Kamonyi, Runda, Ruyenzi</p>
                        <p><i class="fas fa-envelope mr-3"></i>&nbsp;&nbsp; ndabagajeanlionel@gmail</p>
                        <p><i class="fas fa-phone mr-3"></i>&nbsp;&nbsp; + 250 789 912 852</p>
                    </div>
                </div>
                <hr style="width:100%">
                <div class="row">
                    <div class="col-md-12" id="icon">
                        <ul>
                        <li style="background-color:#06F;text-align: center;"><a href="https://web.facebook.com/?_rdc=1&_rdr" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li style="background-color:#09F;text-align: center;"><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li style="background-color:#960;text-align: center;"><a href="https://mail.google.com/" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                            <li style="background-color:#F00;text-align:center;"><a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            <li style="background-color:#96F;text-align: center;"><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                        
                    </div>
                </div>
                
            </footer>
            </div>
        </div>
        
        
    </body>
</html>
