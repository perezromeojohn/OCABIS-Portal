<?php
session_start();

?>
<?php

include("../dbcon.php");

if(isset($_POST['user_login']))
{
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    $check_user="select * from users WHERE user_Email='$user_email' AND user_Password='$user_password'";

    $run=mysqli_query($dbcon,$check_user);
    if (mysqli_num_rows($run)) {
	    echo "<script>alert('You're successfully login!')</script>";
        echo "<script>window.open('../src/users/index.php','_self')</script>";
    
        $_SESSION['user_email']=$user_email; 
    } else {
        echo "<script>alert('Email or password is incorrect!')</script>";
		echo "<script>window.open('../index.php','_self')</script>";
		exit();
    }
}
?>