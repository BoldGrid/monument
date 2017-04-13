<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {

	// Text Domain.
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-monument';

	// Enable Sticky Footer.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;

	// Enable typography controls.
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;

	// Enable attribution links.
	$boldgrid_framework_configs['temp']['attribution_links'] = true;

	// Enable template wrapper.
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;

	// Specify the parent theme's name.
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';

	// Select the header template to use.
	$boldgrid_framework_configs['template']['header'] = 'generic';

	// Select the footer template to use.
	$boldgrid_framework_configs['template']['footer'] = 'generic';

	// Give blog pages a fluid container.
	$boldgrid_framework_configs['template']['pages']['blog'] = 'container-fluid';

	// Give page_home.php a fluid container.
	$boldgrid_framework_configs['template']['pages']['global']['header'] = 'container-fluid';

	// Give page_home.php a fluid container.
	$boldgrid_framework_configs['template']['pages']['global']['footer'] = 'container-fluid';

	// Give default page a fluid container.
	$boldgrid_framework_configs['template']['pages']['default']['entry-header'] = 'container-fluid';

	// Give default page a fluid container.
	$boldgrid_framework_configs['template']['pages']['default']['entry-footer'] = 'container-fluid';

	// Give default page a fluid container.
	$boldgrid_framework_configs['template']['pages']['default']['entry-content'] = 'container-fluid';

	// Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'1' => array( '[menu]secondary', '[widget]boldgrid-widget-1' ),
		'5' => array( '[action]boldgrid_site_identity' ),
		'8' => array( '[action]boldgrid_primary_navigation' ),
		'11' => array( '[menu]social' ),
	);

	// Assign Locations for Generic Footer.
	$boldgrid_framework_configs['template']['locations']['footer'] = array(
		'1' => array( '[widget]boldgrid-widget-3' ),
		'5' => array( '[menu]footer_center' ),
		'8' => array( '[action]boldgrid_display_attribution_links' ),
	);

	// This theme doesn't have a Call To Action.
	$boldgrid_framework_configs['template']['call-to-action'] = 'home-only';

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array (
		array (
			'default' => true,
			'format' => 'palette-primary',
			'colors' => array(
				'#585e6b',
				'#2d3037',
				'#18191a',
				'#ff000a',
				'#ffffff',
			)
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#0f314c',
				'#63899b',
				'#222222',
				'#3390af',
				'#656b62',
			)
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#d6c5ad',
				'#5e544f',
				'#00827d',
				'#27516d',
				'#8b7a5e',
			)
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#dbd9b7',
				'#717775',
				'#272f49',
				'#949a8e',
				'#615566',
			)
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#006599',
				'#969696',
				'#571b3c',
				'#c15157',
				'#341931',
			)
		),
	);

	// Override Options per Subcategory.
	switch ( $boldgrid_framework_configs['inspiration']['subcategory_key'] ) {
		case 'Fashion':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		case 'General':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		case 'Marketing':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		case 'Property Management':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;

		// Default Behavior.
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			break;
	}

		$widget_markup['call-to-action'] = <<<HTML
		<div class="col-sm-12 col-md-12">
			<div class="call-to-action">
				<h1>Monument</h1>
					<p class="p-button-primary"><a class="button-primary" href="contact-us">Request a Quote Today</a></p>
			</div>
		</div>
HTML;

	// Add CTA to Widget 2.
	$boldgrid_framework_configs['widget']['widget_instances']['boldgrid-widget-2'][] = array (
		'title' => 'Call To Action',
		'text' => $widget_markup['call-to-action'],
		'type' => 'visual',
		'filter' => 1,
		'label' => 'black-studio-tinymce',
	);

	// Text Contrast Colors.
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#333333';

	// Typography Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Cinzel';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'none';

	// Typography Alternate Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Serif';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'none';

	// Typography Navigation.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Cinzel';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 16;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'uppercase';

	// Typography Body.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Serif';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 140;

	// Typography Tagline Classes.
	$boldgrid_framework_configs['template']['tagline-classes'] = 'h5 alt-font';

	// Typography Relationships.
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.call-to-action h1'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 6.45,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.mod-alpha h2, .mod-beta h2'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 3.75,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.mod-beta-2 h3'] = array(
		'type' => 'subheadings',
		'round' => 'floor',
		'amount' => 1.3,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.mod-alpha p'] = array(
		'type' => 'subheadings',
		'round' => 'floor',
		'amount' => 1.2,
	);

	// Icons.
	$boldgrid_framework_configs['social-icons']['size'] = 'large';

	// Menu Locations.
	$boldgrid_framework_configs['menu']['locations']['secondary'] = 'Above Site Title';
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = 'Above Content Area';
	$boldgrid_framework_configs['menu']['locations']['social'] = 'Below Primary Menu';

	// Name Widget Areas.
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Above Site Title';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Above Content Area';

	// Configs above will override framework defaults.
	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Prevents Editor plugin from removing container on this theme.
 *
 * @param array $boldgrid_framework_configs
 */
function bgtfw_container_overrides( $boldgrid_framework_configs ) {

	// Give page_home.php a fluid container.
	$boldgrid_framework_configs['template']['pages']['default']['entry-content'] = 'container-fluid';

	return $boldgrid_framework_configs;
}

add_filter( 'boldgrid_theme_framework_config', 'bgtfw_container_overrides', 60 );

/**
 * Site Title & Logo Controls
 */
function boldgrid_filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Cinzel';
	$controls['logo_font_size']['default'] = 32;
	$controls['logo_margin_top']['default'] = 5;
	$controls['logo_text_transform']['default'] = 'none';
	$controls['logo_text_decoration_hover']['default'] = 'none';

	// Controls above will override framework defaults.
	return $controls;
}
add_filter( 'kirki/fields', 'boldgrid_filter_logo_controls' );

/**
 * Opens the wrap container.
 *
 * @since 1.0.0
 */
function boldgrid_container_wrap_top() {
	?>
<div class="bgtfw">
	<div class="row">
		<div class="col-md-3">
			<div class="sidebar-nav">
	<?php
}
add_action( 'boldgrid_header_before', 'boldgrid_container_wrap_top', 30 );

/**
 * Closes the left sidebar.
 *
 * @since 1.0.0
 */
function boldgrid_sidebar_close() {
	?>
			</div>
		</div>
	<?php
}
add_action( 'boldgrid_header_after', 'boldgrid_sidebar_close' );

/**
 * Opens the content col-md-9.
 *
 * @since 1.0.0
 */
function boldgrid_body_wrap_top() {
	?>
		<div class="col-md-9 full-width">
	<?php
}
add_action( 'boldgrid_content_before', 'boldgrid_body_wrap_top' );

/**
 * Closes the content col-md-9.
 *
 * @since 1.0.0
 */
function boldgrid_body_wrap_bottom() {
	?>
		</div>
	<?php
}
add_action( 'boldgrid_content_after', 'boldgrid_body_wrap_bottom' );

/**
 * Closes the wrap container.
 *
 * @since 1.0.0
 */
function boldgrid_container_wrap_bottom() {
	?>
	</div>
</div><!-- end of content wrap -->
	<?php
}
add_action( 'boldgrid_footer_before', 'boldgrid_container_wrap_bottom', 30 );

function boldgrid_tertiary_menu() {
	do_action( 'boldgrid_menu_tertiary' );
}
add_action( 'after_entry_title', 'boldgrid_tertiary_menu' );
