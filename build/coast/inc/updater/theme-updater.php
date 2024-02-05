<?php
/**
 * Theme updater 
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */

// Includes the files needed for the theme updater
if ( !class_exists( 'EDD_Theme_Updater_Admin' ) ) {
	require get_template_directory() . '/inc/updater/theme-updater-admin.php';
}

// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(

	// Config settings
	$config = array(
		'remote_api_url' => 'https://themepalace.com', // Site where EDD is hosted
		'item_name'      => 'Coast Pro', // Name of theme
		'theme_slug'     => 'coast-pro', // Theme slug
		'version'        => '1.0.0', // The current version of this theme
		'author'         => 'Theme Palace', // The author of this theme
		'download_id'    => '', // Optional, used for generating a license renewal link
		'renew_url'      => 'https://themepalace.com/my-account' // Optional, allows for a custom license renewal link
	),

	// Strings
	$strings = array(
		'theme-license'             => __( 'Theme License', 'coast' ),
		'enter-key'                 => __( 'Enter your theme license key.', 'coast' ),
		'license-key'               => __( 'License Key', 'coast' ),
		'license-action'            => __( 'License Action', 'coast' ),
		'deactivate-license'        => __( 'Deactivate License', 'coast' ),
		'activate-license'          => __( 'Activate License', 'coast' ),
		'status-unknown'            => __( 'License status is unknown.', 'coast' ),
		'renew'                     => __( 'Renew?', 'coast' ),
		'unlimited'                 => __( 'unlimited', 'coast' ),
		'license-key-is-active'     => __( 'License key is active.', 'coast' ),
		'expires%s'                 => __( 'Expires %s.', 'coast' ),
		'%1$s/%2$-sites'            => __( 'You have %1$s / %2$s sites activated.', 'coast' ),
		'license-key-expired-%s'    => __( 'License key expired %s.', 'coast' ),
		'license-key-expired'       => __( 'License key has expired.', 'coast' ),
		'license-keys-do-not-match' => __( 'License keys do not match.', 'coast' ),
		'license-is-inactive'       => __( 'License is inactive.', 'coast' ),
		'license-key-is-disabled'   => __( 'License key is disabled.', 'coast' ),
		'site-is-inactive'          => __( 'Site is inactive.', 'coast' ),
		'license-status-unknown'    => __( 'License status is unknown.', 'coast' ),
		'update-notice'             => __( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'coast' ),
		'update-available'          => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4$s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'coast' )
	)

);
