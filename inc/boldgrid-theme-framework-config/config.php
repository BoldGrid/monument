<?php 
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {
	/**
	 * General Configs
	 */
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-monument'; // Text domain
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;
	$boldgrid_framework_configs['temp']['attribution_links'] = true;

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

		$widget_markup['call-to-action'] = <<<HTML
		<div class="col-sm-12 col-md-12">
			<div class="call-to-action">
				<h1>Monument</h1>
					<p class="p-button-primary"><a class="button-primary" href="contact-us">Request a Quote Today</a></p>
			</div>
		</div> 
HTML;

	// Add CTA to Widget 2
	$boldgrid_framework_configs['widget']['widget_instances']['boldgrid-widget-2'][] = array (
		'title' => 'Call To Action',
		'text' => $widget_markup['call-to-action'],
		'type' => 'visual',
		'filter' => 1,
		'label' => 'black-studio-tinymce'
	);
	
	// Text Contrast Colors
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#333333';

	// Fonts & Icons
	$boldgrid_framework_configs['font']['types'] = array ( 'Pacifico:400|Oswald:400,700|Open+Sans:400' );
	$boldgrid_framework_configs['social-icons']['size'] = 'large';
	
	// Menu Locations
	$boldgrid_framework_configs['menu']['locations']['secondary'] = "Above Site Title";
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = "Above Content Area";
	$boldgrid_framework_configs['menu']['locations']['social'] = "Below Primary Menu";

	// Name Widget Areas
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Above Site Title';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Above Content Area';

	// Configs above will override framework defaults
	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Cinzel';
	$controls['logo_font_size']['default'] = 32;
	$controls['logo_margin_top']['default'] = 5;
	$controls['logo_text_transform']['default'] = 'none';

	// Controls above will override framework defaults
	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );
