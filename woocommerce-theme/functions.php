<?php 






// Register sidebar and widgets areas
function mytheme_widgets_init() {
   
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'main-sidebar',
        'description'   => 'Main sidebar on right side',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
    // for blog post page
 register_sidebar( array(
   'name'          => __( 'Blog post widget', 'theme_name' ),
   'id'            => 'blog_post',
   'before_widget' => '<aside id="%1$s" class="footer_widget_1 %2$s">',
   'after_widget'  => '</aside>',
   'before_title'  => '<h3 class="widget-title">',
   'after_title'   => '</h3>',
) );
 // for footer
 register_sidebar( array(
    'name'          => __( 'Footer widget 1', 'theme_name' ),
    'id'            => 'footer-1',
    'before_widget' => '<aside id="%1$s" class="footer_widget_1 %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
 ) );
 register_sidebar( array(
    'name'          => __( 'Footer widget 2', 'theme_name' ),
    'id'            => 'footer-2',
    'before_widget' => '<aside id="%1$s" class="footer_widget_2 %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
 ) );
 register_sidebar( array(
    'name'          => __( 'Footer widget 3', 'theme_name' ),
    'id'            => 'footer-3',
    'before_widget' => '<aside id="%1$s" class="footer_widget_3 %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
 ) );
 register_sidebar( array(
    'name'          => __( 'Footer widget 4', 'theme_name' ),
    'id'            => 'footer-4',
    'before_widget' => '<aside id="%1$s" class="footer_widget_3 %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
 ) );
 register_sidebar( array(
    'name'          => __( 'Footer widget 5', 'theme_name' ),
    'id'            => 'footer_5',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
 ) );
 
 }
 add_action( 'widgets_init', 'mytheme_widgets_init' );

require get_template_directory(). "/inc/enquestyles.php";
require get_template_directory(). "/inc/supports.php";
require get_template_directory() . '/inc/services.php';


add_filter( 'woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count');
function wc_refresh_mini_cart_count($fragments){
    ob_start();
    $items_count = WC()->cart->get_cart_contents_count();
    ?>
    <span id="mini-cart-count"><?php echo $items_count ? $items_count : '&nbsp;'; ?></span>
    <?php
        $fragments['#mini-cart-count'] = ob_get_clean();
    return $fragments;
}

add_action( 'woocommerce_single_product_summary', 'my_extra_button_on_product_page', 30 );

 // Kirki embeded
 require get_template_directory(). "/inc/plugins/kirki/kirki.php";
 // add kirki_customizer.php file
 require get_template_directory(). "/inc/plugins/kirki_customizer.php";