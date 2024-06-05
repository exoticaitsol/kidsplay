<?php



get_header();

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
                                    <a href="<?php echo get_field('our_story') ?>">Our Story</a>
                                </div>
                                <div class="our-contect-btn">
                                    <a href="#">Contact Us</a>
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
       <?php 
       
       echo $test  = get_field("test");
       echo $history  = get_field("who_we_are"); 
     
       echo "<pre>";
       print_r($history);
       echo "</pre>";
    


       
       ?> 
        <section class="we-are">
            <div class="container">
                <div class="how-we-are">
                    <div class="how-we-are-left">
                        <div class="how-lrft-content">
                       
                            <span>fcvgsdfcdsfdfavgb<?php echo $history['story']; ?></span>
                            <h3>yty</h3>
                        </div>
                        <div class="how-we-are-img">
                            <img src="https://kidsplay.exoticaitsolutions.com/wp-content/uploads/2024/05/we-are.png" alt>
                        </div>
                    </div>
                    <div class="how-we-sre-right">
                        <div class="how-we-are-content">
                            <p>Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Aliquam vitae dictum elit.
                                Praesent tristique urna est, nec blandit lorem
                                suscipit a. Sed scelerisque erat ut felis
                                feugiat fermentum. Suspendisse tempor molestie
                                sem, Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Aliquam vitae dictum elit.
                                Praesent tristique urna est, nec blandit lorem
                                suscipit a. Sed scelerisque erat ut felis
                                feugiat fermentum. </p>
                            <span>Suspendisse tempor molestie sem, Lorem ipsum
                                dolor sit amet, consectetur adipiscing elit.
                                Aliquam vitae dictum elit. Praesent tristique
                                urna est, nec blandit lorem suscipit a. Sed
                                scelerisque erat ut felis feugiat fermentum.
                                Suspendisse tempor molestie sem, </span>
                        </div>
                        <div class="how-btn">
                            <a href="#">Read More</a>
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
                    <h3>New Products</h3>
                </div>
                <div class="main-product">
                    <div class="product-col-full">
                        <div class="first-product-baby">
                            <div class="product-img">
                                <img src="https://kidsplay.exoticaitsolutions.com/wp-content/uploads/2024/05/baby-with.png" alt>
                            </div>
                            <div class="first-product-bottom">
                                <div class="product-heading">
                                    <h3>Clothing For
                                        Baby with Softness</h3>
                                </div>
                                <div class="product-btn">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="first-product-baby">
                            <div class="product-img">
                                <img src="https://kidsplay.exoticaitsolutions.com/wp-content/uploads/2024/05/lightsaber.png" alt>
                            </div>
                            <div class="first-product-bottom">
                                <div class="product-heading">
                                    <h3>Star Wars
                                        Lightsaber Forge</h3>
                                </div>
                                <div class="product-btn">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="first-product-baby">
                            <div class="product-img">
                                <img src="https://kidsplay.exoticaitsolutions.com/wp-content/uploads/2024/05/start-wars.png" alt>
                            </div>
                            <div class="first-product-bottom">
                                <div class="product-heading">
                                    <h3>Young Jedi Adventures
                                        Star Wars </h3>
                                </div>
                                <div class="product-btn">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="first-product-baby">
                            <div class="product-img">
                                <img src="https://kidsplay.exoticaitsolutions.com/wp-content/uploads/2024/05/balloon.png" alt>
                            </div>
                            <div class="first-product-bottom">
                                <div class="product-heading">
                                    <h3>Eestway Jumping'</h3>
                                </div>
                                <div class="product-btn">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="first-product-baby">
                            <div class="product-img">
                                <img src="https://kidsplay.exoticaitsolutions.com/wp-content/uploads/2024/05/balloon.png" alt>
                            </div>
                            <div class="first-product-bottom">
                                <div class="product-heading">
                                    <h3>Eestway Jumping'</h3>
                                </div>
                                <div class="product-btn">
                                    <a href="#">Read More</a>
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
                            <img src="https://kidsplay.exoticaitsolutions.com/wp-content/uploads/2024/05/consectetur.png" alt>
                        </div>
                        <div class="coporate-left-content">
                            <p>Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Aliquam vitae dictum elit.
                                Praesent tristique urna est, nec blandit lorem
                                suscipit a. Sed scelerisque erat ut felis
                                feugiat fermentum. Suspendisse tempor molestie
                                sem, Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Aliquam vitae dictum elit.
                                Praesent tristique urna est, nec blandit lorem
                                suscipit a. Sed scelerisque erat ut felis
                                feugiat fermentum. </p>
                        </div>
                    </div>
                    <div class="center-coporate-col">
                        <div class="center-coporate-heading">
                            <span>Bridge The Gender-Gap Have A Corporate
                                Daycare</span>
                            <h3>Corporate Bay</h3>
                        </div>
                        <div class="center-coporate-img">
                            <img src="https://kidsplay.exoticaitsolutions.com/wp-content/uploads/2024/05/consectetur-main.png" alt>
                        </div>
                    </div>
                    <div class="right-coporate-col">
                        <div class="right-coporate-img">
                            <img src="https://kidsplay.exoticaitsolutions.com/wp-content/uploads/2024/05/consectetur-main-right.png"
                                alt>
                        </div>
                        <div class="right-coporate-heading">
                            <h3>Features:</h3>
                            <p>Affordable & Quality Childcare Brand
                                Cost-effective Onsite Centers</p>
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
                        <span>According To Your Age</span>
                    </div>
                    <div class="watch-right-heading">
                        <h3>Watch by age range</h3>
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
                                <img src="https://kidsplay.exoticaitsolutions.com/wp-content/uploads/2024/05/watch-1.png" alt>
                            </div>
                            <div class="watch-content--bottom">
                                <span>0-2 years</span>
                            </div>
                        </div>
                        <div class="watch-content">
                            <div class="watch-img">
                                <img src="https://kidsplay.exoticaitsolutions.com/wp-content/uploads/2024/05/watch-2.png" alt>
                            </div>
                            <div class="watch-content--bottom">
                                <span>3-4 years</span>
                            </div>
                        </div>
                        <div class="watch-content">
                            <div class="watch-img">
                                <img src="https://kidsplay.exoticaitsolutions.com/wp-content/uploads/2024/05/watch-3.png" alt>
                            </div>
                            <div class="watch-content--bottom">
                                <span>5-7 years</span>
                            </div>
                        </div>

                        <div class="watch-content">
                            <div class="watch-img">
                                <img src="https://kidsplay.exoticaitsolutions.com/wp-content/uploads/2024/05/watch-4.png" alt>
                            </div>
                            <div class="watch-content--bottom">
                                <span>8-10 years</span>
                            </div>
                        </div>
                        <div class="watch-content">
                            <div class="watch-img">
                                <img src="https://kidsplay.exoticaitsolutions.com/wp-content/uploads/2024/05/watch-4.png" alt>
                            </div>
                            <div class="watch-content--bottom">
                                <span>8-10 years</span>
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
                        <h3>Watch by categoriese</h3>
                    </div>
                    <div class="main-categories">
                        <div class="top-main-watch-col">
                            <div class="first-categories">
                                <div class="categories-img">
                                    <img src="https://kidsplay.exoticaitsolutions.com/wp-content/uploads/2024/05/categories-1.png"
                                        alt>
                                </div>
                                <div class="categories-btn">
                                    <a href="#">ACCESSORIES</a>
                                </div>
                            </div>
                            <div class="first-categories">
                                <div class="categories-img">
                                    <img src="https://kidsplay.exoticaitsolutions.com/wp-content/uploads/2024/05/categories-2.png"
                                        alt>
                                </div>
                                <div class="categories-btn">
                                    <a href="#">Clothes</a>
                                </div>
                            </div>
                            <div class="first-categories">
                                <div class="categories-img">
                                    <img src="https://kidsplay.exoticaitsolutions.com/wp-content/uploads/2024/05/categories-3.png"
                                        alt>
                                </div>
                                <div class="categories-btn">
                                    <a href="#">Toy</a>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-main-watch-col">
                            <div class="first-categories">
                                <div class="categories-img">
                                    <img src="https://kidsplay.exoticaitsolutions.com/wp-content/uploads/2024/05/categories-4.png"
                                        alt>
                                </div>
                                <div class="categories-btn">
                                    <a href="#">Gift</a>
                                </div>
                            </div>
                            <div class="first-categories">
                                <div class="categories-img">
                                    <img src="https://kidsplay.exoticaitsolutions.com/wp-content/uploads/2024/05/categories-5.png"
                                        alt>
                                </div>
                                <div class="categories-btn">
                                    <a href="#">Footwear</a>
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
                            <form action>
                                <div class="name-form">
                                    <div class="first-name">
                                        <input type="text" id="fname"
                                            name="fname"
                                            placeholder="First Name*">
                                    </div>
                                    <div class="first-name">
                                        <input type="text" id="lname"
                                            name="lname"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="name-form">
                                    <div class="first-name">
                                        <input type="email" id="email"
                                            name="email"
                                            placeholder="Email*">
                                    </div>
                                    <div class="first-name">
                                        <input type="tel" id="phone"
                                            name="phone"
                                            pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
                                            placeholder="Phone">
                                    </div>
                                </div>
                                <div class="text-aera-col">
                                    <textarea id="w3review" name="w3review"
                                        rows="4"
                                        cols="50">
                                    Message
                                    </textarea>
                                </div>
                            </form>
                            <div class="form-btn">
                                <a href="#">Submit</a>
                            </div>
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
                                <span>Testimonials</span>
                                <h3>Happy parents</h3>
                                <p>Parents absolutely happy with the toys and
                                    study
                                    materials we've purchased for our
                                    children.</p>
                            </div>
                        </div>
                        <div class="first-parents-col">
                            <div class="johne-parents-heading">
                                <p>Lorem ipsum Penatibus eros congue am aliquet
                                    lectus in imperdiet vel mattis sed enim enim
                                    pulvinar posuere augue duis lorem lectus at
                                    facilisi in nibh at quam in justo, sit
                                    auctor
                                    morbi eget aliquam site lorem gravida
                                    fringilla
                                    pret nibh at quam in justo, sit auctor morbi
                                    eget aliquam ium vestibulum mauris.</p>
                                <h3>John Allison</h3>
                                <span>CEO of Manufacture Company</span>
                            </div>
                        </div>
                        <div class="first-parents-col">
                            <div class="johne-parents-heading">
                                <p>Lorem ipsum Penatibus eros congue am aliquet
                                    lectus in imperdiet vel mattis sed enim enim
                                    pulvinar posuere augue duis lorem lectus at
                                    facilisi in nibh at quam in justo, sit
                                    auctor
                                    morbi eget aliquam site lorem gravida
                                    fringilla
                                    pret nibh at quam in justo, sit auctor morbi
                                    eget aliquam ium vestibulum mauris.</p>
                                <h3>John Allison</h3>
                                <span>CEO of Manufacture Company</span>
                            </div>
                        </div>
                        <div class="first-parents-col">
                            <div class="johne-parents-heading">
                                <p>Lorem ipsum Penatibus eros congue am aliquet
                                    lectus in imperdiet vel mattis sed enim enim
                                    pulvinar posuere augue duis lorem lectus at
                                    facilisi in nibh at quam in justo, sit
                                    auctor
                                    morbi eget aliquam site lorem gravida
                                    fringilla
                                    pret nibh at quam in justo, sit auctor morbi
                                    eget aliquam ium vestibulum mauris.</p>
                                <h3>John Allison</h3>
                                <span>CEO of Manufacture Company</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- happy parents -->



<?php
get_footer();


?>

