<?php
include('config.php');
error_reporting(0);
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $query=mysqli_query($conn,"SELECT * FROM user WHERE email='$email' and password='$pass'");
    $rows = mysqli_num_rows($query);
    if($rows == 1)
    {
        echo "User Found";
        //header("Location: Destination or homepage.html");
        //remove above comment(//) if you want to redirect to another page
    }
    else{
        echo "User not Found";
    }
}
?>