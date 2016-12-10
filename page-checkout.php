<?php if ( ! defined( 'ABSPATH' ) ) {	exit;} get_header('cart'); ?>


<?php
do_action( 'woocommerce_before_main_content' );
echo '<div class="pcontainer">';

  if (have_posts()):
    while (have_posts()) : the_post(); ?>
   
    <?php the_content();?>
    <?php endwhile;
    else:
    echo '<p>No content found</p>';
  endif;
  echo '</div>';
?>

<section id="banner1">
  <div class="banner1"></div>
</section>
</div>
<?php get_footer(); ?>