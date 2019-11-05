<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">


	<!-- Favicons -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="icon">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
	<?php wp_head(); ?>
</head>

<body id="body" <?php body_class(); ?>>

	<!--==========================
    Top Bar
============================-->
	<?php
	global $reveal_onep;
	?>
	<section id="topbar" class="d-none d-lg-block">
		<div class="container clearfix">
			<div class="contact-info float-left">
				<i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com"><?php echo $reveal_onep['email']; ?></a>
				<i class="fa fa-phone"></i> <?php echo $reveal_onep['phn']; ?>
			</div>
			<div class="social-links float-right">
				<a href="<?php echo $reveal_onep['twitter']; ?>" class="twitter"><i class="fa fa-twitter"></i></a>
				<a href="<?php echo $reveal_onep['facebook']; ?>" class="facebook"><i class="fa fa-facebook"></i></a>
				<a href="<?php echo $reveal_onep['instagram']; ?>" class="instagram"><i class="fa fa-instagram"></i></a>
				<a href="<?php echo $reveal_onep['gplus']; ?>" class="google-plus"><i class="fa fa-google-plus"></i></a>
				<a href="<?php echo $reveal_onep['linkedin']; ?>" class="linkedin"><i class="fa fa-linkedin"></i></a>
			</div>
		</div>
	</section>

	<!--==========================
    Header
============================-->
	<header id="header">
		<div class="container">
			<div id="logo" class="pull-left">
				<h1><a href="<?php echo esc_url(site_url()) ?>" class="scrollto">Reve<span>al</span></a></h1>
			</div>

			<?php
			wp_nav_menu(array(
				'theme_location'	=>	'primary',
				'menu_class'		=>	'nav-menu',
				'container'			=>	'nav',
				'container_id'		=>	'nav-menu-container',
			));
			?>
		</div>
	</header><!-- #header -->