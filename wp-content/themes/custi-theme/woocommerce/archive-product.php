<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header( 'shop' ); ?>


	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 pull-right products-wrapper">

    
		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

			<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

		<?php endif; ?>

		<?php do_action( 'woocommerce_archive_description' ); ?>

		<?php if ( have_posts() ) : ?>

			<?php
				/**
				 * woocommerce_before_shop_loop hook
				 *
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );
			?>

			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

			<?php
				/**
				 * woocommerce_after_shop_loop hook
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php wc_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>
        </div>
        
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 pull-left shop-sidebar-wrapper" role="complementary">
          <aside class="shop-sidebar">
            <div class="widget">
            <h4 class="widgettitle">Kategorie <i class="fa fa-plus visible-xs"></i></h4>
            <nav role="navigation">
  						<?php wp_nav_menu(array(
      					'container' => '',                              // remove nav container
      					'container_class' => '',         // class of container (should you choose to use it)
      					'menu' => __( 'Product Categories', 'bonestheme' ),   // nav name
      					'menu_class' => 'product-categories-nav',            // adding custom nav class
      					'theme_location' => 'product-categories',             // where it's located in the theme
      					'before' => '',                                 // before the menu
          			'after' => '',                                  // after the menu
          			'link_before' => '',                            // before each link
          			'link_after' => '',                             // after each link
          			'depth' => 0,                                   // limit the depth of the nav
      					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
  						)); ?>
            </nav>
            </div>
           

						<?php if ( is_active_sidebar( 'shop-sidebar' ) ) : ?>
            	
            		<?php dynamic_sidebar( 'shop-sidebar' ); ?>
      
            <?php endif; ?>

           
            
          </aside>          
        </div>

        
		  </div>
    </div>
	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
	//	do_action( 'woocommerce_sidebar' );
	?>

<?php get_footer( 'shop' ); ?>