  
  		<footer class="footer" role="contentinfo">	 
  		  <div class="mountains"></div> 
  		    <div class="footer-wrap">
            <div class="container">
              <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2">
                  <a class="footer-logo" href="<?php echo home_url(); ?>" rel="nofollow">Custi</a>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                                  
                  <nav role="navigation">
        						<?php wp_nav_menu(array(
            					'container' => '',                              // remove nav container
            					'container_class' => '',         // class of container (should you choose to use it)
            					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
            					'menu_class' => 'nav footer-nav',            // adding custom nav class
            					'theme_location' => 'footer-links',             // where it's located in the theme
            					'before' => '',                                 // before the menu
                			'after' => '',                                  // after the menu
                			'link_before' => '',                            // before each link
                			'link_after' => '',                             // after each link
                			'depth' => 0,                                   // limit the depth of the nav
            					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
        						)); ?>
                  </nav>
                  
                  
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 footer-social">
                  <a href="#" class="footer-facebook-square"><i class="fa fa-facebook-square"></i></a>
                  <a href="#" class="footer-instagram"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>
  		    </div>
      </footer>

		<?php wp_footer(); ?>
	</body>

</html>