<!--
/**
 * Created by EdgardoAcosta.
 * welcome.php
 * Simple welcome pages
 */
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome to Dropox</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Google Analytics-->
    <script type="text/javascript" src="js/analyticstracking.js"></script>

    <!-- start Mixpanel -->
    <script type="text/javascript">(function(e,a){if(!a.__SV){var b=window;try{var c,l,i,j=b.location,g=j.hash;c=function(a,b){return(l=a.match(RegExp(b+"=([^&]*)")))?l[1]:null};g&&c(g,"state")&&(i=JSON.parse(decodeURIComponent(c(g,"state"))),"mpeditor"===i.action&&(b.sessionStorage.setItem("_mpcehash",g),history.replaceState(i.desiredHash||"",e.title,j.pathname+j.search)))}catch(m){}var k,h;window.mixpanel=a;a._i=[];a.init=function(b,c,f){function e(b,a){var c=a.split(".");2==c.length&&(b=b[c[0]],a=c[1]);b[a]=function(){b.push([a].concat(Array.prototype.slice.call(arguments,
            0)))}}var d=a;"undefined"!==typeof f?d=a[f]=[]:f="mixpanel";d.people=d.people||[];d.toString=function(b){var a="mixpanel";"mixpanel"!==f&&(a+="."+f);b||(a+=" (stub)");return a};d.people.toString=function(){return d.toString(1)+".people (stub)"};k="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
            for(h=0;h<k.length;h++)e(d,k[h]);a._i.push([b,c,f])};a.__SV=1.2;b=e.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";c=e.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}})(document,window.mixpanel||[]);
        mixpanel.init("6ab14a67c6c517fc224b439ad9cbbf56");</script>
    <!-- end Mixpanel -->

    <style>

        img{
            height: 1109em;
            width: 490em;
        }
    </style>

</head>

<body class="fixed-sn blue-skin">

<!--Double navigation-->
<header>

    <!--Navbar-->
    <nav class="navbar navbar-fixed-top scrolling-navbar double-nav">


        <!-- Breadcrumb-->
        <div class="breadcrumb-dn">
            <a href="index.php" onclick="mixpanel.track('WELCOME TO HOME');"><p>Home page</p> </a>
        </div>


    </nav>
    <!--/.Navbar-->
</header>
<!--/Double navigation-->

<!--Main layout-->
<main>
    <div class="container-fluid">

        <!--Section: Main carousel-->
        <section>
            <div class="row">
                <div class="col-md-12">

                    <!--Carousel Wrapper-->
                    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <!--First slide-->
                            <div class="carousel-item active">
                                <!--Mask color-->
                                <div class="view hm-black-slight">
                                    <img src="assets/dropbox_welcome1.png" class="img-fluid" alt="">
                                    <div class="full-bg-img">
                                    </div>
                                </div>
                                <!--Caption-->
                                <div class="carousel-caption">
                                    <div class="animated fadeInDown">
                                        <h3 class="h3-responsive">Welcome to Dropbox</h3>
                                        <p>Get the experience you deserve</p>
                                        <p><a class="btn btn-white-outline btn-lg wow fadeInLeft"
                                              data-wow-delay="0.7s" href="index.php"onclick="mixpanel.track('WELCOME TO HOME');" >Learn more!</a>
                                        </p>
                                    </div>
                                </div>
                                <!--Caption-->
                            </div>
                            <!--/First slide-->

                            <!--Second slide-->
                            <div class="carousel-item ">
                                <!--Mask color-->
                                <div class="view hm-black-slight">
                                    <img src="assets/dropbox_welcome2.png" class="img-fluid" alt="">
                                    <div class="full-bg-img">
                                    </div>
                                </div>
                                <!--Caption-->
                                <div class="carousel-caption">
                                    <div class="animated fadeInDown">
                                        <h3 class="h3-responsive">Easy Access</h3>
                                        <p>Faster and safer to your data.</p>
                                        <p><a class="btn btn-white-outline btn-lg wow fadeInLeft"
                                              data-wow-delay="0.7s" href="index.php" onclick="mixpanel.track('WELCOME TO HOME');">Learn more!</a>
                                        </p>
                                    </div>
                                </div>
                                <!--Caption-->
                            </div>
                            <!--/Second slide-->
                        </div>
                        <!--/.Slides-->

                        <!--Controls-->
                        <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
                            <span class="icon-prev" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next">
                            <span class="icon-next" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                    </div>
                    <!--/.Carousel Wrapper-->

                </div>
            </div>
        </section>
        <!--/Section: Main carousel-->
    </div>
</main>
<!--/Main layout-->



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

</body>

</html>