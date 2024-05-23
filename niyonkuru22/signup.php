<?php

include("connection.php");

if (isset($_POST['Register'])) {
    # code...

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $user = $_POST['email'];
    $pass = $_POST['password'];


    $sql = "INSERT INTO users (fname,lname,email, password) VALUES ('$fname','$lname','$user', '$pass')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script> alert('Data Added Well!!');window.location.href='index.php';  </script>";
    }
    else{
        echo "Failed To Create Account";
    }

}

?>