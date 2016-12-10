<?php if ( ! defined( 'ABSPATH' ) ) {	exit;} get_header('mfrontpage'); ?>

<div class="pslider">
	<ul class="rslides">
		<li><img src="<?php bloginfo('template_directory'); ?>/images/slider/a2.jpg" alt=""></li>
		<li><img src="<?php bloginfo('template_directory'); ?>/images/slider/a3.jpg" alt=""></li>
		<li><img src="<?php bloginfo('template_directory'); ?>/images/slider/a5.jpg" alt=""></li>
	</ul>	
</div>

<div class="slider">
	<?php echo do_shortcode("[huge_it_slider id='2']"); ?>
</div>

<div class="pfeatured pfeatured-border">
	<div class="vertical-center">
		<h1>The Best Bookstore Online</h1>
		<p>Thousands of books ready for shipment within 24 hours.</p>
	</div>
</div>

<div class="pfeatured">
	<div class="vertical-center">
		<h3>Featured Books</h3>
	</div>
</div>

<div class="headline">
	<h1>Categories</h1>
</div>

<div class="caterow">
	<div class="row">
		<article class="grid-element-wrap col-three">
			<a href="create/pillows" class="grid-element waves-effect">
				<img src="<?php bloginfo('template_directory'); ?>/images/station.jpg" class="grid-element-bg" width="292" height="292"  data-hdpi="">
				<h3 class="grid-element-title">Text Books</h3>
			</a>
		</article>
		<article class="grid-element-wrap col-three">
			<a href="create/pillows" class="grid-element waves-effect">
				<img src="<?php bloginfo('template_directory'); ?>/images/text.jpg" class="grid-element-bg" width="292" height="292"  data-hdpi="">
				<h3 class="grid-element-title">Reading Books</h3>
			</a>
		</article>
		<article class="grid-element-wrap col-three">
			<a href="create/pillows" class="grid-element waves-effect">
				<img src="<?php bloginfo('template_directory'); ?>/images/pen.jpg" class="grid-element-bg" width="292" height="292" data-hdpi="">
				<h3 class="grid-element-title">Stationeries</h3>
			</a>
		</article>
		<article class="grid-element-wrap col-two">
			<a href="create/pillows" class="grid-element waves-effect">
				<img src="<?php bloginfo('template_directory'); ?>/images/text.jpg" class="grid-element-bg" width="292" height="292"  data-hdpi="">
				<h3 class="grid-element-title">Book Packs</h3>
			</a>
		</article>
		<article class="grid-element-wrap col-two">
			<a href="create/pillows" class="grid-element waves-effect">
				<img src="<?php bloginfo('template_directory'); ?>/images/pen.jpg" class="grid-element-bg" width="292" height="292" data-hdpi="">
				<h3 class="grid-element-title">WAEC & JAMB Books</h3>
			</a>
		</article>
	</div>
</div>


<div class="headline2">
	<h1>Featured Books</h1>
</div>

<div class="mid-box">
	<?php
		$params = array('posts_per_page' => 3, 'orderby' => 'rand', 'post_type' => 'product');
	  $wc_query = new WP_Query($params); 
	?>
	<?php if ($wc_query->have_posts()) : ?>
	<?php woocommerce_product_loop_start(); ?>
	<?php while ($wc_query->have_posts()) : $wc_query->the_post(); ?>
	<div class="prow">
	 <?php wc_get_template_part( 'content', 'product' ); ?>
	</div>
	<?php endwhile; // end of the loop. ?>
	<?php woocommerce_product_loop_end(); ?>
	<?php endif; ?>
</div>

<div class="adbox">
	<div class="adbox1">
		<div class="adboxinner1">	</div>
		<div class="adboxinner2">
			<div class="adstack1"></div>
			<div class="adstack2"></div>
		</div>
	</div>
	<div class="adbox2"></div>
</div>

<div class="headline">
	<h1>Our Partners</h1>
</div>

<div class="carousel">
	<div class="autoplay">
		<div class="autop">	<img src="<?php bloginfo('template_directory'); ?>/images/partners/1.jpg"></div>
		<div class="autop">	<img src="<?php bloginfo('template_directory'); ?>/images/partners/2.jpg"></div>
		<div class="autop">	<img src="<?php bloginfo('template_directory'); ?>/images/partners/3.jpg"></div>
		<div class="autop">	<img src="<?php bloginfo('template_directory'); ?>/images/partners/4.jpg"></div>
		<div class="autop">	<img src="<?php bloginfo('template_directory'); ?>/images/partners/5.jpg"></div>
		<div class="autop">	<img src="<?php bloginfo('template_directory'); ?>/images/partners/6.jpg"></div>
		<div class="autop">	<img src="<?php bloginfo('template_directory'); ?>/images/partners/7.jpg"></div>
		<div class="autop">	<img src="<?php bloginfo('template_directory'); ?>/images/partners/8.jpg"></div>
		<div class="autop">	<img src="<?php bloginfo('template_directory'); ?>/images/partners/9.jpg"></div>
		<div class="autop">	<img src="<?php bloginfo('template_directory'); ?>/images/partners/10.jpg"></div>
		<div class="autop">	<img src="<?php bloginfo('template_directory'); ?>/images/partners/11.jpg"></div>
		<div class="autop">	<img src="<?php bloginfo('template_directory'); ?>/images/partners/12.jpg"></div>
		<div class="autop">	<img src="<?php bloginfo('template_directory'); ?>/images/partners/13.jpg"></div>
		<div class="autop">	<img src="<?php bloginfo('template_directory'); ?>/images/partners/14.jpg"></div>
	</div>
</div>

<div class="pfooter">
	<div class="pcaterow">
		<div class="row">
			<article class="grid-element-wrap col s6 m3 l3">
				<a href="create/pillows" class="grid-element waves-effect">
					<img src="http://77.206.12.2/efikobooks/wp-content/themes/Efikobooks/images/station.jpg" 
					class="grid-element-bg" width="292" height="292"  data-hdpi="">
					<h3 class="grid-element-title">Book Packs</h3>
				</a>
			</article>
		</div>
	</div>

	<div class="pnewsletter">
		<div class="newsletter-wrapper">
			<div class="newsletter-motto">
				<span>Get Special Offers & More!</span>
			</div>
			<div class="subscribe-form">
				<div id="mc_embed_signup">
					<form action="//Efikobooks.us14.list-manage.com/subscribe/post?u=09958c43ffa84af82cd819a9a&amp;id=6bcf1902fa" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<div id="mc_embed_signup_scroll">
							<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter Email Address" required>
							<div style="position: absolute; left: -5000px;" aria-hidden="true">
								<input type="text" name="b_09958c43ffa84af82cd819a9a_6bcf1902fa" tabindex="-1" value="">
							</div>
							<div class="clear1">
								<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>	

	<div class="payment-platforms">
		<span>PAYMENT PLATFORMS</span>
		<div class="payment">
			<img class="header-mobile-logo_img" src="<?php bloginfo('template_directory'); ?>/images/p3.png">
		</div>
	</div>

	<section id='pinfobox'>
		<div class="container1">
			<div class="info">
				<div class="info-inner">
					<span >INFORMATION</span>
					<ul>
						<li>About Us</li>
						<li>Contact Us</li>
						<li>Site Map</li>
					</ul>
				</div>
			</div>
			<div class="service">
				<span>SERVICE & SUPPORT</span>
				<ul>
					<li>Terms & Conditions</li>
					<li>Privacy Policy</li>
					<li>Orders, Shipments</li>
				</ul>
			</div>		
		</div>	
	</section>	
	<section id='pbottom'>
		<div class="efikobottom2">
			<a href="http://www.techhouse.ng">Design by Tech House</a>
		</div>
	</section>
</div>



<?php get_footer(); ?>