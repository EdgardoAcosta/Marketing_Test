<!--
/**
 * Created by EdgardoAcosta.
 * index.php
 * Landing page
 */
-->
<?php  include 'header.php' ?>

<!-- Index css -->
<link href="css/index.css" rel="stylesheet">

<!-- Index js -->
<script src="js/index.js"></script>


<!--Main layout-->
<main>
    <div class="container">

        <!--Section: Features v.4-->
        <section class="section feature-box" id="best-features">

            <!--Section heading-->
            <h1 class="section-heading wow fadeIn" data-wow-delay="0.2s">Why is it so great?</h1>
            <!--Section description-->
            <p class="section-description lead wow fadeIn" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam
                voluptas nostrum quisquam eum porro a pariatur accusamus veniam. Quia, minima?</p>

            <!--First row-->
            <div class="row features-small">

                <!--First column-->
                <div class="col-md-4 wow fadeInRight" data-wow-delay="0.2s">
                    <!--First row-->
                    <div class="row">
                        <div class="col-xs-2">
                            <i class="fa fa-lock blue-text"></i>
                        </div>
                        <div class="col-xs-10">
                            <h4 class="feature-title">Security</h4>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                            <div style="height:30px"></div>
                        </div>
                    </div>
                    <!--/First row-->

                    <!--Second row-->
                    <div class="row">
                        <div class="col-xs-2">
                            <i class="fa  fa-puzzle-piece blue-text"></i>
                        </div>
                        <div class="col-xs-10">
                            <h4 class="feature-title">Customization</h4>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                                maiores nam, aperiam minima assumenda deleniti hic.</p>
                            <div style="height:30px"></div>
                        </div>
                    </div>
                    <!--/Second row-->

                </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-4 m-b-r center-on-small-only wow fadeInRight" data-wow-delay="0.3s">
                    <img src="assets/share.png" alt="" class="z-depth-0">
                </div>
                <!--/Second column-->

                <!--Third column-->
                <div class="col-md-4 wow fadeInRight" data-wow-delay="0.4s">
                    <!--First row-->
                    <div class="row">
                        <div class="col-xs-2">
                            <i class="fa fa-heart blue-text"></i>
                        </div>
                        <div class="col-xs-10">
                            <h4 class="feature-title">Pay for what you want</h4>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                            <div style="height:30px"></div>
                        </div>
                    </div>
                    <!--/First row-->

                    <!--Second row-->
                    <div class="row">
                        <div class="col-xs-2">
                            <i class="fa fa-flash blue-text"></i>
                        </div>
                        <div class="col-xs-10">
                            <h4 class="feature-title">Easy managment</h4>
                            <p class="grey-text">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Reprehenderit maiores nam,
                                aperiam minima assumenda deleniti hic.</p>
                            <div style="height:30px"></div>
                        </div>
                    </div>
                    <!--/Second row-->

                </div>
                <!--/Third column-->
            </div>
            <!--/First row-->

        </section>
        <!--/Section: Features v.4-->
        <hr class="between-sections">

        <!--Section: Testimonials v.4-->
        <section class="section" id="testimonials">

            <!--Section heading-->
            <h1 class="section-heading wow fadeIn" data-wow-delay="0.2s">Testimonials</h1>

            <div class="row">
                <!--Carousel Wrapper-->
                <div id="multi-item-example" class="carousel testimonial-carousel slide carousel-multi-item wow fadeIn"
                     data-ride="carousel">

                    <!--Controls-->
                    <div class="controls-top">
                        <a class="btn-floating btn-small mdb-color" href="#multi-item-example" data-slide="prev"><i
                                    class="fa fa-chevron-left"></i></a>
                        <a class="btn-floating btn-small mdb-color" href="#multi-item-example" data-slide="next"><i
                                    class="fa fa-chevron-right"></i></a>
                    </div>
                    <!--/.Controls-->

                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#multi-item-example" data-slide-to="0" class="active mdb-color"></li>
                        <li data-target="#multi-item-example" data-slide-to="1" class="mdb-color"></li>
                    </ol>
                    <!--/.Indicators-->

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active">
                            <!--First column-->
                            <div class="col-md-4">

                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar">
                                        <img src="assets/organizations/yahoo_logo.png"
                                             class=" img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h5>Yahoo</h5>
                                    <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab.</p>

                                </div>

                            </div>
                            <!--/First column-->

                            <!--Second column-->
                            <div class="col-md-4 hidden-sm-down">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar">
                                        <img src="assets/organizations/NationalGeographic_Logo.png"
                                             class=" img-fluid">
                                    </div>
                                    <br>
                                    <!--Content-->
                                    <h5>National Geographic</h5>
                                    <p><i class="fa fa-quote-left"></i> Ut enim ad minima veniam, quis nostrum
                                        exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid.</p>


                                </div>
                            </div>
                            <!--/Second column-->

                            <!--Third column-->
                            <div class="col-md-4 hidden-sm-down">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar">
                                        <img src="assets/organizations/hyatt_logo.png"
                                             class=" img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h5>Hyatt</h5>
                                    <p><i class="fa fa-quote-left"></i> Quis autem vel eum iure reprehenderit qui in ea
                                        voluptate velit esse quam nihil molestiae consequatur, vel illum.</p>

                                </div>
                            </div>
                            <!--/Third column-->

                        </div>
                        <!--/.First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">
                            <!--First column-->
                            <div class="col-md-4">

                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar">
                                        <img src="assets/organizations/Macmillan_logo.png"
                                             class="img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h5>Macmilla</h5>
                                    <p><i class="fa fa-quote-left"></i> Ut enim ad minima veniam, quis nostrum
                                        exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid.</p>
                                </div>

                            </div>
                            <!--/First column-->

                        </div>
                        <!--/.Second slide-->

                    </div>
                    <!--/.Slides-->

                </div>
                <!--/.Carousel Wrapper-->
            </div>

        </section>
        <!--/Section: Testimonials v.4-->

        <hr class="between-sections">

        <!--Section: Pricing v.5-->
        <section class="section" id="pricing">

            <!--Section heading-->
            <h1 class="section-heading wow fadeIn" data-wow-delay="0.2s">Our pricing plans</h1>
            <!--Section description-->
            <p class="section-description wow fadeIn" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam
                voluptas nostrum quisquam eum porro a pariatur accusamus veniam. Quia, minima?</p>

            <!--First row-->
            <div class="row">

                <!--First column-->
                <div class="col-lg-4 col-md-6 m-b-r wow fadeIn" data-wow-delay="0.3s">
                    <!--Card-->
                    <div class="pricing-card naked-card">

                        <!--Content-->
                        <div class="card-block">
                            <h5>Standard</h5>
                            <!--Price-->
                            <div class="price">
                                <h1>12.50</h1>
                            </div>
                            <!--/.Price-->
                            <ul class="striped">
                                <li>
                                    <p><strong>Starting in</strong> 3 Users/Months</p>
                                </li>
                                <li>
                                    <p><strong>2 TB (2048 GB) </strong> of space</p>
                                </li>
                                <li>
                                    <p><strong>20 days of file recovery</strong></p>
                                </li>
                                <li>
                                    <p><strong>Office 365 integration</strong></p>
                                </li>
                            </ul>
                            <br>
                            <a class="btn btn-blue-grey btn-lg"
                               onclick="mixpanel.track('STANDAR TRAIL');"> Free 30 days trail</a>
                            <a class="btn btn-blue-grey btn-lg"  onclick="mixpanel.track('STANDAR BUY');"> Buy now</a>
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-lg-4 col-md-6 m-b-r wow fadeIn" data-wow-delay="0.2s">
                    <!--Card-->
                    <div class="pricing-card naked-card">

                        <!--Content-->
                        <div class="">
                            <div class="card-block">
                                <h5>Advanced</h5>
                                <!--Price-->
                                <div class="price">
                                    <h1>20</h1>
                                </div>
                                <!--/.Price-->
                                <ul class="striped">
                                    <li>
                                        <p><strong>Everything in Standard</strong></p>
                                    </li>
                                    <li>
                                        <p>As much space as needed</p>
                                    </li>
                                    <li>
                                        <p><strong>Advanced user management tools</strong></p>
                                    </li>
                                    <li>
                                        <p><strong>Single sign</strong>on (SSO) integration</p>
                                    </li>
                                    <li>
                                        <p><strong>Business hours phone support</strong></p>
                                    </li>
                                </ul>
                                <a class="btn btn-blue-grey btn-lg"  onclick="mixpanel.track('ADVANCED TRAIL');"> Free 30 days trail</a>
                                <a class="btn btn-blue-grey btn-lg"  onclick="mixpanel.track('ADVANCED BUY');"> Buy now</a>
                            </div>
                        </div>

                    </div>
                    <!--/.Card-->
                </div>
                <!--/Second column-->

                <!--Third column-->
                <div class="col-lg-4 col-md-6 m-b-r wow fadeIn" data-wow-delay="0.4s">
                    <!--Card-->
                    <div class="pricing-card naked-card">

                        <!--Content-->
                        <div class="card-block">
                            <h5>Enterprise</h5>
                            <!--Price-->
                            <div>
                                <h1>Special prices for parnes</h1>
                            </div>
                            <!--/.Price-->
                            <ul class="striped">
                                <li>
                                    <p><strong>Everything in Advanced</strong></p>
                                </li>
                                <li>
                                    <p><strong>Account Capture</strong></p>
                                </li>
                                <li>
                                    <p><strong>Network control</strong></p>
                                </li>
                                <li>
                                    <p><strong>Enterprise mobility management (EMM) support</strong></p>
                                </li>
                                <li>
                                    <p><strong>Advanced training</strong>for end users and admins</p>
                                </li>
                                <li>
                                    <p><strong>24/7 </strong> phone support</p>
                                </li>
                            </ul>
                            <a class="btn btn-blue-grey btn-lg" href="form.php" onclick="mixpanel.track('ENTERPRISE');">
                            Contact us </a>
                        </div>

                    </div>
                    <!--/.Card-->
                </div>
                <!--/Third column-->

            </div>
            <!--/First row-->

        </section>
        <!--/Section: Pricing v.5-->


    </div>
</main>
<!--/Main layout-->

<script>
    $('#to_form').click(function () {
        mixpanel.track("Redirect to form");
        var email = $('#email_new_user').val();
        if (email == undefined || email == ""){
            toastr.warning("please enter a valid email");
        }
        else {
            window.location.href = "form.php?email="+email;
        }
    });
    $('.nav-link').click(function () {
        var name = ($(this).attr("id")).toString();
        mixpanel.track(name.toUpperCase());
    });


</script>

<?php include 'footer.php' ?>
