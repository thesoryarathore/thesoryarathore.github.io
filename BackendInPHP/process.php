<?php
include 'database.php';
if(isset($_POST['submit']))
{
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $education=$_POST['education'];
    $phone=$_POST['phone'];
    $sql="insert into student(firstName,lastName,gender,email,password,education,phone)
    values('$firstName','$lastName','$gender','$email','$password','$education','$phone')";
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('Congratulations! You Are Connected With Sorya Rathore')</script>";
    }
    else{
        "error:".mysqli_error($con);
    }
    mysqli_close($con);
}
?>