<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="description" content="">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"> -->

    <!-- PAGE TITLE HERE -->
    <title>Bigo Footwear | Products</title>

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
        .product-card {
            border: 1px solid #eee;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            margin-bottom: 30px;
            transition: 0.3s;
            background: #fff;
        }

        .product-card:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            max-width: 100%;
            height: 220px;
            object-fit: contain;
            margin-bottom: 10px;
        }

        .color-selector {
            display: flex;
            justify-content: center;
            margin: 10px 0;
        }

        .color-option {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
            border: 2px solid #ccc;
        }

        .size-list {
            margin: 10px 0;
        }

        .size-list span {
            display: inline-block;
            background: #f3f3f3;
            border: 1px solid #ddd;
            padding: 5px 10px;
            margin: 3px;
            border-radius: 4px;
            font-size: 14px;
        }

        .price {
            font-size: 18px;
            font-weight: bold;
            color: #222;
        }

        .category-title {
            margin: 50px 0 30px;
            text-align: center;
        }


        .full-landing-image {
            height: 60vh;
            /* default */
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            align-items: center;
            /* vertical center */
            justify-content: center;
            /* horizontal center */
            text-align: center;
        }

        /* Overlay covers the background only */
        .full-landing-image .overlay-main {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        /* Banner text sits above overlay */
        .full-landing-image .banner-content {
            position: relative;
            z-index: 2;
        }

        /* Mobile: shorter banner */
        @media (max-width: 768px) {
            .full-landing-image {
                height: 40vh;
            }
        }

        .wave-separator {
            position: relative;
            width: 100%;
            line-height: 0;
            /* removes extra spacing */
            overflow: hidden;
            /* hides anything overflowing */
        }

        .wave-separator svg {
            display: block;
            width: 100%;
            height: 100px;
            /* adjust height if you want a bigger/smaller wave */
        }
    </style>
</head>

<body>
    <?php require "./components/loader.php"; ?>
    <div class="page-wraper">
        <?php require "./components/navbar.php"; ?>

        <!-- Banner -->
        <div class="full-landing-image sx-bnr-inr overlay-wraper"
            style="background-image:url('components/photos/products/banner.jpg');">
            <div class="overlay-main bg-black opacity-05"></div>
            <div class="banner-content">
                <h2 class="sx-title text-white">Our Slippers Collection</h2>
                <p class="text-white">Men | Women | Kids</p>
            </div>
        </div>


        <!-- Wave Separator -->
        <div class="wave-separator">
            <svg viewBox="0 0 1440 150" preserveAspectRatio="none">
                <path d="M0,0 L1440,0 L1440,150 Q720,0 0,150 Z" fill="#2c3e50"></path>
            </svg>
        </div>




        <!-- Product Sections -->
        <div class="section-full p-t100 p-b70 sx-bg-light mobile-page-padding">
            <div class="container">

                <?php
                require "products.php";

                // -------------------
                // FUNCTION TO RENDER CATEGORY
                // -------------------
                function renderCategory($products, $category, $perPage = 3)
                {
                    $filtered = array_values(array_filter($products, function ($p) use ($category) {
                        return $p['category'] == $category;
                    }));
                    $total = count($filtered);
                    $totalPages = ceil($total / $perPage);
                    $pageVar = $category . "_page";
                    $page = isset($_GET[$pageVar]) ? (int)$_GET[$pageVar] : 1;
                    if ($page < 1) $page = 1;
                    if ($page > $totalPages) $page = $totalPages;
                    $start = ($page - 1) * $perPage;
                    $paginated = array_slice($filtered, $start, $perPage);

                    echo "<h2 class='category-title'>" . ucfirst($category) . " Slippers</h2>";
                    echo "<div class='row'>";
                    foreach ($paginated as $p) {
                        echo "<div class='col-md-4'>
                        <div class='product-card'>
                            <img id='{$p['id']}-img' src='{$p['image']}' alt='{$p['title']}'>
                            <h5>{$p['title']}</h5>
                            <div class='color-selector'>";
                        foreach ($p['colors'] as $c) {
                            echo "<div class='color-option' style='background:{$c[0]}; ' onclick=\"changeImage('{$p['id']}-img','{$c[1]}')\"></div>";
                        }
                        echo "</div><div class='size-list'>";
                        foreach ($p['sizes'] as $s) {
                            echo "<span>$s</span>";
                        }
                        echo "</div><p class='price'>{$p['price']}</p>
                        </div>
                    </div>";
                    }
                    echo "</div>";

                    // Pagination
                    if ($totalPages > 1) {
                        echo "<div class='text-center'><ul class='pagination justify-content-center'>";
                        for ($i = 1; $i <= $totalPages; $i++) {
                            $active = ($i == $page) ? "active" : "";
                            $query = $_GET;
                            $query[$pageVar] = $i;
                            $link = '?' . http_build_query($query);
                            echo "<li class='page-item $active'><a class='page-link' href='$link'>$i</a></li>";
                        }
                        echo "</ul></div>";
                    }
                }

                // -------------------
                // RENDER EACH CATEGORY
                // -------------------
                renderCategory($products, "men's");
                renderCategory($products, "women's");
                renderCategory($products, "kids");
                renderCategory($products, "unisex");
                ?>

            </div>
        </div>

        <?php require "./components/footer.php"; ?>
    </div>

    <!-- JS -->
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
    <script>
        function changeImage(imgId, src) {
            document.getElementById(imgId).src = src;
        }
    </script>
</body>

</html>