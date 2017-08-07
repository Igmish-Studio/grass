<?php
/**
 * grass Theme Customizer
 *
 * @package grass
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function grass_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	// $wp_customize->get_setting( 'phone' )->transport            = 'postMessage';
	// $wp_customize->add_section( 'phone', array(
	// 	'title' => 'Phone',
	// 	'priority' => 30,
	// ) );
	$wp_customize->add_setting('phone');
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'phone',
		array(
			'label' => __( 'Номер телефона', 'grass' ),
			'section' => 'title_tagline',
			'setting' => 'phone',
			// 'priority' => 100,
			// 'type' => 'text',
		)
	) );
	$wp_customize->add_section( 'social_networks', array(
		'title' => __( 'Социальные сети', 'grass' ),
		'priority' => 30,
	) );
	$wp_customize->add_setting('social_network_vk');
	$wp_customize->add_setting('social_network_facebook');
	$wp_customize->add_setting('social_network_google_plus');
	$wp_customize->add_setting('social_network_odnoklassniki');
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'social_network_vk',
		array(
			'label' => __( 'Vkontakte url', 'grass' ),
			'section' => 'social_networks',
			'setting' => 'social_network_vk',
			'type' => 'url',
		)
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'social_network_facebook',
		array(
			'label' => __( 'Facebook url', 'grass' ),
			'section' => 'social_networks',
			'setting' => 'section_network_facebook',
			'type' => 'url',
		)
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'social_network_google_plus',
		array(
			'label' => __( 'Google+ url', 'grass' ),
			'section' => 'social_networks',
			'setting' => 'section_network_google_plus',
			'type' => 'url',
		)
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'social_network_odnoklassniki',
		array(
			'label' => __( 'Одноклассники url', 'grass' ),
			'section' => 'social_networks',
			'setting' => 'section_network_odnoklassniki',
			'type' => 'url'
		)
	) );

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'grass_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'grass_customize_partial_blogdescription',
		) );
		// $wp_customize->selective_refresh->add_partial( 'phone', array(
		// 	'selector'        => '.site-phone',
		// 	'render_callback' => 'grass_customize_partial_phone',
		// ) );
	}
}
add_action( 'customize_register', 'grass_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function grass_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function grass_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function grass_customize_partial_phone() {

}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function grass_customize_preview_js() {
	wp_enqueue_script( 'grass-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'grass_customize_preview_js' );
