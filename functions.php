<?php

function efikobooksfiles() {
   wp_enqueue_style( 'sidebar', get_stylesheet_directory_uri() . '/css/sidebar.css' );
   wp_enqueue_style( 'body', get_stylesheet_directory_uri() . '/css/body.css' );
   wp_enqueue_style( 'media-style', get_stylesheet_directory_uri() . '/css/media-style.css' );
   wp_enqueue_style( 'slickcss', get_stylesheet_directory_uri() . '/css/slick.css' );
   wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/css/slick-theme.css' );
   wp_enqueue_script( 'codes', get_stylesheet_directory_uri() . '/js/codes.js' );
   wp_enqueue_script( 'slider', get_stylesheet_directory_uri() . '/js/responsiveslides.min.js' );
   wp_enqueue_script( 'materializejs', get_stylesheet_directory_uri() . '/js/materialize.js' );
   wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/js/slick.js' );
   wp_enqueue_script( 'slickcode', get_stylesheet_directory_uri() . '/js/slickcode.js' );
 }
 add_action( 'wp_enqueue_scripts', 'efikobooksfiles' );

//Remove woocommerce css
 add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

// New Registration fields 
function wooc_extra_register_fields() {?>
<input type="text" placeholder='First Name*' class="input-text reginput" name="billing_first_name" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" />
<?php
}
add_action( 'woocommerce_register_form_start', 'wooc_extra_register_fields' );

/*** Validate the extra register fields.***/

function wooc_validate_extra_register_fields( $username, $email, $validation_errors ) 
{if ( isset( $_POST['billing_first_name'] ) && empty( $_POST['billing_first_name'] ) ) 
{$validation_errors->add( 'billing_first_name_error', __( '<strong>Error</strong>: 
First name is required!', 'woocommerce' ) );}}
add_action( 'woocommerce_register_post', 'wooc_validate_extra_register_fields', 10, 3 );

/*** Add extra register fields to database****/
function wooc_save_extra_register_fields( $customer_id ) 
{if ( isset( $_POST['billing_first_name'] ) ) 
{update_user_meta( $customer_id, 'first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );}}
add_action( 'woocommerce_created_customer', 'wooc_save_extra_register_fields' );

//Change add to cart button text
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' ); 
function woo_custom_cart_button_text() {return __( 'Add to Cart', 'woocommerce' );}

//Remove tabs from single product Page
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
function woo_remove_product_tabs( $tabs ) 
{unset( $tabs['reviews'] ); unset( $tabs['additional_information'] ); return $tabs;}

// Remove “product description” text
add_filter( 'woocommerce_product_description_heading', 'remove_product_description_heading' );
function remove_product_description_heading() {return '';}

// Remove Sidebar on all the Single Product Pages 
add_action( 'wp', 'remove_sidebar_product_pages' ); 
function remove_sidebar_product_pages() {
if (is_product()) {remove_action('woocommerce_sidebar','woocommerce_get_sidebar',10);}}

// Update cart when products are added via AJAX 
add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment'); 
function woocommerce_header_add_to_cart_fragment( $fragments ) 
{global $woocommerce;	ob_start();
?>
<a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" 
title="<?php _e('View your shopping cart', 'woothemes'); ?>">
<?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), 
$woocommerce->cart->cart_contents_count);?></a>
<?php $fragments['a.cart-contents'] = ob_get_clean();	return $fragments;}

//Change product image to uncropped thumbnails
function woocommerce_template_loop_product_thumbnail() {the_post_thumbnail();}

// Change the breadcrumb delimiter
add_filter( 'woocommerce_breadcrumb_defaults', 'my_change_breadcrumb_delimiter' );
function my_change_breadcrumb_delimiter( $defaults ) 
{$defaults['delimiter'] = ' <i class="fa fa-chevron-right" aria-hidden="true"></i> ';
 return $defaults;}
