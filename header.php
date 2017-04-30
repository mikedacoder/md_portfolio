<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Michael Dryburgh">
<!--Don't cache me in-->
<meta http-equiv="pragma" content="no-cache">
<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- wrapper clearfix -->
	<div class="wrapper">

		<!-- site header -->
		<header class="site-header clearfix">
			<div class="avatar">				
				<a href="<?php echo get_permalink( get_page_by_path( 'about' )); ?>"><?php echo get_avatar(1); ?></a>
				</div>
			<div class="title">				
				<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
				<h2><a href="<?php echo home_url(); ?>"><?php bloginfo('description'); ?></a></h2>
			</div>
			<div class="portfolio-header clearfix">
				<h3>Portfolio</h3>
				<nav class="contact-info">
					<?php 
						$args = array(
							'theme_location' => 'primary'
						);
					?>
					<?php wp_nav_menu( $args ); ?>
				</nav>				
			</div>						
					
		</header><!-- /site header -->

