<?php
get_header();
?>
<div class="single_blog_posts">
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
    <div class="row">
    <div class="col-md-3">
        <div class="sidebar sticky-top">
            <?php get_sidebar() ?>
        </div>
        </div>

        <div class="col-md-9">
        
            <?php  if(have_posts()) : while(have_posts()) : the_post();  ?>

            <article>
                <img src="<?php the_post_thumbnail_url('post_image'); ?>" alt="<?php the_title() ?>" class="img-fluid"> 
                <h1> <?php  the_title(); ?> </h1>
                <?php the_content(); ?>
            </article>


            <div class="comments_section">
            <?php the_post_navigation(
		array(
			'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'custom_theme' ) . '</span> <span class="nav-title">%title</span>',
			'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'custom_theme' ) . '</span> <span class="nav-title">%title</span>',
		)
	);

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;?>
  <?php the_tags() ?>
            <?php endwhile; 
                 endif; ?>

</div>

        </div>

        

    </div>
    </div>

</div>






<?php
get_footer(); 
?>