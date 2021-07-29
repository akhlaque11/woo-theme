<?php
get_header();
?>
<div class="">

    <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-9">
        
            <?php  if(have_posts()) : while(have_posts()) : the_post();  ?>
     <a href="<?php the_permalink() ?>">     <img src="<?php the_post_thumbnail_url('post_image'); ?>" alt="<?php the_title() ?>" class="img-fluid"> </a>
     <a href="<?php the_permalink() ?>"> <h1> <?php  the_title(); ?> </h1> </a>
            <?php the_content(); ?>

            <?php endwhile; 
                 endif; ?>

        </div>

        <div class="col-md-3">
        <div class="sidebar sticky-top">
            <?php get_sidebar() ?>
        </div>
        </div>


<!-- pagination links -->
<div class="pagination">
<?php
global $wp_query;
 
$big = 999999999; // need an unlikely integer
$translated = __( 'Page', 'mytextdomain' ); // Supply translatable string
 
echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages,
        'before_page_number' => '<span class="screen-reader-text">'.$translated.' </span>'
) );
?>
</div>



    </div>
    </div>

</div>






<?php
get_footer(); 
?>