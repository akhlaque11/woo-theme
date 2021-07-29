<?php get_header() ?>
<!-- Slider -->
<div class="front-page">
    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="owl-one owl-carousel">

                    <div>
                        <ul>
                            <li style="float: left; list-style: none; position: relative; width: 1113px;"
                                class="bx-clone">
                                <?php $image = get_theme_mod( 'image_slider_1', '' ); ?>
                                <img src=<?php echo $image; ?> alt="Slide">
                                <div class="caption-group">
                                    <h2 class="caption title animated fadeInRight">
                                        Apple <span class="primary">Store <strong>Ipod</strong></span>
                                    </h2>
                                    <h4 class="caption subtitle animated fadeInRight">&amp; Phone</h4>
                                    <a class="caption button-radius animated fadeInRight" href="#"><span
                                            class="icon"></span>Shop
                                        now</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <ul>
                            <li style="float: left; list-style: none; position: relative; width: 1113px;"
                                class="bx-clone">
                                <?php $image = get_theme_mod( 'image_slider_2', '' ); ?>
                                <img src=<?php echo $image; ?> alt="Slide">
                                <div class="caption-group">
                                    <h2 class="caption title animated fadeInRight">
                                        Apple <span class="primary">Store <strong>Ipod</strong></span>
                                    </h2>
                                    <h4 class="caption subtitle animated fadeInRight">&amp; Phone</h4>
                                    <a class="caption button-radius animated fadeInRight" href="#"><span
                                            class="icon"></span>Shop
                                        now</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li style="float: left; list-style: none; position: relative; width: 1113px;"
                                class="bx-clone">
                                <?php $image = get_theme_mod( 'image_slider_3', '' ); ?>
                                <img src=<?php echo $image; ?> alt="Slide">
                                <div class="caption-group">
                                    <h2 class="caption title animated fadeInRight">
                                        Apple <span class="primary">Store <strong>Ipod</strong></span>
                                    </h2>
                                    <h4 class="caption subtitle animated fadeInRight">&amp; Phone</h4>
                                    <a class="caption button-radius animated fadeInRight" href="#"><span
                                            class="icon"></span>Shop
                                        now</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- ./Slider end-->
    <!-- promo area -->
    <div class="about_theme_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>About this theme</h2>
                    </div>
                    <div class="content about_vedio">
                        <p>

                            I have developed this theme from scratch, I have applied many features in this theme such as
                            custom post type
                            (Services) add some custom service posts and show them on home page using bootstrap grid
                            system and applied them hover effects.
                            And add woocommerce plugin and add some products and show them at home page and add there
                            custom add to cart button.
                            I have applied custom editing on shop page, Cart page and checkout page by going their
                            backend coding in woocommerce plugin.
                            There are many pages in this theme Home page, Blog page where I,m showing blog posts,
                            Category page which I have connected with
                            custom template page and fetch there product categories and sub categories. And I have also
                            add two customizer panel one for background
                            and another for typography just for header, hero slider section and for footer section. I
                            have applied some basic designing in this theme
                            because it is just a demo theme. Furthermore you can check following uploaded vedio about
                            this woocommerce theme.

                        </p>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/zhsY9EyF8Ps"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="promo-area">
        <div class="heading">
            <h2 class="section-title">Custom Service Posts</h2>
        </div>
        <div class="container">
            <div class="row">

                <?php 
            $args = array(
             'post_type'  => 'service',
			 'posts_per_page'  => 4,
            );
               $blog_post =  new WP_Query($args);
             if ( $blog_post->have_posts() ) :  ?>
                <?php while ( $blog_post->have_posts() ) : $blog_post->the_post(); ?>

                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <a href="<?php the_permalink() ?>"> <?php the_post_thumbnail('thumbnail') ?> </a>
                        <a href="<?php the_permalink() ?>">
                            <p> <?php the_title() ?> </p>
                        </a>
                    </div>
                </div>


                <?php endwhile; 
                        endif;  ?>
                <?php  wp_reset_postdata(); ?>

            </div>
        </div>
    </div>
    <!-- promo area end -->
    <!-- content area -->
    <div class="recent-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="">



                            <?php 
			global $product;
            $args = array(
             'post_type'  => 'product',
			 'posts_per_page'  => 8
            );
               $service_post =  new WP_Query($args);
             if ( $service_post->have_posts() ) :  ?>
                            <?php while ( $service_post->have_posts() ) : $service_post->the_post(); ?>

                            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <?php echo $product->get_image(); ?>

                                        <div class="product-hover" style="border:none;">


                                            <?php $product = wc_get_product(get_the_ID());?>
                                            <?php $product_object = wc_get_product(get_the_ID());
echo '<a href="' . esc_url( $product_object->add_to_cart_url() ) . '" class="add-to-cart-link">' . esc_html__( 'Buy Now', 'text-domain' ) . '</a>'; ?>

                                            <a href="<?php the_permalink(); ?>" class="view-details-link"><i
                                                    class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><?php   echo $product->get_name(); ?> </h2>

                                    <div class="product-carousel-price">

                                        <p><strong>Price:</strong> <?php echo $product->get_price(); ?> </p>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; 
                        endif;  ?>
                            <?php  wp_reset_postdata(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content area end -->
    <!-- recent blog posts -->
    <div class="recent-post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Blog Posts</h2>
                        <div class="">



                            <?php 
			
			
            $args = array(
             'post_type'  => 'post',
			 'posts_per_page'  => 9,
            );
               $blog_post =  new WP_Query($args);
             if ( $blog_post->have_posts() ) :  ?>
                            <?php while ( $blog_post->have_posts() ) : $blog_post->the_post(); ?>

                            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <a href="<?php the_permalink() ?>" class="image featured">
                                            <?php the_post_thumbnail('medium') ?> </a>
                                        <div class="product-hover" style="border:none;">

                                            <a href="<?php the_permalink(); ?>" class="view-details-link"><i
                                                    class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><?php   the_title(); ?> </h2>
                                    <p> <?php the_excerpt(); ?> </p>


                                </div>
                            </div>
                            <?php endwhile; 
                        endif;  ?>
                            <?php  wp_reset_postdata(); ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- recent blog posts end here -->
    <!-- bands area -->
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h1>Logo Section</h1>
                    </div>
                    <div class="brand-wrapper">
                        <div class="brand-list owl-two owl-carousel owl-theme owl-responsive-1000 owl-loaded">








                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-1160px, 0px, 0px); transition: all 0s ease 0s; width: 4640px;">
                                    <div class="owl-item cloned" style="width: 270px; margin-right: 20px;"><img
                                            src=<?php echo get_template_directory_uri()."/assets/img/brand5.png" ?>
                                            alt=""></div>
                                    <div class="owl-item cloned" style="width: 270px; margin-right: 20px;"><img
                                            src=<?php echo get_template_directory_uri()."/assets/img/brand5.png" ?>
                                            alt=""></div>
                                    <div class="owl-item cloned" style="width: 270px; margin-right: 20px;"><img
                                            src=<?php echo get_template_directory_uri()."/assets/img/brand5.png" ?>
                                            alt=""></div>
                                    <div class="owl-item cloned" style="width: 270px; margin-right: 20px;"><img
                                            src=<?php echo get_template_directory_uri()."/assets/img/brand5.png" ?>
                                            alt=""></div>
                                    <div class="owl-item active" style="width: 270px; margin-right: 20px;"><img
                                            src=<?php echo get_template_directory_uri()."/assets/img/brand5.png" ?>
                                            alt=""></div>
                                    <div class="owl-item active" style="width: 270px; margin-right: 20px;"><img
                                            src=<?php echo get_template_directory_uri()."/assets/img/brand5.png" ?>
                                            alt=""></div>
                                    <div class="owl-item active" style="width: 270px; margin-right: 20px;"><img
                                            src=<?php echo get_template_directory_uri()."/assets/img/brand5.png" ?>
                                            alt=""></div>
                                    <div class="owl-item active" style="width: 270px; margin-right: 20px;"><img
                                            src=<?php echo get_template_directory_uri()."/assets/img/brand5.png" ?>
                                            alt=""></div>
                                    <div class="owl-item" style="width: 270px; margin-right: 20px;"><img
                                            src=<?php echo get_template_directory_uri()."/assets/img/brand5.png" ?>
                                            alt=""></div>
                                    <div class="owl-item" style="width: 270px; margin-right: 20px;"><img
                                            src=<?php echo get_template_directory_uri()."/assets/img/brand5.png" ?>
                                            alt=""></div>
                                    <div class="owl-item" style="width: 270px; margin-right: 20px;"><img
                                            src=<?php echo get_template_directory_uri()."/assets/img/brand5.png" ?>
                                            alt=""></div>
                                    <div class="owl-item" style="width: 270px; margin-right: 20px;"><img
                                            src=<?php echo get_template_directory_uri()."/assets/img/brand5.png" ?>
                                            alt=""></div>
                                    <div class="owl-item cloned" style="width: 270px; margin-right: 20px;"><img
                                            src=<?php echo get_template_directory_uri()."/assets/img/brand5.png" ?>
                                            alt=""></div>
                                    <div class="owl-item cloned" style="width: 270px; margin-right: 20px;"><img
                                            src=<?php echo get_template_directory_uri()."/assets/img/brand5.png" ?>
                                            alt=""></div>
                                    <div class="owl-item cloned" style="width: 270px; margin-right: 20px;"><img
                                            src=<?php echo get_template_directory_uri()."/assets/img/brand5.png" ?>
                                            alt=""></div>
                                    <div class="owl-item cloned" style="width: 270px; margin-right: 20px;"><img
                                            src=<?php echo get_template_directory_uri()."/assets/img/brand5.png" ?>
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="owl-controls">
                                <div class="owl-nav">
                                    <div class="owl-prev" style="">prev</div>
                                    <div class="owl-next" style="">next</div>
                                </div>
                                <div class="owl-dots" style="">
                                    <div class="owl-dot active"><span></span></div>
                                    <div class="owl-dot"><span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- front-page end here -->
    <!-- brands area end -->
    <?php get_footer() ?>