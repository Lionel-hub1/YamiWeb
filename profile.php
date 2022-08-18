<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

include 'config.php';
$user_check=$_SESSION['username'];
$ses_sql=mysqli_query($conn,"select email,password from users where username = '$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['email'];
$loggedin_id=$row['password'];

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
                            <a class="nav-link mr-2 nav-hover" href="services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-2 nav-hover" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-5 nav-hover" href="recipes.php">Recipes</a>
                        </li>    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active activo" href="#" id="navbardrop" data-toggle="dropdown">
                                <?php echo $_SESSION['username'] ; ?>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item disabled" href="#">Manage profile</a>
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
                <div class="col-md-5">
                </div>

                <div class="col-md-2">
                    <h3>Your Profile</h3>
                    <img class="img-fluid" src="profyami.png"  alt="">
                </div>

                <div class="col-md-5">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                </div>

                <div class="col-md-6">
                    <?php
                        $sql="SELECT * FROM users where username='$user_check'";
                        $result=mysqli_query($conn,$sql);
                    ?>
                    <?php
                        //open the while loop
                        while($rows=mysqli_fetch_array($result)){
                    ?>
                    
                    
                    <form action="" method="POST" >
                    <div class="container-fluid">
                        <h4><div class="row"><span class="col-sm-6 font-weight-bold">Username:</span><span class="col-sm-6 text-light"><?php echo $rows['username']; ?></span></div></h4>
                        
                        <button disabled="disabled" class="btn btn-light">Change Username</button>
                        <br><br><br>

                        <h4><div class="row"><span class="col-sm-6 font-weight-bold">Email:</span> <span class="col-sm-6 text-light"><?php echo $rows['email']; ?></span> </div></h4> 
                        
                        <button disabled="disabled" class="btn btn-light">Change Email</button>
                    </div>
                    <br><br>
            
                         
                            
                        
                    <marquee><div> Thank you for working with yami</div></marquee>
                        
                    </form>

                    <div class="container">
                        <button class="container btn btn-light"><a href="logout.php" >Sign Out</a></button>
                    </div>

                    <?php 
                        // close while loop 
                        }
                    ?>
                </div>

                <div class="col-md-3">
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
