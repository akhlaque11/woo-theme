<?php
/*
*
*This template is used to manipulate about us page
*Template Name: Category Template
*/
?>


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
        <div class="col-md-9 content">
        <div class="row">
        
  <?php
        $taxonomyName = "product_cat";
//This gets top layer terms only.  This is done by setting parent to 0.  
    $parent_terms = get_terms($taxonomyName, array('parent' => 0, 'orderby' => 'slug', 'hide_empty' => false));
// var_dump($parent_terms);
    
    foreach ($parent_terms as $pterm) {

        //show parent categories
        $thumbnail_id = get_term_meta($pterm->term_id, 'thumbnail_id', true);
        // get the image URL for parent category
        $image = wp_get_attachment_url($thumbnail_id);
        // print the IMG HTML for parent category
        echo "<div class='col-md-6'><a href='" . get_term_link($pterm->name, $taxonomyName) . "'> 
        <img src='{$image}' alt='' width='400' height='400' class='img-fluid'/> </a>";
        echo '<a href="' . get_term_link($pterm->name, $taxonomyName) . '">' . $pterm->name . '</a>';
         ?>  <p> <?php echo $pterm->description; ?> </p>    </div> <?php

        //Get the Child terms
        $terms = get_terms($taxonomyName, array('parent' => $pterm->term_id, 'orderby' => 'slug', 'hide_empty' => false));
        foreach ($terms as $term) {

            $thumbnail_id = get_term_meta($pterm->term_id, 'thumbnail_id', true);
            // get the image URL for child category
            $image = wp_get_attachment_url($thumbnail_id);
            // print the IMG HTML for child category
            echo "<div class='col-md-6'> <div class='child_cat_img'><a href='" . get_term_link($term->name, $taxonomyName) . "'> 
            <img src='{$image}' alt='' width='400' height='400' class='img-fluid'/> </a></div>";
            echo '<div class="child_cat_content"><a href="' . get_term_link($term->name, $taxonomyName) . '">' . $term->name . '</a>';
            ?>  <p> <?php echo $term->description; ?> </p>  </div>   </div> <?php
        }
        
    }
    
    ?>

</div>

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



