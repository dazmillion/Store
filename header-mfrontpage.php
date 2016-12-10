<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<title><?php bloginfo( 'name' ); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Hind+Madurai" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" media="screen" title="no title">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head();?>
</head>

<body <?php body_class(); ?>>
	<div class='topbar'>
        <div class='logobox'></div>
        <div class="rbar">
           <div class="container">
            <ul class="mainmenu">
		          <li><a href="<?php echo site_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
		          <li class="hover"><a href="#"><i class="fa fa-book" aria-hidden="true"></i>Books</a>
	              <ul class="dropdwon">
	                <div class="li-box">
	                     <div class="categorybox">
	                      <div class="boxwrapper">
	                        <div class="boxinner booksboxes1">
	                          <div class="category ctext">Text Books</div>
	                            <div class="catewrapper">
	                              <div class="cate">
	                                <div class="cateinner">
	                                  <div class="catetopic">Primary School</div>
	                                  <p class="bookscategory ctext1"><a href="#">Play Group</a></p>
	                                  <p class="bookscategory ctext1"><a href="#">Level One</a></p>
	                                  <p class="bookscategory ctext1"><a href="#">Level Two</a></p>
	                                  <p class="bookscategory ctext1"><a href="#">Level Three</a></p>
	                                  <p class="bookscategory ctext1"><a href="#">Level Four</a></p>
	                                  <p class="bookscategory ctext1"><a href="#">Level Five</a></p>
	                                  <p class="bookscategory ctext1"><a href="#">Level Six</a></p>
	                                </div>
	                              </div>
	                              <div class="cate2">
	                                <div class="cateinner">
	                                  <div class="catetopic-right">Secondary School</div>
	                                  <div class="bookscategory ctext1-right"><a href="#">Junior Level 1</a></div>
	                                  <div class="bookscategory ctext1-right"><a href="#">Junior Level 2</a></div>
	                                  <div class="bookscategory ctext1-right"><a href="#">Junior Level 3</a></div>
	                                  <div class="bookscategory ctext1-right"><a href="#">Senior Level 4</a></div>
	                                  <div class="bookscategory ctext1-right"><a href="#">Senior Level 5</a></div>
	                                  <div class="bookscategory ctext1-right"><a href="#">Senior Level 6</a></div>
	                                  <div class="bookscategory ctext1-right"><a href="#">Jamb & A Levels</a></div>
	                                </div>
	                              </div>
	                            </div>
	                        </div>
	                        <div class="boxinner booksboxes2">
	                          <div class="category ctext">Reading Books</div>
	                            <div class="catewrapper">
	                              <div class="cate">
	                                <div class="cateinner">
	                                  <div class="catetopic">Book Categories</div>
	                                  <div class="bookscategory ctext1"><a href="#">Fiction Books</a></div>
	                                  <div class="bookscategory ctext1"><a href="#">Non Fiction Books</a></div>
	                                  <div class="bookscategory ctext1"><a href="#">Picture Books</a></div>
	                                  <div class="bookscategory ctext1"><a href="#">Book Packs</a></div>
	                                  <div class="bookscategory ctext1"><a href="#">Audio Books</a></div>
	                                  <div class="bookscategory ctext1"><a href="#">Comics</a></div>
	                                </div>
	                              </div>
	                              <div class="cate2">
	                                <div class="cateinner">
	                                  <div class="catetopic-right">Age Groups</div>
	                                  <div class="bookscategory ctext1-right"><a href="#">0 - 2 Years</a></div>
	                                  <div class="bookscategory ctext1-right"><a href="#">3 - 5 Years</a></div>
	                                  <div class="bookscategory ctext1-right"><a href="#">6 - 8 Years</a></div>
	                                  <div class="bookscategory ctext1-right"><a href="#">9 - 12 Years</a></div>
	                                  <div class="bookscategory ctext1-right"><a href="#">Teens</a></div>
	                                  <div class="bookscategory ctext1-right"><a href="#">Young Adults</a></div>
	                                </div>
	                              </div>
	                            </div>
	                        </div>
	                      </div>
	                     </div>
	                    </div>
		            </ul>
	            </li>
	            <li class="hover"><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i>Stationeries</a></li>
	            <li class="menu-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i><a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></a></li>
            </ul>
           </div>
        </div>
    </div>
	<div id="wrapper">
	    <div id="sidebar-wrapper">
            <ul class="sidebar-nav mobile-sidebar">
                <li class="sidebar-msearch"><?php  echo do_shortcode('[yith_woocommerce_ajax_search]'); ?> </li>
								<li class="sidebar-plogin">
									<div class="plogin">
										<a href="<?php echo home_url(); ?>/my-account/">
											<?php $current_user = wp_get_current_user();
												if ( is_user_logged_in()) { echo 'Hello ' . $current_user->user_firstname;} 
												else {echo 'Sign In / Create Account';}
											?>
										</a>
									</div>
								</li>
                <li class="sidebar-li"><a href="<?php echo home_url(); ?>"><div class="icon-div"><i class="fa fa-home" aria-hidden="true"></i></div>Home</a></li>
                <li class="sidebar-li"><a href="<?php echo home_url(); ?>"><div class="icon-div"><i class="fa fa-book" aria-hidden="true"></i></div>Books</a></li>
                <li class="sidebar-li"><a href="<?php echo home_url(); ?>/category/worksheets/"><div class="icon-div"><i class="fa fa-file-text" aria-hidden="true"></i></div>Worksheets</a></li>
                <li class="sidebar-li"><a href="<?php echo home_url(); ?>"><div class="icon-div"><i class="fa fa-pencil" aria-hidden="true"></i></div>Stationeries</a></li>
                <li class="sidebar-li"><a href="<?php echo home_url(); ?>/school-orders/"><div class="icon-div"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>School Orders</a></li>
                <li class="sidebar-li">
									<ul class="collapsible" data-collapsible="expandable">
										<li class="">
											<div class="collapsible-header contact-li"><div class="icon-div"><i class="fa fa-info-circle" aria-hidden="true"></i></div>Contact Us</div>
											<div class="collapsible-body" style="display: none;">
												<p class="inner-phone"><i class="fa fa-phone"></i>08059000000 ( 8AM - 5PM )</p>
												<p class="inner-email"><i class="fa fa-envelope" aria-hidden="true"></i>hello@efikobooks.com</p>
											</div>
										</li>
									</ul>
								</li>
            </ul>
				<div class="desktop-sidebar">
					<div class='logo'>
						<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png"></a>
					</div>
					<div class="sidebar1">
						<ul class="sidebar-ul">
										<li class="sidebar-li"><a href="<?php echo home_url(); ?>/category/worksheets/"><div class="icon-div"><i class="fa fa-file-text" aria-hidden="true"></i></div>Worksheets</a></li>
										<li class="sidebar-li"><a href="<?php echo home_url(); ?>/school-orders/"><div class="icon-div"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>School Orders</a></li>
										<li class="sidebar-search"> <?php  echo do_shortcode('[yith_woocommerce_ajax_search]'); ?> </li>
							<li class="sidebar-li login-li"><a href="<?php echo home_url(); ?>/my-account/"><div class="icon-div"><i class="fa fa-user" aria-hidden="true"></i></div>
								<?php
								$current_user = wp_get_current_user();
									if ( is_user_logged_in()) {
										echo 'Hello ' . $current_user->user_firstname ;
									} else {
										echo 'SIGN IN';
									}
								?>
							</a></li>
							<li class="sidebar-li">
								<ul class="collapsible" data-collapsible="expandable">
									<li class="">
										<div class="collapsible-header contact-li"><div class="icon-div"><i class="fa fa-info-circle" aria-hidden="true"></i></div>Contact Us</div>
										<div class="collapsible-body" style="display: none;">
											<p><i class="fa fa-phone"></i>08059000000 ( 8AM - 5PM )</p>
											<p class="inner-email"><i class="fa fa-envelope" aria-hidden="true"></i>hello@efikobooks.com</p>
										</div>
									</li>
								</ul>
							</li>
						</ul>
						<div class="footer-social">
							<ul class="social-links">
								<li>Let's be social...</li>
								<li><a title="Visit our Facebook page" href="#" target="blank"><img src="<?php bloginfo('template_directory'); ?>/images/fb.png" alt="Facebook"></a></li>
								<li><a title="Follow us on Instagram" href="#" target="blank"><img src="<?php bloginfo('template_directory'); ?>/images/inst.png" alt="Instagram"></a></li>
							</ul>
						</div>
					</div>
				</div>	
      </div>
		<div id="page-content-wrapper">
			<div class="phone-scale">
				<div class="header-mobile">
					<div class="header-mobile-toggle">
						<a class="header-mobile-toggle_link">
							<i class="header-mobile-toggle_icon hamburger-icon">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</i>
						</a>	
					</div>
					<div class="header-mobile-logo">		
						<a class="header-mobile-logo_link" href="<?php echo site_url(); ?>" title="EfikoBooks Home">
						<img class="header-mobile-logo_img" src="<?php bloginfo('template_directory'); ?>/images/plogo.png">
						</a>
					</div>
					<div class="mobile-mini-cart">
					<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></a>
					</div>







				</div>
			</div>
			<div class="content-main">
            	<div class="container">