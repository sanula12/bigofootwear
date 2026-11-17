<?php
require "blog-data.php";

$id = $_GET['id'] ?? 1;
$blog = $blogs[$id] ?? reset($blogs);
?>
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
    <title><?php echo $blog['title']; ?> | Bigo Footwear</title>
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

    <style>
        /* Article look */
        .blog-detail img {
            max-width: 100%;
            border-radius: 6px;
        }

        .blog-detail figure {
            margin: 0 0 1em;
        }

        .blog-detail figure img {
            width: 100%;
            height: auto;
        }

        .blog-detail figure.float-left {
            float: left;
            margin: 0 20px 20px 0;
            max-width: 40%;
        }

        .blog-detail figure.float-right {
            float: right;
            margin: 0 0 20px 20px;
            max-width: 40%;
        }

        .blog-detail figure.full-width {
            max-width: 100%;
            margin: 20px auto;
            float: none;
            text-align: center;
        }

        .blog-detail figcaption {
            font-size: 13px;
            font-style: italic;
            color: #666;
            text-align: center;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <?php require "./components/loader.php"; ?>

    <div class="page-wraper">
        <?php require "./components/navbar.php"; ?>

        <!-- Hero Banner -->
        <div class="full-landing-image sx-bnr-inr overlay-wraper bg-top-center"
            style="background-image:url('<?php echo $blog['image']; ?>'); background-size:cover; background-position:center; height:80vh;">
            <div class="overlay-main bg-black opacity-05"></div>
            <div class="container">
                <div class="sx-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <h2 class="sx-title text-white"><?php echo $blog['title']; ?></h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Content -->
        <div class="section-full p-t100 p-b70 mobile-page-padding">
            <div class="container">
                <div class="blog-single-space-wrap max-w800 m-lr-auto">
                    <div class="single-blog-post blog-detail">

                        <?php
                        // Split content into paragraphs
                        $paragraphs = preg_split('/<\/p>/', $blog['content'], -1, PREG_SPLIT_NO_EMPTY);
                        $images = $blog['extra_images'] ?? [];

                        // Index images by "after" value
                        $imagesByPara = [];
                        foreach ($images as $img) {
                            $imagesByPara[$img['after']][] = $img;
                        }

                        foreach ($paragraphs as $i => $para): ?>
                            <p style="font-size: large;"><?php echo trim(strip_tags($para)); ?></p>

                            <?php if (!empty($imagesByPara[$i])): ?>
                                <?php foreach ($imagesByPara[$i] as $img):
                                    $alignClass = $img['align'] == 'left'
                                        ? 'float-left'
                                        : ($img['align'] == 'right' ? 'float-right' : 'full-width');
                                ?>
                                    <figure class="<?php echo $alignClass; ?>">
                                        <img src="<?php echo $img['src']; ?>" alt="">
                                        <?php if (!empty($img['caption'])): ?>
                                            <figcaption><?php echo $img['caption']; ?></figcaption>
                                        <?php endif; ?>
                                    </figure>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>

                        <!-- Final clear -->
                        <div style="clear: both;"></div>

                    </div>
                </div>
            </div>
        </div>

        <?php require "./components/footer.php"; ?>
        <button class="scroltop"><span class="fa fa-angle-up relative"></span></button>
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