<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="description" content="">

    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <title>Bigo Footwear | About Us</title>
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css"><!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css"><!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" href="css/owl.carousel.min.css"><!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" href="css/magnific-popup.min.css"><!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" href="css/loader.min.css"><!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" href="css/flaticon.min.css"><!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" href="css/animate.css"><!-- WOW ANIMATE STYLE SHEET -->
    <link rel="stylesheet" href="css/feather.css"><!-- Feather STYLE SHEET -->
    <link rel="stylesheet" href="css/lc_lightbox.css"><!-- IMAGE POPUP -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css"><!-- SWIPER SLIDER CSS -->
    <link rel="stylesheet" href="css/style.css"><!-- MAIN STYLE SHEET -->
</head>

<body>
    <!-- LOADING AREA START ===== -->
    <?php
    require "./components/loader.php";
    ?>
    <!-- LOADING AREA  END ====== -->

    <div class="page-wraper">

        <!-- HEADER START -->
        <?php
        require "./components/navbar.php";
        ?>
        <!-- HEADER END -->

        <!-- CONTENT START -->
        <div class="page-content">
            <!-- INNER PAGE BANNER -->
            <div class="full-landing-image sx-bnr-inr overlay-wraper  bg-top-center" style="background-image:url(components/photos/about/2.png);">
                <div class="overlay-main bg-white opacity-0"></div>

                <div class="container">
                    <div class="sx-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <span class="sx-bnr-sm-title">we are Dedicated</span>
                                <h2 class="sx-title">About Us.</h2>
                            </div>
                            <!-- BREADCRUMB ROW -->
                            <div>
                                <ul class="sx-breadcrumb breadcrumb-style-2">
                                    <li><a href="index.php">Home</a></li>
                                    <li>About Us</li>
                                </ul>
                            </div>
                            <!-- BREADCRUMB ROW END -->

                        </div>

                    </div>
                </div>
                <div class="sx-bnr-outline-text">
                    <h1>Solution</h1>
                </div>

            </div>
            <!-- INNER PAGE BANNER END -->

            <!-- ABOUT COMPANY START -->
            <div class="section-full p-t110 p-b20 sx-bg-white sx-about-bx1-outer">
                <div class="container">
                    <div class="section-content">
                        <div class="sx-about-bx1-content-wrap">
                            <div class="row">
                                <div class="col-12">
                                    <div class="sx-about-bx1-content">
                                        <h6>About us</h6>
                                        <h2 class="sx-title">From Sri Lankan Rubber to Everyday Comfort</h2>
                                        <span class="sx-title-2">Building a trusted name in slipper manufacturing since 2018</span>
                                        <p style="font-size: large;">
                                            Founded in 2018 under the guidance of <strong>Mr. Nishan Chamikara</strong>, Bigo Footwear began with a simple vision:
                                            to create durable and stylish slippers that reflect Sri Lankan innovation and craftsmanship.
                                            Our factory is based in <strong>Horana</strong>, right within Sri Lanka’s renowned rubber-growing region,
                                            which allows us to work closely with local growers and source high-quality natural rubber directly from the area.
                                        </p>

                                        <p style="font-size: large;">
                                            Every stage of production is carefully managed in-house, from preparing raw rubber sheets to shaping, finishing,
                                            and assembling slippers ready for the market. We proudly use <strong>100% Sri Lankan rubber</strong> in our products,
                                            supported by recyclable and eco-friendly materials wherever possible. Our process avoids harmful plastics,
                                            ensuring that our slippers are both sustainable and safe for everyday use.
                                        </p>

                                        <p style="font-size: large;">
                                            In just a few years, Bigo has earned recognition across Sri Lanka for quality and comfort.
                                            By continuously adopting modern technology and responding to customer feedback,
                                            we have quickly grown into one of the leading footwear manufacturers in the country.
                                            Today, our products reach people throughout the island via a strong and expanding distribution network.
                                        </p>

                                        <p style="font-size: large;">
                                            Bigo Footwear is more than just a brand — it is a <strong>100% Sri Lankan enterprise</strong>
                                            that transforms locally sourced rubber into slippers designed for Sri Lankan lifestyles.
                                            With a focus on durability, comfort, and design, we are proud to support local industry while
                                            setting new standards for homegrown footwear.
                                        </p>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT COMPANY END -->

            <!-- ABOUT COMPANY START -->
            <div class="section-full  p-t110 p-b80 sx-bg-white sx-about-bx1-outer">
                <div class="container">
                    <div class="section-content">
                        <div class="sx-about-bx1-content-wrap">
                            <div class="row">
                                <style>
                                  /* Ensure columns align nicely */
.sx-about-bx1-content-wrap .row {
    display: flex;
    align-items: center; /* vertical alignment */
    flex-wrap: wrap;
}

/* Fix play button positioning */
.sx-ab-video {
    position: absolute;
    bottom: 20px;
    right: 20px;  /* changed from left to right */
    transform: none;
    z-index: 2;   /* ensure above other elements */
}

/* Image container relative for positioning */
.sx-ab-img-section-1-wrap {
    position: relative;
}

/* Adjust spacing for text side */
.sx-about-bx1-content {
    padding-left: 30px;
    padding-right: 30px;
}

/* Style for dotted background image */
.sx-dot-bx {
    position: absolute;
    top: -40px; /* move upward globally */
    left: 0;
    z-index: 1;
}

@media (max-width: 768px) {
    /* Move video button to bottom-right on small screens */
    .sx-ab-video {
      
        left: 260px;  /* override any left positioning */
        top: 260px;
        transform: none;
    }

    /* Push dotted design further up so it doesn't overlap face */
    .sx-dot-bx {
        display: none;
    }
}


                                    
                                </style>
                                <div class="col-lg-6 col-md-12">
                                    <div class="sx-about-bx1-media">
                                        <div class="sx-dot-bx"><img src="images/about/dotted-pic.png" alt="image"></div>
                                        <div class="sx-ab-img-outer">
                                            <div class="sx-ab-img-section-1-wrap">
                                                <div class="sx-ab-video">
                                                    <a href="components/videos/Bigo_Intro.mp4" class="mfp-video circle">
                                                        <i class="flaticon-play"></i>
                                                    </a>
                                                </div>

                                            </div>

                                            <div class="sx-ab-img-section-2">
                                                <img src="images/about/profiles2.jpg" alt="image">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="sx-about-bx1-content">
                                        <h2 class="sx-title">Vision Behind Bigo Footwear</h2>

                                        <!-- <span class="sx-title-2">Building a trusted name in slipper manufacturing since 2018</span> -->

                                        <p style="font-size: large;">
                                            Mr. Nishan Chamikara is the founder of Bigo Footwear, established in 2018. Under his guidance, the company has grown into a leading slipper manufacturing and distribution brand, recognized for its commitment to quality and customer satisfaction.
                                            Through his visionary leadership, Bigo Footwear has expanded its product lines, strengthened its market presence, and built a reputation for blending comfort, durability, and style.
                                            Mr. Chamikara strongly believes in innovation and continuous improvement, ensuring that every product reflects the company’s core values of excellence and trust.
                                            Beyond business, he is equally dedicated to empowering his team and supporting community initiatives, making Bigo Footwear not only a respected brand in the market but also a socially responsible organization.
                                        </p>

                                        <div class="progress">
                                            <div class="progress-bar sx-bg-primary" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="100" aria-valuemax="100"><span>100% Trusted Quality</span></div>
                                        </div>

                                        <div class="row sx-about-bx1-column">
                                            <div class="col-lg-6 col-md-6">
                                                <p>Delivering high-quality slippers with lasting comfort and style.</p>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <p>Expanding distribution to bring Bigo Footwear closer to every customer.</p>
                                            </div>
                                        </div>

                                        <div class="row sx-about-icon-bx1-column">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="sx-icon-bx-2">
                                                    <div class="sx-media">
                                                        <img width="35" height="35" src="https://img.icons8.com/ios-filled/50/FA5252/light-automation.png" alt="light-automation" />
                                                    </div>
                                                    <div class="sx-icon-bx-info">
                                                        <span class="sx-icon-bx-title">Innovation</span>
                                                        <span class="sx-icon-bx-title-info">Modern Designs</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="sx-icon-bx-2">
                                                    <div class="sx-media">
                                                        <img width="35" height="35" src="https://img.icons8.com/ios-filled/50/FA5252/positive-dynamic.png" alt="positive-dynamic" />
                                                    </div>
                                                    <div class="sx-icon-bx-info">
                                                        <span class="sx-icon-bx-title">Growth</span>
                                                        <span class="sx-icon-bx-title-info">Expanding Markets</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT COMPANY END -->


            <!-- OUR CLIENTS -->
            <!-- <div class="mb-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12"> -->
            <!-- <img src="images/banner.png" class="img-fluid mx-auto d-block" alt="Banner"> -->
            <!-- <div style="background-color: black; height: 200px;">
                                <h1 class="justify-content-center text-center text-white">Vision Of Bigo</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- OUR CLIENTS END -->

        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
        <?php
        require "./components/footer.php";
        ?>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
        <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

    </div>



    <script src="js/jquery-3.6.1.min.js.js"></script><!-- JQUERY.MIN JS -->
    <script src="js/popper.min.js"></script><!-- POPPER.MIN JS -->
    <script src="js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
    <script src="js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
    <script src="js/counterup.min.js"></script><!-- COUNTERUP JS -->
    <script src="js/waypoints-sticky.min.js"></script><!-- sticky header JS -->
    <script src="js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
    <script src="js/imagesloaded.pkgd.min.js"></script><!-- MASONRY  -->
    <script src="js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
    <script src="js/theia-sticky-sidebar.js"></script><!--sticky content-->
    <script src="js/wow.js"></script><!-- WOW JS -->
    <script src="js/lc_lightbox.lite.js"></script><!-- IMAGE POPUP -->
    <script src="js/swiper-bundle.min.js"></script><!-- Swiper js -->
    <script src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->

</body>


</html>