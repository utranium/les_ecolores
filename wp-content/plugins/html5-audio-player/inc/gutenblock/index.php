<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



function h5ap_ter_block_type($myBlockName, $h5ap_BlockOption = array()) {
	register_block_type(
		'h5ap-kit/' . $myBlockName,
		array_merge(
			array(
				'editor_script' => 'h5ap-kit-editor-script',
				'editor_style' => 'h5ap-kit-editor-style',
				'script' => 'h5ap-kit-front-script',
				'style' => 'h5ap-kit-front-style'
			),
			$h5ap_BlockOption
		)
	);
}

function h5ap_blocks_script() {
	wp_register_script(
		'h5ap-kit-editor-script',
		plugins_url('dist/js/editor-script.js', __FILE__),
		array(
			'wp-blocks',
			'wp-i18n',
			'wp-element',
			'wp-editor',
			'wp-components',
			'wp-compose',
			'wp-data',
			'wp-autop',
		)
	);	
	h5ap_ter_block_type('kahf-banner-k27f', array(
		'render_callback' => 'h5ap_block_custom_post_fun',
		'attributes' => array(
			'postName' => array(	
				'type' => 'string',
				'source' => 'html',
			),
		)
	));
	
}
add_action('init', 'h5ap_blocks_script');



function h5ap_block_custom_post_fun ( $attributes, $content ) {
	
	return wpautop( $content );
}