<?php

?>

  <header class="header-style1 site-header  mobile-sider-drawer-menu">
                 
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar">
            
                    <div class="container clearfix">
                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href="index.php">
                                    <img src="images/Logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button> 
                        
                            <!-- EXTRA NAV -->
                            <div class="extra-nav">
                                <div class="extra-cell">
                                    <ul class="list-unstyled social-bx d-flex flex-wrap align-content-center">
                                        <li><a href="https://web.facebook.com/bigofootwear.lk"><i class="feather-facebook"></i></a></li>
                                       
                                        <li><a href="https://www.instagram.com/"><i class="feather-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- EXTRA Nav -->
                                                    
                            <!-- MAIN NAVIGATION -->
                            <div class="header-nav navbar-collapse collapse d-flex justify-content-center collapse ">
                                <ul class=" nav navbar-nav ">
                                    <li >
                                      <a href="index.php">Home</a>
                                                                                         
                                    </li>

                                    <li>
                                        <a href="about-us.php">Company</a>
                                        <!-- <ul class="sub-menu">
                                            <li><a href="about-us.php">About Us</a></li>
                                   
                                       
                                       
                                        </ul>                                                 -->
                                    </li>
                                    
                                    <li>
                                        <a href="portfolio.php">Products</a>
                                        <!-- <ul class="sub-menu">
                                      
                                         <li><a href="our-services.php">Services</a></li>               
                                            <li><a >Products</a></li> 
                                           
                                        </ul> -->
                                    </li>

                                    <li>
                                        <a href="blog-grid.php">Blogs</a>
                                        
                                    </li>
                                                                        
                                    <li><a href="contact.php">Contact Us</a></li> 

                                </ul>
                            </div>
                                                                                                      
                            
                    </div>
                </div>
            </div>
        </header>

        <script>

  const currentPage = window.location.pathname.split("/").pop();


  const navLinks = document.querySelectorAll('.header-nav ul.nav li a');

  navLinks.forEach(link => {
     
      const linkPage = link.getAttribute('href');
      
     
      if (linkPage === currentPage) {
        
          link.parentElement.classList.add('active');

          
          const parentMenu = link.closest('.sub-menu');
          if (parentMenu) {
              parentMenu.parentElement.classList.add('active');
          }
      }
  });
</script>

        <?php
        
?>