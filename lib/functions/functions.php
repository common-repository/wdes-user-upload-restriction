<?php

if ( !defined('ABSPATH') ){ exit; }

function wdes_uur_image_restrictions( $wp_query_obj ) {
    global $current_user, $pagenow;
    if( !is_a( $current_user, 'WP_User') ){
        return;
	}
    if( !in_array( $pagenow, array( 'upload.php', 'admin-ajax.php' ) ) ){
        return;
	}
    if( !current_user_can('delete_pages') ){
        $wp_query_obj->set('author', $current_user->ID );
	}
    return;
}