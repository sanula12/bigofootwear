<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bigo Footwear | Blogs</title>
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
    <?php
    require "./components/loader.php";
    ?>

    <div class="page-wraper">
        <?php require "./components/navbar.php"; ?>

        <?php require "blog-data.php"; ?>

        <div class="page-content">
            <!-- Banner -->
            <div class="full-landing-image sx-bnr-inr overlay-wraper bg-cover" style="background-image:url(components/photos/blogs/school/Bigo\ Footwear\ \(45\).png); background-position: center; background-size: cover; height: 100vh;">
                <div class="overlay-main bg-white opacity-0"></div>
                <div class="container" style="height: 100%;">
                    <div class="sx-bnr-inr-entry" style="height: 100%;">
                        <div class="banner-title-outer">
                            <div class="banner-title-name"> </div> <!-- BREADCRUMB ROW -->
                            <style>
                                @media (max-width: 767px) {
                                    .full-landing-image {
                                        height: 50vh !important;
                                    }
                                }
                            </style>
                            <div style="margin-top: 15vh;" class="d-none d-md-block">
                                <ul class="sx-breadcrumb breadcrumb-style-2">
                                    <li><a href="index.php">Home</a></li>
                                    <li>Blog page</li>
                                </ul>
                            </div> <!-- BREADCRUMB ROW END -->
                        </div>
                    </div>
                </div>
            </div>

            <hr class="section-divider">
            <style>
                .section-divider {
                    border: 0;
                    height: 2px;
                    background: linear-gradient(to right, #ddd, #999, #ddd);
                    margin: 0;
                    margin-top: 10vh;
                }
            </style>
            <!-- Blogs Grid -->
            <div class="section-full p-t100 p-b0 bg-white mobile-page-padding">
                <div class="container">
                    <div class="row">
                        <?php
                        $perPage = 3;
                        $totalBlogs = count($blogs);
                        $totalPages = ceil($totalBlogs / $perPage);

                        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                        if ($page < 1) $page = 1;
                        if ($page > $totalPages) $page = $totalPages;

                        $start = ($page - 1) * $perPage;
                        $blogsToShow = array_slice($blogs, $start, $perPage, true);
                        ?>
                        <div class="row">
                            <?php foreach ($blogsToShow as $id => $blog): ?>
                                <div class="masonry-item col-lg-4 col-md-6 col-sm-12 m-b30">
                                    <div class="sx-latest-post-st-1">

                                        <style>
                                            .masonry-item {
                                                display: flex;
                                            }

                                            .sx-latest-post-st-1 {
                                                display: flex;
                                                flex-direction: column;
                                                height: 100%;
                                            }

                                            .sx-post-media img {
                                                width: 100%;
                                                height: 300px;
                                             
                                                object-fit: cover;
                                               
                                                border-radius: 6px;
                                               
                                            }

                                        </style>
                                        <div class="sx-post-media">
                                            <a href="blog-detail-full.php?id=<?php echo $id; ?>">
                                                <img src="<?php echo $blog['image']; ?>" alt="Blog <?php echo $id; ?>">
                                            </a>
                                        </div>
                                        <div class="sx-post-info p-t30">
                                            <h4 class="post-title">
                                                <a href="blog-detail-full.php?id=<?php echo $id; ?>">
                                                    <?php echo $blog['title']; ?>
                                                </a>
                                            </h4>
                                            <a href="blog-detail-full.php?id=<?php echo $id; ?>" class="site-button icon">
                                                <i class="fa fa-long-arrow-right"></i> Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="sx-pagination-wra text-center">
                            <ul class="sx-pagination">
                                <?php if ($page > 1): ?>
                                    <li><a href="?page=<?php echo $page - 1; ?>"><span class="fa fa-long-arrow-left"></span></a></li>
                                <?php endif; ?>

                                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                    <li class="<?php echo $i == $page ? 'active' : ''; ?>">
                                        <a href="?page=<?php echo $i; ?>"><?php echo str_pad($i, 2, "0", STR_PAD_LEFT); ?></a>
                                    </li>
                                <?php endfor; ?>

                                <?php if ($page < $totalPages): ?>
                                    <li><a href="?page=<?php echo $page + 1; ?>"><span class="fa fa-long-arrow-right"></span></a></li>
                                <?php endif; ?>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>



        </div>
        <?php require "./components/footer.php"; ?>
        <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>
    </div>

    <!-- JAVASCRIPT  FILES ========================================= -->
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