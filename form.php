<!--
/**
 * Created by EdgardoAcosta.
 * index.php
 * Landing page
 */
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login form</title>
    <!--Jquery-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Form css -->
    <link href="css/form.css" rel="stylesheet">

    <!-- start Mixpanel -->
    <script type="text/javascript">(function(e,a){if(!a.__SV){var b=window;try{var c,l,i,j=b.location,g=j.hash;c=function(a,b){return(l=a.match(RegExp(b+"=([^&]*)")))?l[1]:null};g&&c(g,"state")&&(i=JSON.parse(decodeURIComponent(c(g,"state"))),"mpeditor"===i.action&&(b.sessionStorage.setItem("_mpcehash",g),history.replaceState(i.desiredHash||"",e.title,j.pathname+j.search)))}catch(m){}var k,h;window.mixpanel=a;a._i=[];a.init=function(b,c,f){function e(b,a){var c=a.split(".");2==c.length&&(b=b[c[0]],a=c[1]);b[a]=function(){b.push([a].concat(Array.prototype.slice.call(arguments,
            0)))}}var d=a;"undefined"!==typeof f?d=a[f]=[]:f="mixpanel";d.people=d.people||[];d.toString=function(b){var a="mixpanel";"mixpanel"!==f&&(a+="."+f);b||(a+=" (stub)");return a};d.people.toString=function(){return d.toString(1)+".people (stub)"};k="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
            for(h=0;h<k.length;h++)e(d,k[h]);a._i.push([b,c,f])};a.__SV=1.2;b=e.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";c=e.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}})(document,window.mixpanel||[]);
        mixpanel.init("6ab14a67c6c517fc224b439ad9cbbf56");</script>
    <!-- end Mixpanel -->

    <!-- Js -->
    <script src="js/form.js"></script>



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
                <!--Links-->
                <ul class="nav navbar-nav smooth-scroll">
                    <li class="nav-item">
                        <a class="nav-link" onclick="location.href = 'index.php';">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  onclick="location.href = 'index.php#best-features';">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="location.href = 'index.php#testimonials';">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="location.href = 'index.php#pricing';">Pricing</a>
                    </li>
                </ul>

                <!--Navbar icons-->
                <ul class="nav navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a class="nav-link"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><i class="fa fa-instagram"></i></a>
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
                    <div class="col-lg-12">
                        <div class="description">
                            <h2 class="h2-responsive wow fadeInLeft">Sign up right now and get the last news! </h2>
                            <hr class="hr-dark wow fadeInLeft">
                            <p class="wow fadeInLeft" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Rem repellendus quasi fuga nesciunt dolorum nulla magnam veniam
                                sapiente, fugiat! Commodi sequi non animi ea dolor molestiae, quisquam iste, maiores.
                                Nulla.</p>
                            <br>
                            <a class="btn btn-comm btn-lg wow fadeInLeft" data-wow-delay="0.7s">Learn more</a>
                        </div>
                    </div>
                    <!--/.First column-->


                </div>
            </div>
        </div>
    </div>
    <!--/.Mask-->

</header>
<main>
    <div class="container">
        <div class="col-md-3"></div>
        <section class="section feature-box" id="add_user" style="">
            <!--Second column-->
            <div class="col-lg-6 wow fadeInDown" style="position: " data-wow-delay="0.2s">
                <!--Form-->
                <div class="card">
                    <div class="card-block">
                        <!--Header-->
                        <div class="text-xs-center">
                            <h3><i class="fa fa-user"></i> Register with:</h3>
                            <a href="#" target="" class="btn-floating btn-small btn-fb"><i
                                        class="fa fa-facebook"> </i></a>
                            <a href="#" target="" class="btn-floating btn-small btn-tw"><i
                                        class="fa fa-twitter"> </i></a>
                            <a href="#" target="" class="btn-floating btn-small btn-gplus"><i
                                        class="fa fa-google-plus"> </i></a>
                            <a href="#" target="" class="btn-floating btn-small btn-li"><i
                                        class="fa fa-linkedin"> </i></a>
                            <a href="#" target="" class="btn-floating btn-git btn-small"><i
                                        class="fa fa-github"></i></a>
                            <hr>
                            <h3>or:</h3>
                        </div>

                        <form method="POST" id="add">
                            <!--Body-->
                            <fieldset class="form-group">
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                    <label for="form2">Your email</label>
                                </div>

                                <div class="md-form">
                                    <i class="fa fa-pencil prefix"></i>
                                    <input type="text" id="form2" class="form-control" name="name" required>
                                    <label for="form2">Your Name</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-pencil prefix"></i>
                                    <input type="text" id="form2" class="form-control" name="last_name">
                                    <label for="form2">Your Last name</label>
                                </div>

                                <div class="md-form">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" id="form4" class="form-control" name="password" required>
                                    <label for="form4">Your password</label>
                                </div>

                                <div class="text-xs-center">
                                    <button class="btn btn-comm btn-lg" type="submit" onclick=" mixpanel.track('REGISTER NEW USER');">
                                        Register
                                    </button>
                                    <hr>
                                    <fieldset class="form-group">
                                        <input type="checkbox" id="checkbox1" name="news_letter" onclick="mixpanel.track('REGISTER TO NEWSLETTER');">
                                        <label for="checkbox1">Subscribe me to the newsletter</label>
                                    </fieldset>
                                </div>
                            </fieldset>
                        </form>

                    </div>
                </div>
                <!--/.Form-->
            </div>
            <!--/Second column-->

        </section>
    </div>
</main>
<script>
    function getURLParameter(name) {
        return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
    }
    var email_user = getURLParameter("email");

    if (email_user != undefined || email_user != ""){
        console.log(email_user);
        document.getElementById("email").value = email_user
    }
</script>

<!--/Navigation & Intro-->


<?php include 'footer.php' ?>