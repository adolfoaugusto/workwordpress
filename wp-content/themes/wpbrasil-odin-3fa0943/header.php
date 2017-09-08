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
	<!-- Google Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

	<!-- CSS Reset -->
	<link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<main class="wrapper">

			<nav class="navigation">
				<section class="container">
					<a class="navigation-title" href="https://milligram.github.io/">
						
						<h1 class="title">Milligram</h1>
					</a>
					<ul class="navigation-list float-right">
						<li class="navigation-item">
							<a class="navigation-link" href="#popover-grid" data-popover>Docs</a>
							<div class="popover" id="popover-grid">
								<ul class="popover-list">
									<li class="popover-item"><a class="popover-link" href="#getting-started" title="Getting Started">Getting Started</a></li>
									<li class="popover-item"><a class="popover-link" href="#typography" title="Typography">Typography</a></li>
									<li class="popover-item"><a class="popover-link" href="#blockquotes" title="Blockquotes">Blockquotes</a></li>
									<li class="popover-item"><a class="popover-link" href="#buttons" title="Buttons">Buttons</a></li>
									<li class="popover-item"><a class="popover-link" href="#lists" title="Lists">Lists</a></li>
									<li class="popover-item"><a class="popover-link" href="#forms" title="Forms">Forms</a></li>
									<li class="popover-item"><a class="popover-link" href="#tables" title="Tables">Tables</a></li>
									<li class="popover-item"><a class="popover-link" href="#grids" title="Grids">Grids</a></li>
									<li class="popover-item"><a class="popover-link" href="#codes" title="Codes">Codes</a></li>
									<li class="popover-item"><a class="popover-link" href="#utilities" title="Utilities">Utilities</a></li>
									<li class="popover-item"><a class="popover-link" href="#tips" title="Tips">Tips</a></li>
									<li class="popover-item"><a class="popover-link" href="#browser-support" title="Browser Support">Browser Support</a></li>
									<li class="popover-item"><a class="popover-link" href="#examples" title="Examples">Examples</a></li>
									<li class="popover-item"><a class="popover-link" href="#contributing" title="Contributing">Contributing</a></li>
								</ul>
							</div>
						</li>
						<li class="navigation-item">
							<a class="navigation-link" href="#popover-support" data-popover>Support</a>
							<div class="popover" id="popover-support">
								<ul class="popover-list">
									<li class="popover-item"><a class="popover-link" target="blank" href="https://github.com/milligram/milligram" title="On Github">On Github</a></li>
									<li class="popover-item"><a class="popover-link" target="blank" href="https://codepen.io/milligramcss" title="On Codepen">On Codepen</a></li>
									<li class="popover-item"><a class="popover-link" target="blank" href="https://facebook.com/milligramcss" title="On Facebook">On Facebook</a></li>
									<li class="popover-item"><a class="popover-link" target="blank" href="https://twitter.com/milligramcss" title="On Twitter">On Twitter</a></li>
									<li class="popover-item"><a class="popover-link" target="blank" href="https://github.com/milligram/milligram/issues/new" title="Need help?">Need help?</a></li>
									<li class="popover-item"><a class="popover-link" target="blank" href="https://github.com/milligram/milligram#license" title="License">License</a></li>
									<li class="popover-item"><a class="popover-link" target="blank" href="https://github.com/milligram/milligram/releases" title="Versions">Versions</a></li>
								</ul>
							</div>
						</li>
					</ul>

				</section>
			</nav>
		</main>
						<?php
							// wp_nav_menu(
							// 	array(
							// 		'theme_location' => 'top-menu',
							// 		'depth'          => 2,
							// 		'container'      => false,
							// 		'menu_class'     => 'nav navbar-nav',
							// 		'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
							// 		'walker'         => new Odin_Bootstrap_Nav_Walker()
							// 	)
							// );
						?>

						<!-- <form method="get" class="navbar-form navbar-right" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
							<label for="navbar-search" class="sr-only">
								<?php _e( 'Search:', 'odin' ); ?>
							</label>
							<div class="form-group">
								<input type="search" value="<?php echo get_search_query(); ?>" class="form-control" name="s" id="navbar-search" />
							</div>
							<button type="submit" class="btn btn-default"><?php _e( 'Search', 'odin' ); ?></button>
						</form> -->



	<?php get_template_part('Carousel-home'); ?>

	<div id="wrapper" class="container topo">
		<div class="row">

		<?php /*
		<div class="tds_video banner">
		    <div class='site-logo img'>
		      <a href="<?php echo home_url(); echo esc_attr( get_theme_mod( 'placeholder_link' ) ); ?>">
		      <?php if ( get_theme_mod( 'imgslug_banner' ) ) { ?>
		        <img src='<?php echo esc_url( get_theme_mod( 'imgslug_banner' ) ); ?>' alt='<?php echo esc_attr( get_theme_mod( 'placeholder_text' ) ); ?>'>
		      <?php } else{
		        //no image banner
		       } ?>
		      </a>
		    </div>
		</div><br/> */
		?>