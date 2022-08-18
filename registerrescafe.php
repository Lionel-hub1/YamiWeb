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
                            <a class="nav-link mr-2 nav-hover" href="services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-2 nav-hover active activo" href="#">Register</a>
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
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#restaurant"><strong>Register Restaurant</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#cafeteria"><strong>Register Cafeteria</strong></a>
                </li>
                
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <!--Restaurant registration-->
                <div id="restaurant" class="container tab-pane active"><br>
                    <h3><strong>REGISTER YOUR RESTAURANT</strong></h3>
                    <br>
                    <form action="regresform.php" class="needs-validation res-reg-form" id="restaurant-reg">
                        <div class="row">
                            <div class="col-sm-6" >
                                <input type="text" class="form-control reg-inputs" id="business-name" placeholder="Restaurant's Name" name="businessName">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control reg-inputs" placeholder="Enter your email" name="business-mail">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="password" class="form-control reg-inputs" id="business-password" placeholder="Enter password" name="businesass">
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control reg-inputs" placeholder="Retype your password" name="business-2pass">
                            </div>
                        </div>
                        <br>
                        
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="deliver-yes" name="deliverCh" value="deliverYes">
                            <label class="custom-control-label" for="deliverYes">We deliver</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="deliver-no" name="deliverCh" value="deliverNo">
                            <label class="custom-control-label" for="deliverNo">We don't deliver</label>
                        </div>
                        <br>
                        <select name="cars" class="custom-select mb-3">
                            <option selected>Select location</option>
                            <option value="Nyarugenge">Nyarugenge</option>
                            <option value="Kicukiro">Kicukiro</option>
                            <option value="Gasabo">Gasabo</option>
                            <option value="Kamonyi">Kamonyi</option>
                            <option value="Bugesera">Bugesera</option>
                            <option value="Rwamagana">Rwamagana</option>
                            <option value="Muhanga">Muhanga</option>
                            <option value="Huye">Huye</option>
                            <option value="Rubavu">Rubavu</option>
                            <option value="Nyamasheke">Nyamasheke</option>
                            <option value="Musanze">Musanze</option>
                            <option value="Nyagatare">Nyagatare</option>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <div id="cafeteria" class="container tab-pane fade"><br>
                    <h3><strong>REGISTER YOUR CAFETERIA</strong></h3>
                    <br>

                    <!--Cafeteria registration-->
                    <form action="" class="needs-validation res-reg-form">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control reg-inputs" id="business-name" placeholder="Cafeteria's Name" name="business-name">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control reg-inputs" placeholder="Enter your email" name="business-mail">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="password" class="form-control reg-inputs" id="business-password" placeholder="Enter password" name="business-pass">
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control reg-inputs" placeholder="Retype your password" name="business-2pass">
                            </div>
                        </div>
                        <br>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="deliver-yes" name="deliver-ch" value="deliver-yes">
                            <label class="custom-control-label" for="deliver-yes">We deliver</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="deliver-no" name="deliver-ch" value="deliver-no">
                            <label class="custom-control-label" for="deliver-no">We don't deliver</label>
                        </div>
                        <br>
                        <select name="location" class="custom-select mb-3">
                            <option selected>Select location</option>
                            <option value="Nyarugenge">Nyarugenge</option>
                            <option value="Kicukiro">Kicukiro</option>
                            <option value="Gasabo">Gasabo</option>
                            <option value="Kamonyi">Kamonyi</option>
                            <option value="Bugesera">Bugesera</option>
                            <option value="Rwamagana">Rwamagana</option>
                            <option value="Muhanga">Muhanga</option>
                            <option value="Huye">Huye</option>
                            <option value="Rubavu">Rubavu</option>
                            <option value="Nyamasheke">Nyamasheke</option>
                            <option value="Musanze">Musanze</option>
                            <option value="Nyagatare">Nyagatare</option>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
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
