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
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

        <link rel="stylesheet" href="yami.css">

        <title>Yami Home</title>
    </head>

    <body>
        <div class="container-fluid" style="width:100%">
            <nav class="navbar navbar-expand-md navbar-dark our-nav fixed-top shadow mb-5" style="background-color: dark-brown;">

                <div class="navbar-brand">
                    <img src="logo.png" id="logo-brand" alt="">
                </div>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end d-flex flex-column" id="collapsibleNavbar">
                    <form class="navbar-nav nav justify-content-end form-inline">
                        <div class="input-group">
                            
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class='fas fa-search' style='font-size:24px;color:grey'></i></span>
                            </div>

                        </div>    
                    </form>
                    <ul class="navbar-nav nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Where is food?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>   
                        <li>
                        <a class="nav-link" href="logout.php">Logout</a>
                        </li> 
                    </ul>
                    
                    
                </div> 
                <div id="accountx">
                    <?php echo "<p >User|   <Strong>" . $_SESSION['username'] . "</strong></p>"; ?>
                </div>
            </nav>
            

        </div>
        
        <div class="container" style="margin-top:150px;">
            <div class="intro align-middle mx-auto" style="width: 40%;">
                <div class="container">
                    <h1>Welcome to</h1>
                    <div style="background-color: rgba(158, 93, 49, 0.733) !important;">
                        <img src="logo.png" id="bdylogo" alt="">
                    </div>
                    
                    <h3>Discover the right place to take meal from</h3>

                    <h5>Find the reputable restaurants</h5>
                    <h5>Find the reputable cafeteria</h5>
                    <h5>Find food recipes</h5>
                </div>
            </div>
        </div>
            

<!--**************************************************FOOTER START**********************************************************-->
        
        <div class="container-fluid fixfoot" style="width:100%" id="footer">
            <div class="col-md-12" style="padding-top:50px;">
                <h5 style="color:#FFF;">Follow us</h5>  
            </div>

            <hr style="width:100%">
            <div class="col-md-12">
                <div class="col-md-12" id="icon">
                    <ul>
                        <li style="background-color:#06F;text-align: center;"><a href="https://web.facebook.com/ndabagalionel.henry/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li style="background-color:#09F;text-align: center;"><a href="https://twitter.com/login?lang=en" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li style="background-color:#960;text-align: center;"><a href="https://accounts.google.com/ServiceLogin/signinchooser?elo=1&flowName=GlifWebSignIn&flowEntry=AddSession" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                        <li style="background-color:#F00;text-align:center;"><a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        <li style="background-color:#96F;text-align: center;"><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        

    </body>
</html>