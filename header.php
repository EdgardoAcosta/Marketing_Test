<?php
/**
 * User: Edgardo Acosta
 * Header.php
 */


echo '
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dropbox Business</title>

    <!--Jquery-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

   
</head>

<body>

<!--Navigation & Intro-->
<header>

    <!--Navbar-->
    <nav class="navbar navbar-dark navbar-fixed-top scrolling-navbar">

        <!-- Collapse button-->
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
            <i class="fa fa-bars"></i></button>

        <div class="container">

            <!--Collapse content-->
            <div class="collapse navbar-toggleable-xs" id="collapseEx">
                <!--Navbar Brand-->
                <!--Links-->
                <ul class="nav navbar-nav smooth-scroll">
                    <li class="nav-item">
                        <a class="nav-link"  onclick="location.href = \'index.php\';">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#best-features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="location.href = \'form.php\';">Contact</a>
                    </li>
                </ul>

                <!--Navbar icons-->
                <ul class="nav navbar-nav nav-flex-icons">
                    <li class="nav-item wow fadeIn" data-wow-delay="0.2s">
                        <a class="nav-link" href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="nav-item wow fadeIn" data-wow-delay="0.3s">
                        <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="nav-item wow fadeIn" data-wow-delay="0.4s">
                        <a class="nav-link" href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>

            </div>
            <!--/.Collapse content-->

        </div>

    </nav>
    <!--/.Navbar-->

    <!--Mask-->
    <div class="view hm-black-strong">
        <div class="full-bg-img flex-center">
            <div class="container">
                <div class="row" id="home">

                    <!--First column-->
                    <div class="col-lg-6">
                        <div class="description">
                            <h2 class="h2-responsive wow fadeInLeft">Welcome to the solution of your problems </h2>
                            <hr class="hr-dark">
                            <p class="wow fadeInLeft" data-wow-delay="0.4s">Dropbox Bussines Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Aenean at laoreet tellus. Curabitur posuere blandit massa.
                                .</p>
                            <br>
                            <a class="btn btn-white-outline btn-lg wow fadeInLeft" data-wow-delay="0.7s">Learn more</a>

                        </div>
                    </div>
                    <!--/.First column-->

                    <!--Second column-->
                    <div class="col-lg-4 col-lg-offset-1 flex-center">
                        <!--Form-->
                        <img src="assets/dropbox_logo.png" alt="" class="img-fluid wow fadeInRight" id="app-mockup">
                        <!--/.Form-->
                    </div>
                    <!--/Second column-->
                </div>
            </div>
        </div>
    </div>
    <!--/.Mask-->

</header>
<!--/Navigation & Intro-->



<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

<!-- Tooltips -->
<script type="text/javascript" src="js/tether.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>

<script>
    new WOW().init();
</script>

    
';