<?php
include("connection.php");

 if (isset($_POST["contact"])) {

    $id = $_REQUEST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $sql = "UPDATE contact SET name='$name', message='$message' , email='$email' WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result)
    {
        echo "<script> alert('Data Updated Well!!');
        window.location.href='index1.php';  </script>";
    }
    else{
        echo "Failed to delete";
    }
 }

?>