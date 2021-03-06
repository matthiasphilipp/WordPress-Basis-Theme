<?php
/**
 * Core functions for WP Basis
 * 
 * @package  WP Basis
 * @since    05/08/2012  0.0.1
 * @version  05/08/2012
 * @author   fb
 */

/**
 * Set namespace to encapsulating items
 * @link     http://www.php.net/manual/en/language.namespaces.rationale.php
 * 
 * @since    05/08/2012  0.0.1
 * @version  05/08/2012
 * @author   fb
 */
namespace Wp_Basis\Core;

class Core {
	
	public $default_args = array(
		'wp_update_themes' => TRUE
	);
	
	public function init( $args = FALSE ) {
		
		// Prevent automatic updates
		if ( $args['wp_update_themes'] )
			wp_clear_scheduled_hook( 'wp_update_themes' );
	}
	
} // end class