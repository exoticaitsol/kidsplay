<?php

 /* Template name: Front Page  */

get_header();

$video = get_field("who_we_are"); 
$newproduct = get_field("new_product");
$corporate = get_field("corporate_bay"); 
$kid = get_field("kid_section"); 
$category = get_field("category_section");
$happy = get_field("happy_parents");




$loop = new WP_Query( array( 'post_type' => 'News', 'posts_per_page' => 3 ) );

?>



 <!-- banner section start -->
        <section class="banner">
            <div class="container">
                <div class="banner-slider-col">
                
                <?php 
        		while ( $loop->have_posts() ) : $loop->the_post();	    
                ?>
                
                    <div class="main-banner">
                        <div class="banner-left-content">
                            <div class="heading-banner">
                                <h2><?php echo the_title(); ?></h2>
                                <p><?php echo the_content(); ?></p>
                            </div>
                            <div class="banner-btn">
                                <div class="our-story-btn">
                                    <a href="/our-story/">Our Story</a>
                                </div>
                                <div class="our-contect-btn">
                                    <a href="/contact-us/">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="banner-right-images">
                            <div class="banner-img-children">
                            	<?php echo get_the_post_thumbnail( get_the_ID(), 'large' ); ?>
                            </div>
                        </div>
                    </div>
               
               <?php endwhile;  ?>     
               

                </div>
            </div>
        </section>
        <!-- banner section end -->
        
        
        
 
        
        <!-- we are section start -->
      
        <section class="we-are">
            <div class="container">
                <div class="how-we-are">
                    <div class="how-we-are-left">
                        <div class="how-lrft-content">
                       
                            <span><?php echo $video['story']; ?></span>
                            <h3><?php echo $video['who_we_txt']; ?></h3>
                        </div>
                        <div class="how-we-are-img">

                            <img src=" <?php echo $video['we_img']; ?>" alt>

                        </div>
                    </div>
                    <div class="how-we-sre-right">
                        <div class="how-we-are-content">
                            <p><?php echo $video['right_we_text']; ?></p>
                        </div>
                        <div class="how-btn">
                            <a href="<?php echo $video['right_we_btn']['url']; ?>"><?php echo $video['right_we_btn']['title']; ?></a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- we are section start end -->
        
        
        
        <!-- product section start -->
        <section class="product-main">
            <div class="container">
                <div class="product-heading-col">
                    <h3><?php echo $newproduct['main_product_head']; ?></h3>
                </div>
                <div class="main-product">
                    <div class="product-col-full">
                        <div class="first-product-baby">
                            <div class="product-img">
                                    <img src=" <?php echo $newproduct['product_image_1']; ?>" alt>
                            </div>
                            <div class="first-product-bottom">
                                <div class="product-heading">
                                    <h3><?php echo $newproduct['product_image_head_1']; ?></h3>
                                </div>
                                <div class="product-btn">
                                    <a href="<?php echo $newproduct['product_image_btn_1']['url']; ?>"><?php echo $newproduct['product_image_btn_1']['title']; ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="first-product-baby">
                            <div class="product-img">
                                    <img src=" <?php echo $newproduct['product_image_2']; ?>" alt>
                            </div>
                            <div class="first-product-bottom">
                                <div class="product-heading">
                                    <h3><?php echo $newproduct['product_image_head_2']; ?></h3>
                                </div>
                                <div class="product-btn">
                                    <a href="<?php echo $newproduct['product_image_btn_2']['url']; ?>"><?php echo $newproduct['product_image_btn_2']['title']; ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="first-product-baby">
                            <div class="product-img">
                                    <img src=" <?php echo $newproduct['product_image_3']; ?>" alt>
                            </div>
                            <div class="first-product-bottom">
                                <div class="product-heading">
                                    <h3><?php echo $newproduct['product_image_head_3']; ?></h3>
                                </div>
                                <div class="product-btn">
                                    <a href="<?php echo $newproduct['product_image_btn_3']['url']; ?>"><?php echo $newproduct['product_image_btn_3']['title']; ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="first-product-baby">
                            <div class="product-img">
                                    <img src=" <?php echo $newproduct['product_image_4']; ?>" alt>
                            </div>
                            <div class="first-product-bottom">
                                <div class="product-heading">
                                    <h3><?php echo $newproduct['product_image_head_4']; ?></h3>
                                </div>
                                <div class="product-btn">
                                    <a href="<?php echo $newproduct['product_image_btn_4']['url']; ?>"><?php echo $newproduct['product_image_btn_4']['title']; ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="first-product-baby">
                            <div class="product-img">
                                    <img src=" <?php echo $newproduct['product_image_5']; ?>" alt>
                            </div>
                            <div class="first-product-bottom">
                                <div class="product-heading">
                                    <h3><?php echo $newproduct['product_image_head_5']; ?></h3>
                                </div>
                                <div class="product-btn">
                                    <a href="<?php echo $newproduct['product_image_btn_5']['url']; ?>"><?php echo $newproduct['product_image_btn_5']['title']; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pordocut-arrow">
                        <div class="left-product-arrow">
                            <img src="https://kidsplay.exoticaitsolutions.com/wp-content/uploads/2024/05/left-arrow.png" alt>
                        </div>
                        <div class="right-product-arrow">
                            <img src="https://kidsplay.exoticaitsolutions.com/wp-content/uploads/2024/05/right-arrow.png" alt>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product section end -->


        <!-- corporte sectio start -->
        <div class="corporate-bay">
            <div class="container">
                <div class="corporate-main">
                    <div class="first-coporate-col">
                        <div class="coporate-left-main">
                             <img src=" <?php echo $corporate['corporate_img1']; ?>" alt>
                        </div>
                        <div class="coporate-left-content">
                            <p><?php echo $corporate['corporate_text']; ?></p>
                        </div>
                    </div>
                    <div class="center-coporate-col">
                        <div class="center-coporate-heading">
                            <span><?php echo $corporate['corporate_text_span']; ?></span>
                            <h3><?php echo $corporate['corporate_bay_txt']; ?></h3>
                        </div>
                        <div class="center-coporate-img">
                        <img src=" <?php echo $corporate['corporate_img2']; ?>" alt>
                        </div>
                    </div>
                    <div class="right-coporate-col">
                        <div class="right-coporate-img">
                            <img src=" <?php echo $corporate['corporate_img3']; ?>" alt>
                        </div>
                        <div class="right-coporate-heading">
                            <h3><?php echo $corporate['corporate_head']; ?></h3>
                            <p><?php echo $corporate['corporate_para']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- corporte sectio end -->



        <!-- watch section start here -->
        <section class="watch-main">
            <div class="container">
                <div class="watch-top-heading">
                    <div class="watch-left-heading">
                        <span><?php echo $kid['accordion_left']; ?></span>
                    </div>
                    <div class="watch-right-heading">
                        <h3><?php echo $kid['kid_heading']; ?></h3>
                    </div>
                    <div class="watch-side-arrow">
                        <div class="left-watch-arrow">
                            <img src="https://kidsplay.exoticaitsolutions.com/wp-content/uploads/2024/05/left-arrow.png" alt>
                        </div>
                        <div class="right-watch-arrow">
                            <img src="https://kidsplay.exoticaitsolutions.com/wp-content/uploads/2024/05/right-arrow.png" alt>
                        </div>
                    </div>
                </div>
                <div class="watch-col">
                    <div class="watch-slider-col">

                        <div class="watch-content">
                            <div class="watch-img">
                                <img src=" <?php echo $kid['kid_first_image']; ?>" alt>
                            </div>
                            <div class="watch-content--bottom">
                                <span><?php echo $kid['kid_first_age']; ?></span>
                            </div>
                        </div>
                        <div class="watch-content">
                            <div class="watch-img">
                                <img src=" <?php echo $kid['kid_second_image']; ?>" alt>
                            </div>
                            <div class="watch-content--bottom">
                                <span><?php echo $kid['kid_second_age']; ?></span>
                            </div>
                        </div>
                        <div class="watch-content">
                            <div class="watch-img">
                                <img src=" <?php echo $kid['kid_third_image']; ?>" alt>
                            </div>
                            <div class="watch-content--bottom">
                                <span><?php echo $kid['kid_third_age']; ?></span>
                            </div>
                        </div>

                        <div class="watch-content">
                            <div class="watch-img">
                                <img src=" <?php echo $kid['kid_fourth_image']; ?>" alt>
                            </div>
                            <div class="watch-content--bottom">
                                <span><?php echo $kid['kid_fourth_age']; ?></span>
                            </div>
                        </div>
                        <div class="watch-content">
                            <div class="watch-img">
                                <img src=" <?php echo $kid['kid_fifth_image']; ?>" alt>
                            </div>
                            <div class="watch-content--bottom">
                                <span><?php echo $kid['kid_fifth_age']; ?></span>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
            <!-- watch section end here -->
            <!-- watch-categories section -->
            <section class="watch-categories">
                <div class="container">
                    <div class="categories-heading">
                        <h3><?php echo $category['category_main__heading']; ?></h3>
                    </div>
                    <div class="main-categories">
                        <div class="top-main-watch-col">
                            <div class="first-categories">
                                <div class="categories-img">
                                    <img src=" <?php echo $category['category_img_1']; ?>" alt>
                                </div>
                                <div class="categories-btn">
                                  <a href="<?php echo $category['category_head_1']['url']; ?>"><?php echo $category['category_head_1']['title']; ?></a>
                                </div>
                            </div>
                            <div class="first-categories">
                                <div class="categories-img">
                                    <img src=" <?php echo $category['category_img_2']; ?>" alt>
                                </div>
                                <div class="categories-btn">
                                  <a href="<?php echo $category['category_head_2']['url']; ?>"><?php echo $category['category_head_2']['title']; ?></a>
                                </div>
                            </div>
                            <div class="first-categories">
                                <div class="categories-img">
                                    <img src=" <?php echo $category['category_img_3']; ?>" alt>
                                </div>
                                <div class="categories-btn">
                                  <a href="<?php echo $category['category_head_3']['url']; ?>"><?php echo $category['category_head_3']['title']; ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-main-watch-col">
                            <div class="first-categories">
                                <div class="categories-img">
                                    <img src=" <?php echo $category['category_img_4']; ?>" alt>
                                </div>
                                <div class="categories-btn">
                                   <a href="<?php echo $category['category_head_4']['url']; ?>"><?php echo $category['category_head_4']['title']; ?></a>
                                </div>
                            </div>
                            <div class="first-categories">
                                <div class="categories-img">
                                     <img src=" <?php echo $category['category_img_5']; ?>" alt>
                                </div>
                                <div class="categories-btn">
                                   <a href="<?php echo $category['category_head_5']['url']; ?>"><?php echo $category['category_head_5']['title']; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- watch-categories section end -->
            <!-- section contect us form -->
            <section class="form-col">
                <div class="container">
                    <div class="form-main-col">
                        <div class="form-heading">
                            <span>Contact Us</span>
                            <h3>Get In Touch</h3>
                        </div>
                        <div class="form-col-main">
                          <?php echo apply_shortcodes( '[contact-form-7 id="216f303" title="Contact form 1"]' ); ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section contect us form -->


            <!-- happy parents -->
            <section class="happy-parents">
                <div class="container">
                    <div class="parents-main">
                        <div class="first-parents-col">
                            <div class="parents-heading">
                                <span><?php echo $happy['happy_testimonial']; ?></span>
                                <h3><?php echo $happy['happy_para']; ?></h3>
                                <p><?php echo $happy['happy_para1']; ?></p> 
                            </div>
                        </div>
                        <div class="first-parents-col">
                            <div class="johne-parents-heading">
                                <p><?php echo $happy['testimonial_first_para']; ?></p>
                                <h3><?php echo $happy['testimonial_first_head']; ?></h3>
                                <span><?php echo $happy['testimonial_first_span']; ?></span>
                            </div>
                        </div>
                        <div class="first-parents-col">
                            <div class="johne-parents-heading">
                                <p><?php echo $happy['testimonial_second_para']; ?></p>
                                <h3><?php echo $happy['testimonial_second_head']; ?></h3>
                                <span><?php echo $happy['testimonial_second_span']; ?></span>
                            </div>
                        </div>
                        <div class="first-parents-col">
                            <div class="johne-parents-heading">
                                <p><?php echo $happy['testimonial_third_para']; ?></p>
                                <h3><?php echo $happy['testimonial_third_head']; ?></h3>
                                <span><?php echo $happy['testimonial_third_span']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- happy parents -->



<?php
get_footer();


?>

