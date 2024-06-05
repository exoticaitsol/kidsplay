 <!-- footer section start here -->
            <section class="footer">
                <div class="container">
                    <div class="main-footer">
                        <div class="first-footer-content">
                            <div class="footer-logo">
                                <a href="/">
                                <?php dynamic_sidebar( 'custom-logo' ); ?>
                                </a>
                            </div>
                            <div class="footer-logo-content">
                              <?php dynamic_sidebar( 'custom-logo-text' ); ?>
                            </div>
                        </div>
                        <div class="first-footer-content">
                            <div class="footer-heading">
                                <h4>Quick Links</h4>
                            </div>
                            <div class="footer-content">
                             
                                <?php
                                            		 wp_nav_menu(array(
                                            			'menu'              => "header menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                                            			'container'         => "ul"
                                            		) );
                                        		 ?>
                            </div>
                        </div>
                        <div class="first-footer-content">
                            <div class="footer-heading">
                                <h4>Products</h4>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Clothes</a></li>
                                    <li><a href="#">Toy</a></li>
                                    <li><a href="#">Gifts</a></li>
                                    <li><a href="#">Footwear</a></li>
                                    <li><a href="#">Games</a></li>
                                    <li><a href="#">More</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="first-footer-content">
                            <div class="footer-heading">
                                <h4>Contact Us</h4>
                            </div>
                            <?php dynamic_sidebar( 'custom-contact-links' ); ?>
                           
                        </div>

                    </div>

                </div>
                <div class="copy-right">
                    <?php 
                    $year = date("Y");  
  
                    // Display the year 
                    // echo $year;  
                    ?>
                    <p>Copyright © <?php  echo $year; ?>. All Rights Reserved</p>
                </div>
            </section>
            <!-- footer section end here -->
            
              <script
                src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

            <script
                src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
            <script src="assest/js/main.js"></script>

            
            <?php wp_footer();?>
            
            </body>
            </html>
