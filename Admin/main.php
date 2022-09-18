<?php
    include('config/dbconn.php');
    session_start();
    
    $auth = $_SESSION['auth'];
    if($auth == true){

    }
    else{
        header("location: index.php");
    }

    include('config/loadFiles.php');
    include('includes/header.php');
    include('includes/footer.php');
?>