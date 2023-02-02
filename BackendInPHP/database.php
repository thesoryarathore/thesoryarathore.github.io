<?php
$servername="localhost";
$username="id18067696_root";
$password="Sorya@7777777";
$database="id18067696_library";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
    die("error detected".mysqli_error($con));
}echo "Congratulations! You Are Connected With Sorya Rathore";
?>