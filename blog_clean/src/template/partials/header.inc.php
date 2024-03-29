<?php require "connect.inc.php"?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content=<?=$layoutDescription?> />
        <meta name="author" content="" />

        <title><?=$layoutTitle ?></title>
        
        <link rel="icon" type="image/x-icon" href="public/front/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="public/front/css/styles.css" rel="stylesheet" />
        <link href="public/front/css/blog.css" rel="stylesheet" />
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>
        <!-- Core theme JS-->
        <script src="public/front/js/scripts.js" defer></script>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand " href="#"><?= SITE_NAME?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="?page=home">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="?page=about">About</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="?page=404">Sample Post</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="?page=contact">Contact</a></li>
                        <?php
                        if(!isset($_SESSION['user'])){
                            echo "<li class='nav-item'><a class='nav-link px-lg-3 py-3 py-lg-4' href='?page=login'>Log in</a></li>";
                            echo '<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Se connecter</button>';
                        } else {
                            echo "<li class='nav-item'><a class='nav-link px-lg-3 py-3 py-lg-4' href='?page=logout'>Log out</a></li>";
                            echo "<li class='nav-item'><a class='nav-link px-lg-3 py-3 py-lg-4' href='?page=profile'>Profil de ".$_SESSION['user']['firstName']."</a></li>";
                            echo '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Full screen</button>';                        
                        }?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead h-100" style="background-image: url('public/front/assets/img/<?=$layoutImage?>')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <a href="#main" class='text-white'><h1 class="display-1 fs-0"><?=$headerTitle?></h1></a>
                            <span class="subheading"><?=$headerSubheading?></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4" id="main">