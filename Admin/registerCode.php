<?php
session_start();
include('config/dbconn.php');

if(isset($_POST['registerBtn'])){

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    if($password == $cpassword){
        // check if emial matches the already registered email?
        $checkEmail = "SELECT email FROM users WHERE email = '$email'";
        $checkEmail_run = mysqli_query($conn, $checkEmail);

        if(mysqli_num_rows($checkEmail_run) > 0){
            //Email Exist already
            $_SESSION['message'] = "Error! Email Already Exist";
            header("location: registration.php");
            exit(0); 
        }
        else{
            //insert into db
            $insert_query = "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')"; 

            $insert_query_run = mysqli_query($conn, $insert_query);
            if($insert_query_run){
                $_SESSION['message'] = "Registered Successfully";
                header("location: index.php");
                exit(0); 
            }
            else{
                $_SESSION['message'] = "Error! Something went wrong";
                header("location: registration.php");
                exit(0); 
            }
        }
    }
    else{
        $_SESSION['message'] = "Error! Password and Confirm Password does not matched!";
        header("location: registration.php");
        exit(0); 
    }
}
else{
    header("location: registration.php");
    exit(0);
}

?>