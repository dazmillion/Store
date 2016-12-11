<?php if ( ! defined( 'ABSPATH' ) ) {	exit;} get_header(); ?>
<div class="headline">
	<h1>Worksheets</h1>
</div>
<?php

  if (have_posts()):
    while (have_posts()) : the_post(); ?>
	<div class="worksheet-container">	
    
		<div class="worksheet-image">
			<a href='<?php the_permalink()?>'><?php the_post_thumbnail('efikoimg'); ?></a>
		</div>
		<h2><a href='<?php the_permalink();?>'><?php the_title();?></a></h2>
	</div>
    <?php endwhile;
    else:
    echo '<p>No content found</p>';
  endif;
?>


<?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

<?php if ( $wpb_all_query->have_posts() ) : ?>

<ul>

	<!-- the loop -->
	<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	<?php endwhile; ?>
	<!-- end of the loop -->

</ul>

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
