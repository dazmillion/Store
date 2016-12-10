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
