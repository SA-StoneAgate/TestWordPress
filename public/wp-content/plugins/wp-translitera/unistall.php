<?php //wp=>3.2 php=>5.2.4

// Если к файлу обращаются напрямую, закроем доступ
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) 
	exit();

$option_name = 'wp_translitera';

// Для обычного сайта.
if ( !is_multisite() ) {
	delete_option( $option_name );
} 
// Для мультисайтовой сборки.
else {
	global $wpdb;

	$blog_ids = $wpdb->get_col( "SELECT blog_id FROM $wpdb->blogs" );
	$original_blog_id = get_current_blog_id();

	foreach ( $blog_ids as $blog_id )   {
		switch_to_blog( $blog_id );
		delete_site_option( $option_name );  
	}

	switch_to_blog( $original_blog_id );
}

