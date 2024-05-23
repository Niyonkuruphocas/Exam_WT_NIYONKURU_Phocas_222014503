<?php
include("connection.php");
session_start();
$msg ="";
if (isset($_POST['login'])) {

    $user = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "SELECT email, password FROM users WHERE email='$user' AND password='$pass' ";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)){
        $_SESSION['email'] = $user;
        header("Location:index1.php");
    }
    else{
        $msg = "Invalid Username And Password";
    }
}
?>