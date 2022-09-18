

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Dashboard | Atif</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">



    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <!-- ---- Font Awesome Link ---  -->
    <script src="https://kit.fontawesome.com/08bfb080f0.js" crossorigin="anonymous"></script>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="Data/dashboard.css" rel="stylesheet">
</head>

<body>
        <?php
             $hero_select_query = "SELECT * FROM `hero`";
             $hero_select_query_run = mysqli_query($conn, $hero_select_query);
             $row =  mysqli_fetch_row($hero_select_query_run);
             $hero_image = "admin/".$row[2]."";
        ?>

        

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#"><?php echo $row[3]; ?></a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search"
            aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#">Sign out</a>
            </div>
        </div>
    </header>

    
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3 sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item navLink">
                        <a class="nav-link active" aria-current="page" href="#" id="dashboardLink">
                            <span data-feather="home" class="align-text-bottom"></span>
                            DASHBOARD
                        </a>
                    </li>


                </ul>

                <h6
                    class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                    <span>Others</span>
                    <a class="link-secondary" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle" class="align-text-bottom"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item navLink">
                        <a class="nav-link" href="#" id="websiteLink">
                            <span data-feather="file" class="align-text-bottom"></span>
                            WEBSITE
                        </a>
                    </li>
                    <li class="nav-item navLink">
                        <a class="nav-link" href="#" id="usersLink">
                            <span data-feather="file" class="align-text-bottom"></span>
                            USERS
                        </a>
                    </li>
                    <li class="nav-item navLink">
                        <a class="nav-link" href="#" id="projectLink">
                            <span data-feather="file" class="align-text-bottom"></span>
                            PROJECTS
                        </a>
                    </li>
                    <li class="nav-item navLink">
                        <a class="nav-link" href="#" id="servicesLink">
                            <span data-feather="file" class="align-text-bottom"></span>
                            SERVICES
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom text-primary">
                <h1 class="h2">Dashboard</h1>

            </div>

            <!-- Dashboard -->
            <section class="d-block" id="dashboardSection">
                <h2>Dashboard Details</h2>
                <div class="row d-flex justify-content-between">
                    <div class="col-5 bg-primary mx-3 p-3 rounded">
                        <h3 class="text-light">Download Users</h3>
                        <h4 class="text-light text-end">1510</h4>
                    </div>
                    <div class="col-5 bg-primary mx-3 p-3 rounded">
                        <h3 class="text-light">Visiting Users</h3>
                        <h4 class="text-light text-end">1510</h4>

                    </div>
                </div>
            </section>

            <!-- Website -->
            <section class="d-none" id="websiteSection">
                <div class="container">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark my-3">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <p class="text-white mt-3 fw-bold fs-6">Edit your website</p>
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#hero">Hero</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#services">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#gallery">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#contact">Contact</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>

                <h2 class="ms-3">Website Details</h2>

                <div class="row m-3 p-2 rounded">
                    <!-- INCLUDE FILES HERE  -->
                    <?php
                    include ('color.php');
                    include ('hero.php');
                    include ('about.php');
                    include ('gallery.php');
                    include ('serviceHeadings.php');
                    include ('contact.php');
                    ?>
                </div>
            </section>

                <?php
                    include('users.php');
                    include('projects.php');
                    include('services.php');

                ?>


