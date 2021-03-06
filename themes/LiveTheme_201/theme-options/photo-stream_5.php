<?php

$options = array (

	array(	"name" => __("Enter Flickr User Name", "livetheme"),
			"desc" => __("Specify the user name to display a Flickr photo stream below the video. Delete the user name to hide the photo stream area.", "livetheme"),
			"id" => "flickr_username",
			"type" => "text",
			"std" => ""
	),
  
  array(
    "name" => __("Use Safe Mode?", "livetheme"),
    "desc" => __("Problems with your Flickr feed? Select this option and place your <a href=\"http://livetheme.tv/docs/#flickr_settings\">Flickr ID</a> in the field above.", "livetheme"),
    "id" => "flickr_safe_mode",
    "type" => "select",
    "default_text" => __("No", "livetheme"),
    "options" => array(
      __("Yes", "livetheme") => "Yes",
    )
  ),
	
);

/* ------------ Do not edit below this line ----------- */

//Check if theme options set
global $default_check;
global $default_options;

if(!$default_check):
    foreach($options as $option):
        if($option['type'] != 'image'):
            $default_options[$option['id']] = $option['value'];
        else:
            $default_options[$option['id']] = $option['url'];
        endif;
    endforeach;
    $update_option = get_option('standard_framework_'.STANDARD_FRAMEWORK_SHORT_NAME);
    if(is_array($update_option)):
        $update_option = array_merge($update_option, $default_options);
        update_option('standard_framework_'.STANDARD_FRAMEWORK_SHORT_NAME, $update_option);
    else:
        update_option('standard_framework_'.STANDARD_FRAMEWORK_SHORT_NAME, $default_options);
    endif;
endif;

render_options($options);
?>				