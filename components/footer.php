<?php

?>

<footer class="site-footer footer-dark">

    <div class="sx-f-nl-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h2 class="sx-f-title">
                        Bigo Footwear
                    </h2>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="sx-nl-form">
                        <form id="newsletterForm">
                            <div class="sx-nl-form-inner" style="text-align:end; padding:8px;">
                                <a href="contact.php" class="sx-nl-form-btn">
                                    info@bigofootwear.lk — Get a Quote <i class="flaticon-back-left"></i>
                                </a>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("newsletterForm").addEventListener("submit", function(e) {
            e.preventDefault();
            let email = document.getElementById("emailInput").value.trim();
            let messageEl = document.getElementById("message");
            let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (emailPattern.test(email)) {
                messageEl.style.color = "green";
                messageEl.textContent = "✅ Thanks for subscribing! You will receive our latest news.";
            } else {
                messageEl.style.color = "red";
                messageEl.textContent = "❌ Please enter a valid email address.";
            }
            setTimeout(() => {
                messageEl.textContent = '';
            }, 5000);
        });
    </script>

    <!-- FOOTER BLOCKES START -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <!-- ABOUT COMPANY -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="widget widget_about">
                        <div class="logo-footer clearfix p-b15">
                            <a href="index.php" class="sx-text-primary"><img src='images/Logo2.png' alt="image"></a>
                        </div>
                        <p>From the heart of Sri Lanka’s rubber fields, we create slippers that honor local craftsmanship, protect the environment, and bring lasting comfort to every step.</p>
                        <div class="widget_about-call-section">
                            <div class="sx-f-call-icon"><i class="flaticon-telephone"></i></div>
                            <div class="sx-f-call-section">
                                <span>Contact us 24/7</span>
                                <a href="tel:+94704733474">+94 70 473 3474</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- EXPLORE LINKS -->
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-6 col">

                    <div class="widget widget_services">
                        <h4 class="sx-f-title">Explore Links</h4>
                        <ul>
                            <li><a href="about-us.php">About Us</a></li>

                            <li><a href="portfolio.php">Our Products</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="blog-grid.php">Latest From Bigo</a></li>
                        </ul>
                    </div>
                </div>

                <!-- USEFUL LINK -->
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-6 col">

                    <div class="widget widget_services">
                        <h4 class="sx-f-title">Useful Links</h4>
                        <ul>

                            <li><a href="about-us.php">Discover</a></li>
                            <li><a href="products.php">Products</a></li>

                            <!-- <li><a href="portfolio-detail.php">Case Studies V2</a></li> -->
                        </ul>
                    </div>
                </div>

                <!-- SOLUTIONS -->
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-12 col footer-col-3">
                    <div class="widget widget_info">
                        <h4 class="sx-f-title">Contact Us</h4>
                        <ul>
                            <li>
                                <div class="widget-info-icon">
                                    <i class="flaticon-phone"></i>
                                </div>
                                <div class="widget-info-detail">
                                    <a href="tel:+94704733474">+94 70 473 3474</a>
                                </div>
                            </li>
                            <li>
                                <div class="widget-info-icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="widget-info-detail">
                        
                                    <a href="mailto:info@bigofootwear.lk">info@bigofootwear.lk</a>
                                </div>
                            </li>

                            <li>
                                <div class="widget-info-icon">
                                    <i class="flaticon-maps-and-flags"></i>
                                </div>
                                <div class="widget-info-detail">
                                    <p></p>
                                    <a href="https://maps.app.goo.gl/CPRYDu2fnQAJVdkr9">No 329 B / Palpolgoda, Meemana, Pokunuwita, Horana, Sri Lanka</a>
                                    
                                </div>


                            </li>
                        </ul>


                    </div>
                </div>

                <!-- CONTACT US -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget_insta-gallery">
                        <h4 class="sx-f-title">Facebook</h4>
                        <ul>
                            <li>
                                <div class="sx-f-insta">
                                    <a href="javascript:;">
                                        <img src="components/photos/Bigo Footwear (31).png" alt="Image">
                                        <i class="feather-facebook"></i>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="sx-f-insta">
                                    <a href="javascript:;">
                                        <img src="components/photos/Bigo Footwear (37).png" alt="Image">
                                        <i class="feather-facebook"></i>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="sx-f-insta">
                                    <a href="javascript:;">
                                        <img src="components/photos/Bigo Footwear (22).png" alt="Image">
                                        <i class="feather-facebook"></i>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="sx-f-insta">
                                    <a href="javascript:;">
                                        <img src="components/photos/Bigo Footwear (27).png" alt="Image">
                                        <i class="feather-facebook"></i>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="sx-f-insta">
                                    <a href="javascript:;">
                                        <img src="components/photos/Bigo Footwear (38).png" alt="Image">
                                        <i class="feather-facebook"></i>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="sx-f-insta">
                                    <a href="javascript:;">
                                        <img src="components/photos/Bigo Footwear (15).png" alt="Image">
                                        <i class="feather-facebook"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <style>
                        .mtcl {
                            margin-top: 44%;
                        }

                        @media (max-width: 767px) {
                            .mtcl {
                                margin-top: 10%;
                            }
                        }
                    </style>
                    <div class="widget_about-call-section mtcl">
                        <div class="sx-f-call-icon"><i class="flaticon-email-1"></i></div>
                        <div class="sx-f-call-section">
                            <span>Contact us 24/7</span>
                            <a href="mailto:info@bigofootwear.lk">info@bigofootwear.lk</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </div>

    <div class="sx-f-bottom-section">
        <div class="sx-f-social">
            <ul>
                <li>
                    <a href="https://www.facebook.com/">
                        <i class="flaticon-facebook"></i>
                    </a>
                </li>

                <li>
                    <a href="https://www.instagram.com/">
                        <i class="flaticon-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sx-f-copy">
            © <span id="year"></span> by <a href="http://bigofootwear.lk" target="_blank" rel="noopener noreferrer"><strong>Bigo Footwear</strong></a>. All rights reserved.
        </div>

        <script>
            document.getElementById("year").textContent = new Date().getFullYear();
        </script>
        <div class="sx-f-copy">
            Developed by <a href="#" target="_blank" style="color:#07d988; text-decoration:none;">AITS</a>
        </div>
    </div>
    <!-- FOOTER COPYRIGHT -->
</footer>


<?php
?>