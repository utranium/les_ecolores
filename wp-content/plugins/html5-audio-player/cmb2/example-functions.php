<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'h5ap_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}

/**
 * Conditionally displays a metabox when used as a callback in the 'show_on_cb' cmb2_box parameter
 *
 * @param  CMB2 object $cmb CMB2 object
 *
 * @return bool             True if metabox should show
 */
function h5ap_show_if_front_page( $cmb ) {
	// Don't show this metabox if it's not the front page template
	if ( $cmb->object_id !== get_option( 'page_on_front' ) ) {
		return false;
	}
	return true;
}

/**
 * Conditionally displays a field when used as a callback in the 'show_on_cb' field parameter
 *
 * @param  CMB2_Field object $field Field object
 *
 * @return bool                     True if metabox should show
 */
function h5ap_hide_if_no_cats( $field ) {
	// Don't show this field if not in the cats category
	if ( ! has_tag( 'cats', $field->object_id ) ) {
		return false;
	}
	return true;
}

/**
 * Conditionally displays a message if the $post_id is 2
 *
 * @param  array             $field_args Array of field parameters
 * @param  CMB2_Field object $field      Field object
 */
function h5ap_before_row_if_2( $field_args, $field ) {
	if ( 2 == $field->object_id ) {
		echo '<p>Testing <b>"before_row"</b> parameter (on $post_id 2)</p>';
	} else {
		echo '<p>Testing <b>"before_row"</b> parameter (<b>NOT</b> on $post_id 2)</p>';
	}
}

add_action( 'cmb2_admin_init', 'h5ap_register_demo_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function h5ap_register_demo_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_ahp_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Configure your Audio player' ),
		'object_types'  => array( 'audioplayer', ), // Post type
		// 'show_on_cb' => 'h5ap_show_if_front_page', // function should return a bool value
		// 'context'    => 'normal',
		// 'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
	) );


	$cmb_demo->add_field( array(
		'name' => __( 'Upload audio', 'cmb2' ),
		'desc' => __( 'Upload an mp3, Wav or Ogg file', 'cmb2' ),
		'id'   => $prefix . 'audio-file',
		'type' => 'file',
	) );

	




	$cmb_demo->add_field( array(
		'name'             => __( 'Repeat', 'cmb2' ),
		'desc'             => __( '', 'cmb2' ),
		'id'               => $prefix . 'audio-repeat',
		'type'             => 'radio_inline',
		'options'          => array(
			'once' => __( 'Repeat Once', '' ),
			'loop'   => __( 'Repeat again and again', 'loop' ),
		),
	) );







	$cmb_demo->add_field( array(
		'name' => __( 'Muted', 'cmb2' ),
		'desc' => __( 'Check if you want the audio output should be muted', 'cmb2' ),
		'id'   => $prefix . 'audio-muted',
		'type' => 'checkbox',
	) );

	$cmb_demo->add_field( array(
		'name' => __( 'Auto Play', 'cmb2' ),
		'desc' => __( 'Check if you want audio will start playing as soon as it is ready', 'cmb2' ),
		'id'   => $prefix . 'audio-autoplay',
		'type' => 'checkbox',
	) );

	$cmb_demo->add_field( array(
		'name'             => __( 'Player width', 'cmb2' ),
		'desc'             => __( 'Select the width of the audio player. Select NONE for <b>RESPONSIVE</b> player.', 'cmb2' ),
		'id'               => $prefix . 'audio-size',
		'type'             => 'select',
		'show_option_none' => true,
		'options'          => array(
			'width:130px' => __( '130px', 'cmb2' ),
			'width:200px'   => __( '200px ', 'cmb2' ),
			'width:250px'   => __( '250px ', 'cmb2' ),
			'width:300px'     => __( '300px ', 'cmb2' ),
			'width:350px'     => __( '350px ', 'cmb2' ),
			'width:400px'     => __( '400px ', 'cmb2' ),
			'width:450px'     => __( '450px ', 'cmb2' ),
			'width:500px'     => __( '500px ', 'cmb2' ),
			'width:550px'     => __( '550px ', 'cmb2' ),
			'width:600px'     => __( '600px ', 'cmb2' ),
			'width:650px'     => __( '650px ', 'cmb2' ),
			'width:700px'     => __( '700px ', 'cmb2' ),
			'width:750px'     => __( '750px ', 'cmb2' ),
			'width:800px'     => __( '800px ', 'cmb2' ),
			'width:850px'     => __( '850px ', 'cmb2' ),
			'width:900px'     => __( '900px ', 'cmb2' ),
			'width:950px'     => __( '950px ', 'cmb2' ),
			'width:1000px'     => __( '1000px ', 'cmb2' ),
			'width:1050px'     => __( '1050px ', 'cmb2' ),
			'width:1100px'     => __( '1100px ', 'cmb2' ),
			'width:1150px'     => __( '1150px ', 'cmb2' ),
			'width:1200px'     => __( '1200px ', 'cmb2' ),

		),
	) );

}