<?php
session_start();
?>

<?php
include("../dbcon.php");

if(isset($_POST['register']))
{
$user_Email = $_POST['ruser_email'];
$user_Password = $_POST['ruser_password'];
$user_FirstName = $_POST['ruser_firstname'];
$user_LastName = $_POST['ruser_lastname'];
$user_PhoneNumber = $_POST['ruser_number'];

$check_user="select * from users WHERE user_Email='$user_Email'";
    $run_query=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('User already exist, Please try another one!')</script>";
exit();
    }
 
$saveacc="INSERT INTO users (user_Email,user_Password,user_FirstName,user_LastName,user_PhoneNumber) VALUE ('$user_Email','$user_Password','$user_FirstName','$user_LastName','$user_PhoneNumber')";
mysqli_query($dbcon,$saveacc);
echo "<script>alert('Data successfully saved, You may now login!')</script>";
echo "<script>window.open('../index.php','_self')</script>";
}

?>
