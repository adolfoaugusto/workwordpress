<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/theme.css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/style1.css" rel="stylesheet" media="screen">
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'head',
                        'depth'          => 2,
                        'container'      => false,
                        'menu_class'     => 'top_nav',
                        'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
                        'walker'         => new Odin_Bootstrap_Nav_Walker()
                    )
                );
            ?>
              <!-- <li><a href="index.php">Home</a></li>
              <li><a href="page.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="404.php">Error Page</a></li>
              <li><a href="page.php">Page</a></li> -->
            </ul>
          </div>
          <div class="header_top_right">
            <form action="#" class="navbar-form search_form">
              <input type="search" class="form-control" value="<?php echo get_search_query(); ?>" name="s" id="navbar-search" placeholder="Busca">
              <input type="submit" value="">
            </form>
          </div>
        </div>
        <div class="header_bottom">
          <div class="header_bottom_left">
			<?php //if ( is_home() ) : ?>
          	<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<strong><?php bloginfo( 'name' ); ?></strong>
				<span><?php bloginfo( 'description' ); ?></span>
			</a>
			<?php //else : ?>
		</div>
          <!-- banner 1 header -->
          <?php if ( get_header_image() ) : ?>
			<div class="header_bottom_right">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
				</a>
			</div>
		<?php endif; ?>
          <!-- <div class="header_bottom_right"><a href="#"><img src="images/addbanner_728x90_V1.png" alt=""></a></div> -->
        </div>
      </div>
    </div>
  </header>



	<header id="header" role="banner">
		<div class="container">


			<div id="main-navigation" class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-navigation">
					<span class="sr-only"><?php _e( 'Toggle navigation', 'odin' ); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand visible-xs-block" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</div>
				<nav class="collapse navbar-collapse navbar-main-navigation" role="navigation">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'depth'          => 2,
								'container'      => false,
								'menu_class'     => 'nav navbar-nav',
								'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
								'walker'         => new Odin_Bootstrap_Nav_Walker()
							)
						);
					?>
				</nav><!-- .navbar-collapse -->
			</div><!-- #main-navigation-->

		</div><!-- .container-->
	</header><!-- #header -->

	<div id="wrapper" class="container">
		<div class="row">
