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
    <title><?php echo $row[3]; ?></title>
    <!-- --- Custom CSS---  -->
    <link rel="stylesheet" href="Sources/css/style.css?<?php $version; ?>">
    <link rel="stylesheet" href="Sources/css/dialogStyle.css?<?php $version ?>">
    <link rel="stylesheet" href="Sources/css/media.css?<?php $version ?>">
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

    <div class="loading show">
        <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_ujhjs6tl.json" background="transparent"
            speed="1" style="width: 8rem; height: 8rem;" loop autoplay></lottie-player>
        <h4 class="color-dark">Loading Content...</h4>
    </div>

    <div class="wrapper hide">

        <div class="dialogContainer hide" id="dialogContainer">
            <p class="closeDialog">x</p>
            <div class="dialog" id="dialog">
                <div class="dialogHeader">
                    <h2 class="">Contact Me</h2>
                </div>
                <form class="form" id="form" method="post" name="emailContact">
                    <div class="form-control">
                        <label>Email</label>
                        <input name="emial" type="email" placeholder="Your Email Id here" id="email" required>
                    </div>

                    <div class="form-control">
                        <label>Subject</label>
                        <input name="subject" type="text" placeholder="Subject here" id="subject" required>
                    </div>

                    <div class="form-control">
                        <label>Message</label>
                        <textarea name="message" id="message" cols="30" rows="5" placeholder="Leave your Message Here"
                            required></textarea>
                    </div>

                    <input type="submit" name="send" class="btn submitBtn"></input>

                </form>
            </div>
        </div>

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
                            <li><a href="#header" class="active">Home</a></li>
                            <li><a href="#aboutMe">About Me</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <?php include('header.php') ?>
        <?php include('about.php') ?>
        <?php include('services.php') ?>
        <?php include('gallary.php') ?>
        <?php include('contact.php') ?>