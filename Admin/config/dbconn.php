
<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "personal_portfolio";

    $conn = mysqli_connect("$host", "$username", "$password", "$db");

    if(!$conn){
        // This is used to pass the url for the page
        header("location: ./errors/connectionError.php");
        die();
    }
    else{
        ?>
        <script>
            alert("Connection Successful");
        </script>
    <?php
    }
?>
