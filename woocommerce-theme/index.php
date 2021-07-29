<?php
get_header();
?>

<div class="post_page">
    <div class="breadcrumb_heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-6 xol-xs-12">
                    <?php 
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="container" style="margin-top:20px; margin-bottom:20px;">


    <div class="row my-5">

        <div class="col-md-4 col-lg-4 col-sm-2 col-xs-12">
            <?php get_sidebar() ?>
        </div>

        <div class="col-md-8 col-lg-8 col-sm-4 col-xs-12">
            <?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>

            <article class="">
                <a href="<?php the_permalink() ?>" class="image featured"> <?php the_post_thumbnail('full') ?> </a>
                <header>
                    <a href="<?php the_permalink() ?>">
                        <h2><?php the_title(); ?> </h2>
                    </a>
                    <p> <?php the_content(); ?> </p>
                </header>
            </article>


            <?php endwhile;  ?>
            <?php endif; ?>


        </div>



    </div>
</div>

</div>




<?php
get_footer(); 
?>