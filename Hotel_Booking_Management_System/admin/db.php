<?php
// $con = mysqli_connect("localhost","root","","sourcecodester_hoteldb") or die(mysqli_connect_error());
// $con = mysqli_connect("localhost","root","","sourcecodester_hoteldb") or die(mysql_error());
$con = mysqli_connect("localhost","root","","sourcecodester_hoteldb");
if(!$con){
    die("Cannot Connect to Database".mysqli_connect_error());
}

?>