<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package BoldGrid
 */
?><!DOCTYPE html>
<?php do_action( 'boldgrid_html_before' ); ?>
<html <?php language_attributes(  ); ?>>
<head>
	<?php
	do_action( 'boldgrid_head_top' );
	wp_head(  );
	do_action( 'boldgrid_head_bottom' );
	?>
</head>

<body <?php body_class(  ); ?> <?php BoldGrid_Framework_Schema::body( true ); ?>>
<?php do_action( 'boldgrid_body_top' ); ?>
<div id="page" class="hfeed site">
<?php do_action( 'boldgrid_header_before' ); ?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<div class="sidebar">
					<header id="masthead" class="site-header" role="banner" <?php BoldGrid_Framework_Schema::header( true ); ?>> 
						<?php BoldGrid::skip_link(  ); ?>
						<?php do_action( 'boldgrid_header_top' ); ?>
						<div class="col-md-12">
							<?php do_action( 'boldgrid_menu_secondary' ); ?>
							<?php dynamic_sidebar( 'boldgrid-widget-1' ); ?>
						</div>
						<div class="col-md-12">
							<div class="site-branding">
								<?php do_action('boldgrid_site_title'); ?>
								<?php do_action('boldgrid_print_tagline'); ?>
							</div>
						</div>
						<div class="col-md-12">
							<?php if ( has_nav_menu( 'primary' ) ) : ?>
								<nav id="site-navigation" class="navbar navbar-default" role="navigation">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-navbar">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
									<?php do_action( 'boldgrid_menu_primary' ); ?>
								</nav>
							<?php endif; ?>
						</div>
						<div class="col-md-12">
							<?php do_action('boldgrid_menu_social'); ?>
						</div>
						<?php do_action( 'boldgrid_header_bottom' ); ?>
					</header><!-- .site-header -->
					<?php do_action( 'boldgrid_header_after' ); ?>
				</div>
			</div>
			<div class="col-md-9">
