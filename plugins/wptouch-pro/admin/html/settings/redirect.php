<?php 
	$settings = wptouch_get_settings();
	
	ob_start();
	wp_dropdown_pages(); 
	$contents = ob_get_contents();
	ob_end_clean();
	
	$contents = str_replace( 'page_id', 'home_page_redirect_target', $contents );
	$value_string = 'value="' . $settings->home_page_redirect_target . '"';
	$contents = str_replace( $value_string, $value_string . ' selected', $contents );
	
	echo $contents;
	
?>
<label for="enable_home_page_redirect"><?php _e( "Redirect target", "wptouch-pro" ); ?></label>