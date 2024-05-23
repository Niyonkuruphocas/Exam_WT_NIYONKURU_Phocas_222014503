<?php
include("connection.php");
 $id = $_GET["id"];
 $sql = "DELETE FROM contact WHERE id='$id' ";
 $result = mysqli_query($conn,$sql);
 
 if ($result)
 {
    echo "<script> alert('Data Deleted Well!!');window.location.href='index1.php';  </script>";
 }
 else{
    echo "Failed to delete";
 }



?>