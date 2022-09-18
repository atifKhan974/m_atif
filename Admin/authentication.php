<?php
include('config/dbconn.php');
session_start();
if(isset($_SESSION['auth'])){
    $_SESSION['message'] = "Welcome to Dashboard ";
    header("location: main.php");
    exit(0);
}
else {
    $_SESSION['message'] = "Login to Access Dashboard";
    header("Location: index.php");
    exit(0);
}


?>