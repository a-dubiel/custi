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
		<header class="header" role="banner">    
		
		
          <nav>
				  <div class="secondary-nav">
				    <div class="container">
				    <div class="pull-right user-nav">
  				    <a href="#" class="header-shopping-cart"><i class="fa fa-shopping-cart"></i><span class="shopping-cart-count">0</span></a>
  				    <a href="#" class="header-search js-header-search"><i class="fa fa-search"></i></a>  				    
  				    <div class="header-search-wrap">
  				      <?php get_search_form(); ?>
  				    </div> 				    
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
    				        <a href="#" class="js-show-store-dropdown">Sklep <i class="fa fa-caret-down"></i></a></li>
    				        
    				      <li><a href="#">Kreator</a></li>
                </ul>    
				      </div>
				       
				      <div class="col-lg-2 col-md-2 col-sm-2">
				        <div class="mobile-nav-icon visible-xs pull-right">
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
                    'items_wrap'     => '<div class=""><form><select class="js-mobile-nav" onchange="if (this.value) window.location.href=this.value">%3$s</select></form></div>',
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
              
              <div class="col-lg-2 col-md-2 col-sm-3">
                <a href="#" class="store-dropdown-item">
                  <div class="store-dropdown-thumb">
                    <img src="http://flickholdr.iwerk.org/400/400/" />
                  </div>
                  <h5>Nazwa kategorii</h5>
                  <p>Opis kategorii czy czegoś tam</p>
                </a>
              </div>
              
               <div class="col-lg-2 col-md-2 col-sm-3">
                <a href="#" class="store-dropdown-item">
                  <div class="store-dropdown-thumb">
                    <img src="http://flickholdr.iwerk.org/400/400/" />
                  </div>
                  <h5>Nazwa kategorii</h5>
                  <p>Opis kategorii czy czegoś tam</p>
                </a>
              </div>
              
               <div class="col-lg-2 col-md-2 col-sm-3">
                <a href="#" class="store-dropdown-item">
                  <div class="store-dropdown-thumb">
                    <img src="http://flickholdr.iwerk.org/400/400/" />
                  </div>
                  <h5>Nazwa kategorii</h5>
                  <p>Opis kategorii czy czegoś tam</p>
                </a>
              </div>
              
               <div class="col-lg-2 col-md-2 col-sm-3">
                <a href="#" class="store-dropdown-item">
                  <div class="store-dropdown-thumb">
                    <img src="http://flickholdr.iwerk.org/400/400/" />
                  </div>
                  <h5>Nazwa kategorii</h5>
                  <p>Opis kategorii czy czegoś tam</p>
                </a>
              </div>
              
               <div class="col-lg-2 col-md-2 col-sm-3">
                <a href="#" class="store-dropdown-item">
                  <div class="store-dropdown-thumb">
                    <img src="http://flickholdr.iwerk.org/400/400/" />
                  </div>
                  <h5>Nazwa kategorii</h5>
                  <p>Opis kategorii czy czegoś tam</p>
                </a>
              </div>
              
               <div class="col-lg-2 col-md-2 col-sm-3">
                <a href="#" class="store-dropdown-item">
                  <div class="store-dropdown-thumb">
                    <img src="http://flickholdr.iwerk.org/400/400/" />
                  </div>
                  <h5>Nazwa kategorii</h5>
                  <p>Opis kategorii czy czegoś tam</p>
                </a>
              </div>
              
            </div>
            
            </div>
          </div>
          
          <div class="more-info-dropdown hidden-xs">        
            <div class="container">
              <div class="row">
                 <div class="col-lg-3 col-md-3 col-sm-3 more-info-menu">
                    <h3 class="more-info-heading">Poznaj Custi</h3>
                    <ul>
                      <li><a href="#">Blog</a></li>
                      <li><a href="#">O Nas</a></li>
                      <li><a href="#">Opinie</a></li>
                      <li><a href="#">FAQ</a></li>
                      <li><a href="#">Kontakt</a></li>
                      <li><a href="#">Praca</a></li>
                    </ul>
                 </div>
                 
                 <div class="col-lg-3 col-md-3 col-sm-3 more-info-menu">
                    <h3 class="more-info-heading">Zrób Sam</h3>
                    
                 </div>
                 
                 <div class="col-lg-3 col-md-3 col-sm-3 more-info-menu">
                    <h3 class="more-info-heading">Facebook</h3>
                    
                 </div>
                 
                 <div class="col-lg-3 col-md-3 col-sm-3 more-info-menu">
                    <h3 class="more-info-heading">Informacje</h3>
                    
                 </div>
              </div>
            </div>
     
          
			</header>