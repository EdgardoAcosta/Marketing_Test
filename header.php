<?php
/**
 * User: Edgardo Acosta
 * Header.php
 * This file contains the header for the index.php file
 */


echo '
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags  -->
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
    
    <!--MixPanel-->

   <!-- start Mixpanel -->
   <script type="text/javascript">(function(e,a){if(!a.__SV){var b=window;try{var c,l,i,j=b.location,g=j.hash;c=function(a,b){return(l=a.match(RegExp(b+"=([^&]*)")))?l[1]:null};g&&c(g,"state")&&(i=JSON.parse(decodeURIComponent(c(g,"state"))),"mpeditor"===i.action&&(b.sessionStorage.setItem("_mpcehash",g),history.replaceState(i.desiredHash||"",e.title,j.pathname+j.search)))}catch(m){}var k,h;window.mixpanel=a;a._i=[];a.init=function(b,c,f){function e(b,a){var c=a.split(".");2==c.length&&(b=b[c[0]],a=c[1]);b[a]=function(){b.push([a].concat(Array.prototype.slice.call(arguments,
    0)))}}var d=a;"undefined"!==typeof f?d=a[f]=[]:f="mixpanel";d.people=d.people||[];d.toString=function(b){var a="mixpanel";"mixpanel"!==f&&(a+="."+f);b||(a+=" (stub)");return a};d.people.toString=function(){return d.toString(1)+".people (stub)"};k="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
    for(h=0;h<k.length;h++)e(d,k[h]);a._i.push([b,c,f])};a.__SV=1.2;b=e.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";c=e.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}})(document,window.mixpanel||[]);
    mixpanel.init("6ab14a67c6c517fc224b439ad9cbbf56");</script>
    <!-- end Mixpanel -->
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
                        <a id="home" class="nav-link"  onclick="location.href = \'index.php\';">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a id="features" class="nav-link" href="#best-features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a id="testimonial" class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a id="pricing" class="nav-link" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a id="form" class="nav-link" onclick="location.href = \'form.php\';">Contact</a>
                    </li>
                     <li class="nav-item">
                        <a id="welcome" class="nav-link" onclick="location.href = \'welcome.php\';">Welcome</a>
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
                            <p class="wow fadeInLeft" data-wow-delay="0.3s">Register to Dropbox Bussines and get the experience you 
                            deserve.</p>
                                <br>
                               <p>
                               <form>
                                   <fieldset class="form-group">
                                       <div class="md-form wow fadeInLeft" data-wow-delay="0.3s">
                                            <i class="fa fa-envelope prefix"></i>
                                            <input type="email" id="email_new_user" class="form-control" name="email">
                                            <label>Your email</label>
                                        </div>
                                    </fieldset>
                                </form>
                                </p> 
                            <br>
                            
                            <a class="btn btn-white-outline btn-lg wow fadeInLeft" data-wow-delay="0.7s" id="to_form">Register</a>

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