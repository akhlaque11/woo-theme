<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <?php wp_head() ?>
</head>

<body <?php body_class('test') ?>>
<div class="main">
<div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                    <?php
			         wp_nav_menu(
				     array(
					'theme_location' => 'top-menu',
					'menu_class'        => 'top_menu',
				));
			?>
                        
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">INR</a></li>
                                    <li><a href="#">GBP</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="logo">
                    <h1>
                       <?php the_custom_logo(); ?>
                    </h1>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                <div class="search_form">
                <?php get_Search_form(); ?>
                </div>
                </div>
                
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="shopping-item">


                        <a href="<?php echo  wc_get_cart_url(); ?>">Cart - <span class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i> <span id="mini-cart-count"  class="product-count"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> -->
                    <script>
                  jQuery(document).ready(function(){
                    jQuery(".navbar-toggle").click(function(){
                        jQuery(".navbar-collapse").toggle();
                    });
                    });
                    </script>
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                <?php
			         wp_nav_menu(
				     array(
					'theme_location' => 'bottom-menu',
					'menu_class'        => 'nav navbar-nav',
				));
                ?>
                    
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    