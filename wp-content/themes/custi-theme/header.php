<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

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

			<header class="header" role="banner">
          
      <div class="container">

				  
				  <div class="secondary-nav">
				    <div class="pull-right user-nav">
  				    <a href="#" class="header-shopping-cart"><i class="fa fa-shopping-cart"></i><span class="shopping-cart-count">0</span></a>
  				    <a href="#" class="header-search"><i class="fa fa-search"></i></a>
				    </div>
				    <div class="pull-left social-nav">
  				    <a href="#" class="header-facebook-square"><i class="fa fa-facebook-square"></i></a>
  				    <a href="#" class="header-instagram"><i class="fa fa-instagram"></i></a>
				    </div>

				  </div>
				
				  <div class="primary-nav">
				    
				    <div class="row">
				      <div class="col-lg-5 col-md-5 col-sm-5">
                  
                   <ul class="pull-right hidden-xs primary-nav-list">
				      <li><a href="#">Sklep <i class="fa fa-caret-down"></i></a></li>
				      <li><a href="#">Kreator</a></li>
				    </ul>

                  
				      </div>
				       
				      <div class="col-lg-2 col-md-2 col-sm-2">
				        <a class="header-logo" href="<?php echo home_url(); ?>" rel="nofollow">Custi</a>
				      </div>
				      
				      <div class="col-lg-5 col-md-5 col-sm-5">
                
                <ul class="pull-left hidden-xs primary-nav-list">
				      <li><a href="#">Więcej <i class="fa fa-caret-down"></i></a></li>
				      <li><a href="#">Kontakt</a></li>
				    </ul>
                
				      </div>
				       
				    
				    </div>
				  
				  
				    
				    
				    
				    
				   				    
				  </div>
              

          		</div>
			</header>