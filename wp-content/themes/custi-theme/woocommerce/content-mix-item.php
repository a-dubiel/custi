<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );

// Ensure visibility
if ( ! $product || ! $product->is_visible() )
	return;

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
$classes[] = 'col-lg-4 col-sm-6 col-md-6';
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] )
	$classes[] = 'first';
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )
	$classes[] = 'last';
?>
<li <?php post_class( $classes ); ?>>
  <div class="product-wrap">
	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>

	<a href="<?php the_permalink(); ?>">
		<?php
			/**
			 * woocommerce_before_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_show_product_loop_sale_flash - 10
			 * @hooked woocommerce_template_loop_product_thumbnail - 10
			 */
			do_action( 'woocommerce_before_shop_loop_item_title' );
		?>
    <div class="product-info">
		<h3><?php the_title(); ?></h3>
		
    <p><?php echo substr($product->post->post_excerpt, 0, 70).'...' ?></p>
    <p><a class="product-info-more" href="<?php the_permalink(); ?>">więcej informacji</a></p>
    
    <?php// print_r( get_post_meta($product->post->ID, 'waga_cena_kg') )?>
		<?php
			/**
			 * woocommerce_after_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_template_loop_rating - 5
			 * @hooked woocommerce_template_loop_price - 10
			 */
			do_action( 'woocommerce_after_shop_loop_item_title' );
		?>
		<?php 
  		$id = $product->id;
  		$nonce = wp_create_nonce( 'custi-nonce' );
  		
		?>
		<a class="btn-add-to-mix" data-product-id="<?php echo $id ?>" data-nonce="<?php echo $nonce ?>" href="#">Dodaj<i class="fa fa-plus-circle"></i></a>
    </div>
	</a>
    <div class="product-cta">
  	<?php //do_action( 'woocommerce_after_shop_loop_item' ); ?>
    </div>
  </div>
</li>

<?php 
  
  if($woocommerce_loop['loop'] % 3 == 0) {
    echo '<div class="clearfix hidden-sm hidden-md"></div>';
  }

?>