<?php

include("connection.php");

if (isset($_POST['contact'])) {
    # code...
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $sql = "INSERT INTO contact (name,email,message) VALUES ('$name','$email','$message')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script> alert('Data Added Well!!');window.location.href='index1.php';  </script>";
    }
    else{
        echo "Failed To Create Account";
    }

}

?>