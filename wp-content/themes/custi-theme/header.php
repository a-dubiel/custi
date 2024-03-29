<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title('|'); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>
    <script type="text/javascript" src="//use.typekit.net/syv3oau.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>
  <?php global $woocommerce; ?>
		<header class="header" role="banner">    
		
		
          <nav role="navigation">
				  <div class="secondary-nav">
				    <div class="container">
				    <div class="pull-right user-nav">
  				    <a href="<?php echo $woocommerce->cart->get_cart_url(); ?>" class="header-shopping-cart"><i class="fa fa-shopping-cart"></i><span class="shopping-cart-count"><?php echo $woocommerce->cart->cart_contents_count ?></span></a>
  				    <a href="#" class="header-search js-header-search"><i class="fa fa-search"></i></a>  				    
  				    <div class="header-search-wrap">
  				      <form role="search" method="get" id="searchform" action="http://andrzej-dubiels-macbook-pro.local:5757/">
			<div>
				<input type="text" value="" name="s" id="s" placeholder="Szukaj produktów">
				<input type="submit" id="searchsubmit" value="Szukaj">
				<input type="hidden" name="post_type" value="product">
			</div>
		</form>  				    </div> 				    
				    </div>
				    <div class="pull-left social-nav">
  				    <a href="#" class="header-facebook-square"><span class="social-more-info">Facebook</span><i class="fa fa-facebook-square"></i></a>
  				    <a href="#" class="header-instagram"><span class="social-more-info">Instagram</span><i class="fa fa-instagram"></i></a>
				    </div>
				    </div>
				  </div>
				
				  <div class="primary-nav">
				    <div class="container">
        
				    <div class="row">
				      <div class="col-lg-5 col-md-5 col-sm-5">               
                <ul class="pull-right hidden-xs primary-nav-list">
    				      <li>
    				        <a href="<?php echo home_url(); ?>/sklep" class="js-show-store-dropdown">Sklep <i class="fa fa-caret-down"></i></a></li>
    				        
    				      <li><a href="#">Kreator</a></li>
                </ul>    
				      </div>
				       
				      <div class="col-lg-2 col-md-2 col-sm-2">
				        <div class="mobile-nav-icon pull-right">
                  <i class="fa fa-navicon"></i>
                </div>
				        <a class="header-logo" href="<?php echo home_url(); ?>" rel="nofollow">Custi</a>
				      </div>
				      
				      <div class="col-lg-5 col-md-5 col-sm-5"> 
                <ul class="pull-left hidden-xs primary-nav-list">
                  <li><a href="#" class="js-show-more-info-dropdown">Więcej <i class="fa fa-caret-down"></i></a></li>
                  <li><a href="#">Kontakt</a></li>
                </ul>
                
                
                <?php
                  wp_nav_menu( array(
                    'theme_location' => 'mobile',
                    'walker'         => new SelectBox_Menu_Walker(),
                    'items_wrap'     => '<div class="mobile-nav-wrap"><form><select class="js-mobile-nav" onchange="if (this.value) window.location.href=this.value"><option value="">-- Menu --</option>%3$s</select></form></div>',
                    'container' => ''
                  ) ); 
                  ?>
				      </div>
				       
				    </div> 
				  </div>
				  </div>
        </div>
        
        
        
        
        </nav>
        
       
        
        <div class="store-dropdown hidden-xs">        
          <div class="container">
        
            <div class="row">
              
            <?php if ( is_active_sidebar( 'shop-subnav' ) ) : ?>
            	
            <?php dynamic_sidebar( 'shop-subnav' ); ?>
      
            <?php endif; ?>
              
            </div>
            
            </div>
          </div>
          
          <div class="more-info-dropdown hidden-xs">        
            <div class="container">
              <div class="row">
              
              	<?php if ( is_active_sidebar( 'more-info-subnav' ) ) : ?>
            	
            		  <?php dynamic_sidebar( 'more-info-subnav' ); ?>
      
                <?php endif; ?>
              
              </div>
            </div>
     
          
			</header>