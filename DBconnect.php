<?php
$server = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($server, $username, $password,'Cricket');
// if($con){echo "Success connecting to the db";}
if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
?>