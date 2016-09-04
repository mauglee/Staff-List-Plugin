<?php
/**
 * Provide a admin area view for the export page
 *
 * This file is used to markup the admin-facing export page.
 *
 * @link       http://www.brettshumaker.com
 * @since      1.20
 *
 * @package    Simple_Staff_List
 * @subpackage Simple_Staff_List/admin/partials
 */

$output  = '<div class="wrap sslp-template">';
	$output .= '<div id="icon-edit" class="icon32 icon32-posts-staff-member"><br></div><h2>' . __( 'Simple Staff List', 'simple-staff-list' ) . '</h2>';
	$output .= '<div class="sslp-content sslp-column">';
		$output .= '<h2>' . __( 'Export', 'simple-staff-list' ) .  '</h2>';
		
/*
		ob_start();
		$url = wp_nonce_url('edit.php?post_type=staff-member&page=staff-member-export','staff-member-export');
		$creds = request_filesystem_credentials($url, '', false, false, null);
		if (false === $creds ) {
			return; // stop processing here
		}
		$output .= ob_get_clean();
		
		ob_start();
		if ( ! WP_Filesystem($creds) ) {
			request_filesystem_credentials($url, '', true, false, null);
			return;
		}
		$output .= ob_get_clean();
*/
		
		$output .= '<p>' . __( 'Click the export button below to generate a CSV download of your staff member data.', 'simple-staff-list' ) . '</p>';
		$output .= '<a href="#" class="button button-primary export-button">' . __( 'Export Staff Members', 'simple-staff-list' ) . '</a>';
	$output .= '</div>';
    $output .= '<div class="sslp-sidebar sslp-column last">';
		// Get the sidebar
		ob_start();
		include_once( 'simple-staff-list-admin-sidebar.php' );
		$output .= ob_get_clean();
	$output .= '</div>';
$output .= '</div>';
    
echo $output;