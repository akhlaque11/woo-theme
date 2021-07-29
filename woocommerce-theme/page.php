<?php
get_header();
?>
<div class="all_pages">
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


    <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-9">
        
            <?php  if(have_posts()) : while(have_posts()) : the_post();  ?>
            <img src="<?php the_post_thumbnail_url('post_image'); ?>" alt="<?php the_title() ?>" class="img-fluid"> 
            <h1> <?php  the_title(); ?> </h1>
            <?php the_content(); ?>

            <?php endwhile; 
                 endif; ?>

        </div>

        <div class="col-md-3">
        <div class="sidebar sticky-top">
            <?php get_sidebar() ?>
        </div>
        </div>

    </div>
    </div>

</div>
                </div>





<?php
get_footer(); 
?>

