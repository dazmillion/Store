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

<div class="header-mobile">
  <div class="header-mobile-logo">
    <a class="header-mobile-logo_link" href="<?php echo site_url(); ?>" title="EfikoBooks Home">
      <img class="header-mobile-logo_img" src="<?php bloginfo('template_directory'); ?>/images/plogo.png">
    </a>
  </div>
  <div class="header-mobile-secure">
    <div class="header-mobile-secure-inner">
      <span>Secure Shopping</span>
    </div>
  </div>
</div>