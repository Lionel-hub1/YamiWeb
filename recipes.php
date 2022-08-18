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

        <title>Yami Recipes</title>

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
                            <a class="nav-link mr-2 nav-hover" href="services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-2 nav-hover" href="registerrescafe.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-5 nav-hover active activo" href="#">Recipes</a>
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
        <!--********************************************************************-->
        <div class="container-fluid recipes-edits">
            <div class="row">
                <div class="col-md-2" style="border-right:1px solid black;  height:1000px">
                    <div class="container-fluid btn-group-vertical">
                    <?php  
                        if (isset($_POST['submit'])){
                    ?>
                        <button type="button" class="btn btn-success">Restaurant channel</button>
                        <button type="button" class="btn btn-success">New videos</button>
                        <button type="button" class="btn btn-success">Others</button>
                        
                        
                        <?php
                            }else{
                                echo "";
                            }
                        ?>
                        <?php  
                            if (isset($_POST['submit'])){
                                echo "";
                            }else{
                        ?>
                        <?php
                        include_once 'popup.php';
                        /* */
                        ?>
                            <button type="button" class="btn btn-primary" id="myBtn3">Click Here To view te content of this page</button>
                        
                        <?php
                            }
                        ?>
                    </div>
                    
                </div>
                <?php 
                            
                    if (isset($_POST['submit'])){
                ?>

                <div class="col-md-7">
                    <h1><strong>Recipes that you want to learn from</strong></h1>
                    
                    <div class="videos-restaurants">
                        <div class="embed-responsive embed-responsive-16by9">
                            
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/u54aQPzwbWc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <br>
                        <h3><strong>Resipe name</strong>--by-Restaurant name</h3>
                        <hr>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="input-group col-lg-12">
                            <form class="form-inline" action="/">
                                <input class="form-control mr-sm-2 " type="text" placeholder="Search">
                                <button class="btn btn-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                    <br>
                        
                    <div class="row">
                        
                        <div class="col-sm-12">
                            <div class="videos-restaurants">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/u54aQPzwbWc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <p><strong>Resipe name</strong>-by-Restaurant name</p>
                            </div>
                            <div class="videos-restaurants">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/u54aQPzwbWc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <p><strong>Resipe name</strong>-by-Restaurant name</p>
                            </div>
                            <div class="videos-restaurants">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/u54aQPzwbWc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <p><strong>Resipe name</strong>-by-Restaurant name</p>
                            </div>
                            <div class="videos-restaurants">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/u54aQPzwbWc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <p><strong>Resipe name</strong>-by-Restaurant name</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }else{
                        echo "";
                    }
                ?>
            </div>
        </div>
        
        <!--********************************************************************-->
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