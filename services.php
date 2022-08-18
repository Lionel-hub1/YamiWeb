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
        
        <div class="container-fluid fullWid">
            <div class="d-flex justify-content-center"><img src="logo.png" id="logo-brand" alt=""></div>
        </div >

        
        <div class="fullWid d-flex justify-content-center sticky-top shadow">

            <nav class="navbar navbar-expand-md navbar-dark background sticky-top shadow-sm">

                <a class="navbar-brand mr-5" id="brand-name" href="#">Yami</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link nav-hover mr-2" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-2 nav-hover active activo" href="">Services</a>
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
        <!--********************************************************************************************************-->
        <!--The place with collapsed links/buttons-->
        <div class="container finds-body">
            <div class="row">
                <div class="col-sm-4 choice-navigation" style="border-right:1px solid #FFF;  height:100%">
                    <h2><i class="fas fa-arrow-circle-down"></i>Press below here<i class="fas fa-arrow-circle-down"></i></h2>
                    <div id="accordion">
                        
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                    Search
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <a class="action-choice" href="#">
                                        <button type="button" class="btn btn-primary button-action" data-toggle="collapse" data-target="#restaurant-find">
                                            Find nearby Restaurants
                                        </button>
                                    </a>
                                    <hr>
                                    <a class="action-choice" href="#">
                                        <button type="button" class="btn btn-primary button-action" data-toggle="collapse" data-target="#cafeteria-find">
                                            Find nearby Cafeterias
                                        </button>
                                    </a>
                                    <hr>
                                    <a class="action-choice" href="#">
                                        <button type="button" class="btn btn-primary button-action" data-toggle="collapse" data-target="#restaurant-deliv">
                                            Nearby delivering Restaurants
                                        </button>
                                    </a>
                                    <hr>
                                    <a class="action-choice" href="#">
                                        <button type="button" class="btn btn-primary button-action" data-toggle="collapse" data-target="#cafeteria-deliv">
                                            Nearby delivering Cafeterias
                                        </button>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                    Bookings
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <a class="action-choice" href="#">
                                        <button type="button" class="btn btn-primary button-action" data-toggle="collapse" data-target="#space-reserv">
                                            Reserve space for my ceremony
                                        </button>
                                    </a>
                                    <hr>
                                    <a class="action-choice" href="#">
                                        <button type="button" class="btn btn-primary button-action" data-toggle="collapse" data-target="#food-reserv">
                                            Order food for upcoming ceremony
                                        </button>
                                    </a>
                                    <hr>
                                    <a class="action-choice" href="#">
                                        <button type="button" class="btn btn-primary button-action" data-toggle="collapse" data-target="#cooks-book">
                                            Book cooks for my ceremony
                                        </button>
                                    </a>
                                    <hr>
                                    <a class="action-choice" href="#">
                                        <button type="button" class="btn btn-primary button-action" data-toggle="collapse" data-target="#cakes-order">
                                            Order Cakes
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--The place for collapsed content-->
                <div class="col-sm-8">
                    
                    <div class="Searchs">
                        <div id="restaurant-find" class="collapse">
                            Nearby Restaurants
                            <div class="input-group">
                                <input type="search" class="form-control rounded" placeholder="Search nearby restaurants" aria-label="Search"
                                    aria-describedby="search-addon" />
                                <button type="button" class="btn btn-outline-light">search</button>
                            </div>
                        </div>
                        <div id="cafeteria-find" class="collapse">
                            Nearby Cafeterias
                            <div class="input-group">
                                <input type="search" class="form-control rounded" placeholder="Search nearby cafeterias" aria-label="Search"
                                    aria-describedby="search-addon" />
                                <button type="button" class="btn btn-outline-light">search</button>
                            </div>
                        </div>
                        <div id="restaurant-deliv" class="collapse">
                            Delivering Restaurants
                            <div class="input-group">
                                <input type="search" class="form-control rounded" placeholder="Search nearby delivering restaurants" aria-label="Search"
                                    aria-describedby="search-addon" />
                                <button type="button" class="btn btn-outline-light">search</button>
                            </div>
                        </div>
                        <div id="cafeteria-deliv" class="collapse">
                            Delivering cafeterias
                            <div class="input-group">
                                <input type="search" class="form-control rounded" placeholder="Search nearby delivering cafeterias" aria-label="Search"
                                    aria-describedby="search-addon" />
                                <button type="button" class="btn btn-outline-light">search</button>
                            </div>
                        </div>
                    </div>
                    <div class="Bookings">
                        <div id="space-reserv" class="collapse">
                            Reserve space for my ceremony
                            
                        </div>
                        <div id="food-reserv" class="collapse">
                            Order food for upcoming ceremony
                        </div>
                        <div id="cooks-book" class="collapse">
                            Book cooks for my ceremony
                        </div>
                        <div id="cakes-order" class="collapse">
                            Order Cakes
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
        <!--********************************************************************************************************-->
        <div class="container-fluid footer-things">
            <div class="container">
            <footer>
                <div class="row">
                    <div class="col-md-4" style="border-left:1px solid #FFF;border-right:1px solid #FFF;  height:205px">
                        <h4>Check</h4>
                        <hr>
                        <p><a class="dark-grey-text"href="contactUs.php">Contact us</a></p>
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
