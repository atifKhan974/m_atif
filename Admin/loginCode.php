<?php
    session_start();
    include("config/dbconn.php");

    if(isset($_POST['loginBtn'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $login_query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' LIMIT 1";

        $login_query_run = mysqli_query($conn, $login_query);

        if(mysqli_num_rows($login_query_run) > 0){
            $_SESSION['auth'] = $email;
            header("Location: main.php");
            exit(0);
            
        }
        else{
            $_SESSION['message'] = "Invalid Email or Password";
            header("location: index.php");
            exit(0);
        }
    }
    else{
        $_SESSION['message'] = "You are not allowed to access this page";
        header("location: index.php");
        exit(0);
    }
?>