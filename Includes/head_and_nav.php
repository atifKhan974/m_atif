<!DOCTYPE html>
<html lang="en">

    <!-- Including php for displaying logo from db  -->
    <?php
        $select_query = "SELECT * FROM `hero`";
        $select_query_run = mysqli_query($conn, $select_query);
        $row =  mysqli_fetch_row($select_query_run);
        $logo_image = "admin/".$row[1]."";
    ?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row[3]; ?> | Projects</title>
    <!-- --- Custom CSS---  -->
    <link rel="stylesheet" href="Sources/css/style.css?<?php $version; ?>">
    <link rel="stylesheet" href="Sources/css/styleProject.css?<?php $version; ?>">
    <link rel="stylesheet" href="Sources/css/dialogStyle.css?<?php $version; ?>">
    <link rel="stylesheet" href="Sources/css/media.css?<?php $version; ?>">
    <!-- --- Favicon ---  -->
    <link rel="shortcut icon" href="<?php echo $logo_image; ?>" type="image/x-icon">
    <!-- ---- Font Awesome Link ---  -->
    <script src="https://kit.fontawesome.com/08bfb080f0.js" crossorigin="anonymous"></script>
    <!-- ---- Flickity Link for carousal ---  -->
    <link rel="stylesheet" href="/path/to/flickity.css" media="screen">


</head>

<body>

    <div class="circle"></div>
    <div id="header"></div> <!-- made header b/c to take the upArrow to top-->
    <i class="fa-solid fa-bars menu hideMenu" id="menu"></i>


    <div class="wrapper">


        <header class="header" id="">
            <div class="icons">
                <a href="#header">
                    <i class="fa-solid fa-angle-up upArrow"></i>
                </a>
                <p class="close">x</p>
            </div>
            <nav class="container navigation">
                <div class="split">
                    <div class="logo">
                        
                        <!-- <h2 class="logo">M<span>A</span></h2> -->
                        <img src=" <?php echo $logo_image; ?> "  alt="logo" width="80">
                    </div>
                    <div>
                        <ul class="links">
                            <li><a href="./index.php" class="active">Home</a></li>
                            <li><a href="./index.php">About Me</a></li>
                            <li><a href="./index.php">Services</a></li>
                            <li><a href="./index.php">Gallery</a></li>
                            <li><a href="./index.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>