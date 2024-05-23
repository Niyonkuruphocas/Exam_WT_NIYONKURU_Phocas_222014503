<?php
session_start();
if (!$_SESSION['email']) {
    header("location:index1.php");
    exit; 
}
if (isset($_POST['logout'])) {
    $_SESSION = array();
    session_destroy();
    header("location:index.php");
    exit;
}
?>