<?php
$servername="localhost";
$username="root";
$password="";
$database="library";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
    die("error detected".mysqli_error($con));
}echo "Congratulations! You Are Connected With Sorya Rathore";
?>