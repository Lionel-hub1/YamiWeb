<!--
	Author:			Jean Lionel Ndabaga;
	Project:		PHP Knowledge checks;
	Description:	Making a login page that have both register and login forms linked to thedatabase;
-->
<?php

session_start();

//connecting php to the database. You put in the server name, username, and password;
$con = mysqli_connect("localhost", "root", "", "yami");
 
//selecting the database to save the data to

//creating variables and assigning them variables
$restName = $_POST['businessName']; 
$resMail = $_POST['businessMail']; 
$resPass = $_POST['businessPass']; 
$resLocation = $_POST['location'];
$resDelivering = $_POST['deliverCh'];

//creating a query that will check if we have some names 
$s = "select * from restaurant_login where name = '$restName'";

//this is to connect the above query to the database mentioned in $s variable
$result = mysqli_query($con, $s);

//This is to count the number of columns that meets the query in $s variable
$num = mysqli_num_rows($result);

//If the $num variable returns 1 
if($num == 1){
    // this message will be displayed
    echo "<script>alert('Username is already taken')</script>";
	include 'registerrescafe.php.php'; 
}else{
    //if the $num variable returns different the data you inputted in the labels will be saved in the database
    $reg = "insert into restaurant_login(name, email, location, password) values('$restName', '$resMail', '$resLocation', '$resDelivering');";
    //this is to connect the above query to the database so that it work there
    mysqli_query($con, $reg);
    echo "<script>alert('Registration Successful')</script>";
	include 'iregisterrescafe.php.php';
}