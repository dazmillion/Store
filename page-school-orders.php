<?php if ( ! defined( 'ABSPATH' ) ) {	exit;} get_header(); ?>

<?php echo '<div class="pcontainer">';

  if (have_posts()):
    while (have_posts()) : the_post(); ?>
    <h2><a href='<?php the_permalink();?>'><?php the_title();?></a></h2>
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
