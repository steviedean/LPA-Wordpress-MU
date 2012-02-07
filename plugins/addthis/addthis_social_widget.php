<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
/* 
* +--------------------------------------------------------------------------+
* | Copyright (c) 2008-2009 Add This, LLC                                    |
* +--------------------------------------------------------------------------+
* | This program is free software; you can redistribute it and/or modify     |
* | it under the terms of the GNU General Public License as published by     |
* | the Free Software Foundation; either version 2 of the License, or        |
* | (at your option) any later version.                                      |
* |                                                                          |
* | This program is distributed in the hope that it will be useful,          |
* | but WITHOUT ANY WARRANTY; without even the implied warranty of           |
* | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            |
* | GNU General Public License for more details.                             |
* |                                                                          |
* | You should have received a copy of the GNU General Public License        |
* | along with this program; if not, write to the Free Software              |
* | Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA |
* +--------------------------------------------------------------------------+
*/

if (!defined('ADDTHIS_INIT')) define('ADDTHIS_INIT', 1);
else return;

/**
* Plugin Name: AddThis Social Bookmarking Widget
* Plugin URI: http://www.addthis.com
* Description: Help your visitor promote your site! The AddThis Social Bookmarking Widget allows any visitor to bookmark your site easily with many popular services. Sign up for an AddThis.com account to see how your visitors are sharing your content--which services they're using for sharing, which content is shared the most, and more. It's all free--even the pretty charts and graphs.
* Version: 2.0.4
*
* Author: The AddThis Team
* Author URI: http://www.addthis.com/blog
*/

$addthis_settings = array();
$addthis_settings['isdropdown'] = 'true';
$addthis_settings['customization'] = '';
$addthis_settings['menu_type'] = 'dropdown';
$addthis_settings['language'] = 'en';
$addthis_settings['username'] = '';
$addthis_settings['fallback_username'] = '';
$addthis_settings['style'] = 'share';

$addthis_languages = array(''=>'Automatic','af'=>'Afrikaaner', 'ar'=>'Arabic', 'zh'=>'Chinese', 'cs'=>'Czech', 'da'=>'Danish', 'nl'=>'Dutch', 'en'=>'English', 'fa'=>'Farsi', 'fi'=>'Finnish', 'fr'=>'French', 'ga'=>'Gaelic', 'de'=>'German', 'el'=>'Greek', 'he'=>'Hebrew', 'hi'=>'Hindi', 'it'=>'Italian', 'ja'=>'Japanese', 'ko'=>'Korean', 'lv'=>'Latvian', 'lt'=>'Lithuanian', 'no'=>'Norwegian', 'pl'=>'Polish', 'pt'=>'Portugese', 'ro'=>'Romanian', 'ru'=>'Russian', 'sk'=>'Slovakian', 'sl'=>'Slovenian', 'es'=>'Spanish', 'sv'=>'Swedish', 'th'=>'Thai', 'ur'=>'Urdu', 'cy'=>'Welsh', 'vi'=>'Vietnamese');

$addthis_menu_types = array('static', 'dropdown', 'toolbox');

$addthis_styles = array(
                      'share' => array('img'=>'lg-share-%lang%.gif', 'w'=>125, 'h'=>16),
                      'bookmark' => array('img'=>'lg-bookmark-en.gif', 'w'=>125, 'h'=>16),
                      'addthis' => array('img'=>'lg-addthis-en.gif', 'w'=>125, 'h'=>16),
                      'share-small' => array('img'=>'sm-share-%lang%.gif', 'w'=>83, 'h'=>16),
                      'bookmark-small' => array('img'=>'sm-bookmark-en.gif', 'w'=>83, 'h'=>16),
                      'plus' => array('img'=>'sm-plus.gif', 'w'=>16, 'h'=>16)
                      /* Add your own style here, like this:
                        , 'custom' => array('img'=>'http://example.com/button.gif', 'w'=>16, 'h'=>16) */
                    );
$addthis_new_styles = array(

    'small_toolbox' => array( 'src' =>  '<div class="addthis_toolbox addthis_default_style addthis_" %s ><a class="addthis_button_preferred_1"></a><a class="addthis_button_preferred_2"></a><a class="addthis_button_preferred_3"></a><a class="addthis_button_preferred_4"></a><a class="addthis_button_compact"></a></div>', 'img' => 'toolbox-small.png', 'name' => 'Small Toolbox', 'above' => 'hidden ', 'below' => ''
    ), // 32x32

    'small_toolbox_with_share' => array( 'src' =>  '<div class="addthis_toolbox addthis_default_style " %s ><a href="http://addthis.com/bookmark.php?v=250&amp;username=xa-4d2b47597ad291fb" class="addthis_button_compact">Share</a><span class="addthis_separator">|</span><a class="addthis_button_preferred_1"></a><a class="addthis_button_preferred_2"></a><a class="addthis_button_preferred_3"></a><a class="addthis_button_preferred_4"></a></div>', 'img' => 'small-toolbox.jpg', 'name' => 'Small Toolbox with Share first', 'above' => '', 'below' => 'hidden' 
    ), // Plus sign share | four buttons
    'large_toolbox' => array( 'src' =>  '<div class="addthis_toolbox addthis_default_style addthis_32x32_style" %s ><a class="addthis_button_preferred_1"></a><a class="addthis_button_preferred_2"></a><a class="addthis_button_preferred_3"></a><a class="addthis_button_preferred_4"></a><a class="addthis_button_compact"></a></div>', 'img' => 'toolbox-large.png', 'name' => 'Large Toolbox', 'above' => 'hidden ', 'below' => ''
    ), // 32x32
    'fb_tw_sc' => array( 'src' => '<div class="addthis_toolbox addthis_default_style " %s  ><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a><a class="addthis_button_tweet"></a><a class="addthis_counter addthis_pill_style"></a></div>' , 'img' => 'fb-tw-sc.jpg' , 'name' => 'Like, Tweet, Counter', 'above' => '', 'below' => 'hidden'
    ), // facebook tweet share counter
    'simple_button' => array('src' => '<div class="addthis_toolbox addthis_default_style " %s><a href="http://addthis.com/bookmark.php?v=250&amp;username=xa-4d2b47f81ddfbdce" class="addthis_button_compact">Share</a></div>', 'img' => 'share.jpg', 'name' => 'Share Button', 'above' => 'hidden ', 'below' => 'hidden'
    ), // Plus sign share
    'button' => array( 'src' => '<div><a class="addthis_button" href="http://addthis.com/bookmark.php?v=250" %s><img src="http://cache.addthis.com/cachefly/static/btn/v2/lg-share-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0"/></a></div>', 'img' => 'button.jpg', 'name' => 'Classic Share Button', 'above' => 'hidden ', 'below' => 'hidden'
    ), // classic
    'share_counter' => array( 'src' => '<div class="addthis_toolbox addthis_default_style " %s  ><a class="addthis_counter"></a></div>', 'img' => 'share_counter.png', 'name' => 'Share Counter', 'above' => 'hidden ', 'below' => 'hidden' 
    ),
);


add_filter('the_title', 'at_title_check');
function at_title_check($title)
{
    
    global $addthis_did_filters_added;
    
    if (!isset ($addthis_did_filters_added) || $addthis_did_filters_added != true)
    { 
        addthis_add_content_filters(); 
        add_filter('the_content', 'addthis_script_to_content');
    }
    else
    {
    }

    return $title;
}

function addthis_script_to_content($content)
{
    global $addthis_did_script_output;

    if (!isset($addthis_did_script_output) )
    {
        $addthis_did_script_output = true;
        $content .= addthis_output_script(true);
    }
    return $content ;
}

define( 'addthis_style_default' , 'small_toolbox_with_share');
define( 'ADDTHIS_PLUGIN_VERSION', '2.0.4');
/**
 * Converts our old many options in to one beautiful array
 *
 */
function addthis_options_200()
{
    
    global $current_user;
    $user_id = $current_user->ID;
    $addthis_new_options = array();
    if ($username = get_option('addthis_username'))
        $addthis_new_options['username'] = $username;

    if ($password = get_option('addthis_password'))
        $addthis_new_options['password'] = $password;

    if ($show_stats = get_option('addthis_show_stats'))
        $addthis_new_options['addthis_show_stats'] = $show_stats;
    
    if ($append_data = get_option('addthis_append_data'))
        $addthis_new_options['addthis_append_data'] = $append_data;
    
    if ($showonhome = get_option('addthis_showonhome'))
        $addthis_new_options['addthis_showonhome'] = $showonhome;
    
    if ($showonpages = get_option('addthis_showonpages'))
        $addthis_new_options['addthis_showonpages'] = $showonpages;
    
    if ($showoncats = get_option('addthis_showoncats'))
        $addthis_new_options['addthis_showoncats'] = $showoncats;
   
    if ($showonarchives = get_option('addthis_showonarchives'))
        $addthis_new_options['addthis_showonarchives'] = $showonarchives;

    if (get_option('addthis_showonposts') != true)
        $addthis_new_options['below'] = 'none';
    elseif (get_option('addthis_sidebar_only') == true)
        $addthis_new_options['below'] = 'none';
    else
    {
        if ( ($menu_type = get_option('addthis_menu_type')) == 'toolbox' )
            $addthis_new_options['below'] = 'small_toolbox_with_share';
        else
            $addthis_new_options['below'] = 'button'; 
    }
    if ($header_background = get_option('addthis_header_background'))
        $addthis_new_options['addthis_header_background'] = $header_background;
    if ($header_color = get_option('addthis_header_color'))
        $addthis_new_options['addthis_header_color'] = $header_color;
    if ($brand = get_option('addthis_brand'))
        $addthis_new_options['addthis_brand'] = $brand;
    if ($language = get_option('addthis_language'))
        $addthis_new_options['addthis_language'] = $language;


    // Above is new, set it to none
    $addthis_new_options['above'] = 'none';

    // Save option
     add_option('addthis_settings', $addthis_new_options);

    // if the option saved, delete the old options
    
    delete_option('addthis_show_stats');
    delete_option('addthis_password');
    delete_option('addthis_fallback_username');
    delete_option('addthis_options'); 
    delete_option('addthis_product');
    delete_option('addthis_isdropdown');
    delete_option('addthis_menu_type');
    delete_option('addthis_append_data');
    delete_option('addthis_showonhome');
    delete_option('addthis_showonposts');
    delete_option('addthis_showonpages');
    delete_option('addthis_showoncats');
    delete_option('addthis_showonarchives');
    delete_option('addthis_style');
    delete_option('addthis_header_background');
    delete_option('addthis_header_color');
    delete_option('addthis_sidebar_only');
    delete_option('addthis_brand');
    delete_option('addthis_language');;
   

    global $current_user;
    $user_id = $current_user->ID;

    add_user_meta($user_id, 'addthis_nag_updated_options', 'true', true);

    

}

function addthis_options_210()
{
    $options = get_option('addthis_settings'); 
    if ( isset( $options['username'] ) )
        $options['profile'] = $options['username'];

    update_option( 'addthis_settings', $options); 

}



/**
* Generates unique IDs
*/
function cuid()
{
    $mt  = dechex(mt_rand(0,min(0xffffffff,mt_getrandmax())));
    $now = dechex(time());
    $cuid =  $now . str_pad($mt, 8, '0', STR_PAD_LEFT);
    return $cuid;
} 

define('ADDTHIS_FALLBACK_USERNAME', 'wp-'.cuid() );

/**
* Returns major.minor WordPress version.
*/
function addthis_get_wp_version() {
    return (float)substr(get_bloginfo('version'),0,3); 
}

/**
* For templates, we need a wrapper for printing out the code on demand. 
*/
function addthis_print_widget($url=null, $title=null, $style = addthis_style_default ) {
    global $addthis_new_styles ; 

    $identifier = addthis_get_identifier($url, $title);

echo "\n<!-- AddThis Custom -->\n";


    if ( ! is_array($style) &&  isset($addthis_new_styles[$style]) ){
        echo sprintf($addthis_new_styles[$style]['src'], $identifier);
    }
    
    elseif (is_array($style))
        echo addthis_custom_toolbox($style, $url, $title);
echo "\n<!-- End AddThis Custom -->\n";
}

/*
* Generates the addthis:url and addthis:title attributes
*/

function addthis_get_identifier($url = null, $title = null)
{

    if (! is_null($url) )
        $identifier =  "addthis:url='$url' ";
    if (! is_null($title) )
        $identifier .= "addthis:title='$title'"; 
   
    if (! isset($identifier) )
        $identifier = '';

    return $identifier;

}

/**
* Options is an array that contains
* size - either 16 or 32.  Defaults to 16
* services - comma sepperated list of services
* preferred - number of Prefered services to be displayed after listed services
* more - bool to show or not show the more icon at the end
*
* @param $options array
*/

function addthis_custom_toolbox($options, $url, $title)
{
    $identifier = addthis_get_identifier($url, $title);

    $outerClasses = 'addthis_toolbox addthis_default_style';

    if (isset($options['size']) && $options['size'] == '32')
        $outerClasses .= ' addthis_32x32_style';

    $button = '<div class="'.$outerClasses.'" '.$identifier.' >'; 
    
    if (isset($options['services']) )
    {
        $services = explode(',', $options['services']);
        foreach ($services as $service)
        {
            $service = trim($service);
            if ($service == 'more')
                $button .= '<a class="addthis_button_compact"></a>';
            else
                $button .= '<a class="addthis_button_'.$service.'"></a>';
        }
    }
    
    if (isset($options['preferred']) && is_numeric($options['preferred']))
    {
        for ($a = 1; $a <= $options['preferred']; $a++)
        {
            $button .= '<a class="addthis_button_preferred_'.$a.'"></a>';
        }
    }

    if (isset($options['more']) && $options['more'] == true)
    {
            $button .= '<a class="addthis_button_compact"></a>';
    }
    
    $button .= '</div>';

    return $button;

}


/**
* Adds AddThis CSS to page. Only used for admin dashboard in WP 2.7 and higher.
*/
function addthis_print_style() {
    wp_enqueue_style( 'addthis' );
}

/**
* Adds AddThis script to page. Only used for admin dashboard in WP 2.7 and higher.
*/
function addthis_print_script() {
    wp_enqueue_script( 'addthis' );
}

add_action('admin_notices', 'addthis_admin_notices');

function addthis_admin_notices(){
    if (! current_user_can('manage_options'))
        return;
    global $current_user;
    $user_id = $current_user->ID;
    $options = get_option('addthis_settings'); 

    if ($options == false && ! get_user_meta($user_id, 'addthis_ignore_notices'))
    {
        echo '<div class="updated addthis_setup_nag"><p>'; 
        printf(__('Setup the AddThis plugin so you can start having your users share your content around the web<br /> <a href="%1$s">Setup options</a> | <a href="%2$s" id="php_below_min_nag-no">Ignore this notice</a>'), admin_url('options-general.php?page=addthis/addthis_social_widget.php'), '?addthis_nag_ignore=0'); 
        echo "</p></div>";
    }
    
    elseif ( ( ! isset($options['username']) ||  $options['username'] == false) && ! get_user_meta($user_id, 'addthis_nag_username_ignore'))
    {
        echo '<div class="updated addthis_setup_nag"><p>'; 
        printf( __('Sign up for AddThis and add your username/password to recieve analytics about how people are sharing your content.<br /> <a href="%1$s">Enter username and password</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="%2$s target="_blank">Sign Up</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="%3$s">Ignore this notice</a>'), admin_url('options-general.php?page=addthis/addthis_social_widget.php'), 'https://www.addthis.com/register',  '?addthis_nag_username_ignore=0');
        echo "</p></div>";
    }
    elseif ( (get_user_meta($user_id, 'addthis_nag_updated_options') == true  ) ) 
    {
        echo '<div class="updated addthis_setup_nag"><p>'; 
        printf( __('We have updated the options for the AddThis plugin.  Check out the <a href="%1$s">AddThis settings page</a> to see the new styles and options.<br /> <a href="%1$s">See New Options</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="%2$s">Ignore this notice</a>'), admin_url('options-general.php?page=addthis/addthis_social_widget.php'), '?addthis_nag_updated_ignore=0');
        echo "</p></div>";
    }
}
add_action('admin_init', 'addthis_nag_ignore');

function addthis_nag_ignore()
{
    global $current_user;
    $user_id = $current_user->ID;
    
    $options = get_option('addthis_settings'); 

    if (isset($_GET['addthis_nag_ignore']) && '0' == $_GET['addthis_nag_ignore'])
        add_user_meta($user_id, 'addthis_ignore_notices', 'true', true);
    if (isset($_GET['addthis_nag_username_ignore']) && '0' == $_GET['addthis_nag_username_ignore'])
        add_user_meta($user_id, 'addthis_nag_username_ignore', 'true', true);
    if (isset($_GET['addthis_nag_updated_ignore']) && '0' == $_GET['addthis_nag_updated_ignore'])
        delete_user_meta($user_id, 'addthis_nag_updated_options', 'true');


}

function addthis_plugin_useragent($userAgent)
{
    return $userAgent . 'ATV/' . ADDTHIS_PLUGIN_VERSION;
}


add_action('wp_ajax_at_show_dashboard_widget', 'addthis_render_dashboard_widget');
/**
* Our admin dashboard widget shows yesterday's top shared content and top shared-to services.
* Data is fetched via AJAX. We assume jQuery is available on any WP install supporting 
* dashboard widgets.
*
* @see js/addthis.js
* @see js/addthis.css
*/
function addthis_render_dashboard_widget() {
   if (! current_user_can('manage_options'))
   {
       _e( 'Cheatin&#8217; uh?' );
       exit;
   }
   $_services = array(
        'netvibes'     => 'Netvibes',
        'google'       => 'Google Reader',
        'yahoo'        => 'Yahoo',
        'rojo'         => 'Rojo',
        'aol'          => 'AOL',
        'newsgator-on' => 'Newsgator Online',
        'pluck-on'     => 'Pluck Online',
        'bloglines'    => 'Bloglines',
        'feedlounge'   => 'Feedlounge',
        'newsburst'    => 'Newsburst',
        'msn'          => 'MSN',
        'winlive'      => 'Windows Live',
        'technorati'   => 'Technorati',
        'pageflakes'   => 'Pageflakes',
        'newsalloy'    => 'News Alloy',
        'feedreader'   => 'FeedReader',
        'mymsn'        => 'My MSN',
        'newsisfree'   => 'Newsisfree',
        'feeddemon'    => 'FeedDemon',
        'netnewswire'  => 'NetNewWire',
        'pluck'        => 'Pluck',
        'newsgator'    => 'NewsGator',
        'sharpreader'  => 'SharpReader',
        'awasu'        => 'Awasu',
        'myearthlink'  => 'myEarthLink',
        'rss'          => 'Direct Feed Link',
        'googlebuzz'   => 'Google Buzz',
        'youtube'      => 'YouTube',
        'facebook'     => 'Facebook',
        'flickr'       => 'Flickr',
        'twitter'      => 'Twitter',
        'linkedin'     => 'LinkedIn'
    ); 
    
    
    global $addthis_settings;
    $options = get_option('addthis_settings');
    if (isset($options['username']))
        $username = urlencode($options['username']);
    else
    {
        echo 'No Username entered';
        return false;
    }
    if (isset($options['password']))
        $password = urlencode($options['password']);
    else
    {
        echo 'No Passwrod entered';
        return false;
    }
    $domain = get_home_url();
    
    $domain = str_replace(array('http://', 'https://'), '', $domain);
  
    if (isset($options['profile']))
        $profile = '&pubid='.urlencode($options['profile']);
    else
        $profile = '';
    
    $requests = array(
    array('metric' => 'shares', 'dimension' => '',   'domain' => $domain, 'period' => 'day'),
    array('metric' => 'shares', 'dimension' => '',   'domain' => $domain, 'period' => 'week'),
    array('metric' => 'shares', 'dimension' => '',    'domain' => $domain, 'period' => 'month'),
    array('metric' => 'clickbacks', 'dimension' => '', 'domain' => $domain, 'period' => 'day'),
    array('metric' => 'clickbacks', 'dimension' => '', 'domain' => $domain, 'period' => 'week'),
    array('metric' => 'clickbacks', 'dimension' => '', 'domain' => $domain, 'period' => 'month'),
    array('metric' => 'shares', 'dimension' => 'service' , 'domain' => $domain, 'period' => 'month'),
    array('metric' => 'clickbacks', 'dimension' => 'service', 'domain' => $domain, 'period' => 'month'),
    
    );
    
    if (!  $stats = get_transient('addthis_dashboard_stats') )
    {
        add_filter('http_headers_useragent', 'addthis_plugin_useragent');
    foreach ($requests as $request)
    {
        $dimension = $metric = $domain = $period = '';
        extract($request);
        $dimension = ($dimension != '') ? '/'.$dimension : '';                                                                
        $url = 'https://api.addthis.com/analytics/1.0/pub/' . $metric . $dimension . '.json?'.
        'domain='.$domain.'&period='.$period.
        '&username='.$username.
        '&password='.$password.
        $profile;
        $stats[$metric.$dimension.$period] = wp_remote_get($url, array('period' => $period, 'domain' => $domain, 'password' => $password, 'username' => $username) );
    }

        foreach($stats as $response)
        {
            if (is_wp_error($response) )
            {
                echo "There was an error retrieving your stats from the AddThis servers.  Please wait and try again in a few moments\n";
                echo "Error Code:" . $response->get_error_code();
                exit;
            }
        }

        if ($stats['sharesday']['response']['code'] == 200) 
            set_transient('addthis_dashboard_stats', $stats, '600');
    
    }
    if ($stats['sharesday']['response']['code'] == 200 && $stats['sharesmonth']['body'] != '[]' )
    {
    $yesterday['shares'] = json_decode($stats['sharesday']['body']);
    $yesterday['shares'] = $yesterday['shares'][0]->shares;
    $yesterday['clickbacks'] = json_decode($stats['clickbacksday']['body']);
    $yesterday['clickbacks'] = $yesterday['clickbacks'][0]->clickbacks;
    $yesterday['viral'] = ($yesterday['shares'] > 0 && $yesterday['clickbacks'] > 0 ) ? $yesterday['clickbacks'] / $yesterday['shares'] * 100 . '%' : 'n/a';
    
    if (! $yesterday['clickbacks'] ) $yesterday['clickbacks'] = 0;
    if (! $yesterday['shares'] ) $yesterday['shares'] = 0;
 
    $decodedLastWeek = json_decode($stats['sharesweek']['body']);
    $lastweek['shares'] = 0;
    foreach ($decodedLastWeek as $share)
    {
        $lastweek['shares'] += $share->shares;
    }
    $decodedLastWeek = json_decode($stats['clickbacksweek']['body']);
    $lastweek['clickbacks'] = 0;
    foreach ($decodedLastWeek as $clickback)
    {
        $lastweek['clickbacks'] += $clickback->clickbacks;
    }
    $lastweek['viral'] = ($lastweek['shares'] > 0 && $lastweek['clickbacks'] > 0 ) ? $lastweek['clickbacks'] / $lastweek['shares'] * 100 . '%' : 'n/a';

    $decodedLastMonth = json_decode($stats['sharesmonth']['body']);
    $lastmonth['shares'] = 0;
    foreach ($decodedLastMonth as $share)
    {
        $lastmonth['shares'] += $share->shares;
    }
    $decodedLastMonth = json_decode($stats['clickbacksmonth']['body']);
    $lastmonth['clickbacks'] = 0;
    foreach ($decodedLastMonth as $clickback)
    {
        $lastmonth['clickbacks'] += $clickback->clickbacks;
    }
    $lastmonth['viral'] = ($lastmonth['shares'] > 0 && $lastmonth['clickbacks'] ) ? $lastmonth['clickbacks'] / $lastmonth['shares'] * 100 . '%' : 'n/a';


    $services['shares'] = json_decode($stats['shares/servicemonth']['body']);
    $services['clickbacks'] = json_decode($stats['clickbacks/servicemonth']['body']);
foreach (array('shares', 'clickbacks') as $type)
    {
        $topServiceShare = array_shift($services[$type]);
        $firstLabel = ( isset($_services[$topServiceShare->service])) ? $_services[$topServiceShare->service] : $topServiceShare->service;
        $firstAmount = $topServiceShare->{$type};
        $topServiceShare = array_shift($services[$type]);
        $secondLabel = ( isset($_services[$topServiceShare->service])) ? $_services[$topServiceShare->service] : $topServiceShare->service;
        $secondAmount = $topServiceShare->{$type};
        $thirdLabel = 'Others';
        $thirdAmount = 0;
        foreach($services[$type] as $service )
        {
            $thirdAmount += $service->{$type};
        }


        $servicesCharts[$type] = 'http://chart.apis.google.com/chart?&chdlp=b&chs=118x145&cht=p3&chco=BA3A1C|F75C39|424242&'.
                                    'chdl='.$firstLabel.'|'.$secondLabel.'|'.$thirdLabel.'&'.
                                    'chd=t:'.$firstAmount.','.$secondAmount.','.$thirdAmount; 
    }                                                         

echo "<div id='at_tabs'>";
echo "<ul>";    
echo "<li class='at_time_period'><a href='#tab1'>Yesterday</a></li>";
echo "<li class='at_time_period'><a href='#tab2'>Last Week</a></li>";
echo "<li class='at_time_period'><a href='#tab3'>Last Month</a></li>";
echo "</ul><div class='clear'>&nbsp;</div>";
$tab = 0;
foreach (array('yesterday', 'lastweek', 'lastmonth') as $timePeriod )
{
    $stats = $$timePeriod;
    $tab++;
    $viral = ( $stats['viral'] != 'n/a' ) ? number_format( $stats['viral'],2) .'%' : $stats['viral'];
    echo '<div id="tab'.$tab.'">';

    echo 
        '<table class="atw-table">
            <colgroup><col width="33%"/><col width="33%"/><col width="33%"/></colgroup>
            <tr>';
    echo '<td><div class="atw-cell"><h3>'. $stats['shares'].'</h3>Shares</div></td>';
    echo '<td><div class="atw-cell"><h3>'. $stats['clickbacks'].'</h3>Clicks</div></td>';
    echo '<td><div class="atw-cell"><h3>'.  $viral .'</h3>Viral Lift</div></td>';
    
    echo '</tr>';
    echo '</table>';
    echo '</div>';
}
    echo "</div>";
    echo "<hr />";
    echo "<div id='tstab1'>";
        echo "<h5>Top Services for shares(last month)</h5>";
        echo "<img src='{$servicesCharts['shares']}' width='118' height='145' alt='share stats for the last month' />";
    echo "</div>";
    echo '<div id="tstab2">';
        echo "<h5>Top Services for clicks(last month)</h5>";
        echo "<img src='{$servicesCharts['clickbacks']}' width='118' height='145' alt='share stats for the last month' />";
    echo "</div>";
    echo '<div class="clear">&nbsp;</div>';
    echo '<p><a class="button rbutton" href="http://www.addthis.com/analytics/summary?domain='.$domain.'">View More Analytics</a></p>';
}
elseif($stats['sharesday']['response']['code'] == 200){

    echo
    <<<ENDHTML
        <p>We haven't recorded any sharing events in the last month for this site.  This could be because you just installed addthis.  If you would like to increase your sharing,</p> 
         <p>If you want some ideas for increasing your sharing, check out:</p>
         <ul>
            <li><span class='b'><a href="http://www.addthis.com//blog/">The AddThis Blog</a></span></li>
            <li><span class='b'><a href="http://www.addthis.com//blog/2010/11/09/3-tips-for-getting-the-most-shares/">Three tips for getting the most shares</a></span></li>
            <li><span class='b'><a href="http://www.addthis.com/forum/">The AddThis Forum</a></span></li>
        <ul>
ENDHTML;
}
elseif ($stats['sharesday']['response']['code'] == 401){
    echo "I'm sorry, but we seemed to encounter an error. Please ensure that your password, username and pubid are correct.";

}

else{
    echo "I'm sorry, but we seemed to have encountered an error when requesting your analytics.  Please wait a few moments and try again.";
}
die();
} 

/**
* Initialize the dashboard widget.
*/
function addthis_dashboard_init() {
    $options = get_option('addthis_settings');
    if (isset($options['addthis_show_stats']) && $options['addthis_show_stats'] == true && isset($options['username']) && isset($options['password']) && ! empty($options['username']) && ! empty($options['password'])  )
        wp_add_dashboard_widget('dashboard_addthis', 'AddThis', 'addthis_render_dashboard_widget_holder');   
} 

function addthis_render_dashboard_widget_holder()
{
     echo '<p class="widget-loading hide-if-no-js">' . __( 'Loading&#8230;' ) . '</p><p class="describe hide-if-js">' . __('This widget requires JavaScript.') . '</p>';
}


add_action('wp_ajax_at_save_transient', 'addthis_save_transient');

function addthis_save_transient() {
    global $wpdb; // this is how you get access to the database


    parse_str($_POST['value'], $values);

    // verify nonce (or die).
    $nonce = $values['_wpnonce'];
    if (! wp_verify_nonce($nonce, 'addthis-options') ) die('Security check'); 

    // Parse Post data
    $option_array = addthis_parse_options($values);
    
    // Set Transient
    if (false !== get_transient('addthis_settings'))
        delete_transient('addthis_settings');
    $eh = set_transient('addthis_settings', $option_array, 120);
    
print_r($option_array);

    die();
}

function addthis_save_settings($input)
{
   $options_array = addthis_parse_options($input);

   return $options_array;


}



/**
 * goes through all the options, sanitizing, verifying and returning for storage what needs to be there
 */
function addthis_parse_options($data)
{

global $addthis_styles, $addthis_new_styles;

$styles = array_merge($addthis_styles, $addthis_new_styles);


$options = array();

// Sanitize profile, username and password
if ( isset($data['addthis_username']) )
 $options['username'] = sanitize_text_field($data['addthis_username']);

if ( isset($data['addthis_profile']) )
 $options['profile'] = sanitize_text_field($data['addthis_profile']);

if ( isset($data['addthis_password']) )
    $options['password'] = sanitize_text_field($data['addthis_password']);


if ( isset ($data['show_above']) )
    $options['above'] = 'none';
elseif ( isset($styles[$data['above']]) )
    $options['above'] = $data['above'];
elseif ($data['above'] == 'none')
{
    $options['above'] = 'none';
}
elseif ($data['above'] = 'custom')
{

    $options['above_do_custom_services'] = isset($data['above_do_custom_services']) ;
    $options['above_do_custom_preferred'] = isset($data['above_do_custom_preferred']) ;

    $options['above'] = 'custom';
    $options['above_custom_size'] =  ( $data['above_custom_size'] == '16' || $data['above_custom_size'] == 32 ) ? $data['above_custom_size'] : '' ;
    $options['above_custom_services'] = sanitize_text_field( $data['above_custom_services'] );
    $options['above_custom_preferred'] = (int) $data['above_custom_preferred'] ;
    $options['above_custom_more'] = isset($data['above_custom_more']);
}

if ( isset ($data['show_below']) )
    $options['below'] = 'none';
elseif ( isset($styles[$data['below']]) )
    $options['below'] = $data['below'];
elseif ($data['below'] == 'none')
{
    $options['below'] = 'none';
}
elseif ($data['below'] = 'custom')
{
    $options['below_do_custom_services'] = isset($data['below_do_custom_services']) ;
    $options['below_do_custom_preferred'] = isset($data['below_do_custom_preferred']) ;
    
    $options['below'] = 'custom';
    $options['below_custom_size'] =  ( $data['below_custom_size'] == '16' || $data['below_custom_size'] == 32 ) ? $data['below_custom_size'] : '' ;
    $options['below_custom_services'] = sanitize_text_field( $data['below_custom_services'] );
    $options['below_custom_preferred'] = sanitize_text_field( $data['below_custom_preferred'] );
    $options['below_custom_more'] = isset($data['below_custom_more']); 
}



// All the checkbox fields
foreach (array('addthis_show_stats', 'addthis_append_data', 'addthis_showonhome', 'addthis_showonpages', 'addthis_showonarchives', 'addthis_showoncats', 'addthis_showonexcerpts') as $field)
{
    if ( isset($data[$field]) &&  $data[$field] == true)
        $options[$field] = true; 
    else
        $options[$field] = false;

}


//[addthis_brand] => 

if ( isset ($data['addthis_brand']) && strlen($data['addthis_brand'])  != 0  )
    $options['addthis_brand'] = sanitize_text_field($data['addthis_brand']);

//[addthis_options] => 
if ( isset ($data['addthis_options']) && strlen($data['addthis_options'])  != 0  )
    $options['addthis_options'] = str_replace(' ', '', esc_js($data['addthis_options']));

//[addthis_language] => 
if ( isset ($data['addthis_language']))
    $options['addthis_language'] = sanitize_text_field($data['addthis_language']);


if ( isset ($data['addthis_header_background']) && strlen($data['addthis_header_background']) != 0 )
{
    if (! strpos($data['addthis_header_background'], '#') === 0)
        $options['addthis_header_background'] =  '#' . sanitize_text_field($data['addthis_header_background']);
    else
        $options['addthis_header_background'] =  sanitize_text_field($data['addthis_header_background']);
}

if ( isset ($data['addthis_header_color']) && strlen($data['addthis_header_color']) != 0 )
{
    if (! strpos($data['addthis_header_color'], '#') === 0)
        $options['addthis_header_color'] =  '#' . sanitize_text_field($data['addthis_header_color']);
    else
        $options['addthis_header_color'] =  sanitize_text_field($data['addthis_header_color']);
}

   return $options;

}


/**
* Formally registers AddThis settings. Only called in WP 2.7+.
*/
function register_addthis_settings() {
    register_setting('addthis', 'addthis_settings', 'addthis_save_settings');

}
/*
 * Used to make sure excerpts above the head aren't displayed wrong
*/
function addthis_add_content_filters()
{

    global $addthis_did_filters_added;
    $addthis_did_filters_added = true;

    if ( isset($_GET['preview']) &&  $_GET['preview'] == 1 && $options = get_transient('addthis_settings') )
        $preview = true;
    else
        $options = get_option('addthis_settings');
    
    if ($options['addthis_showonexcerpts'] == true )
        add_filter('get_the_excerpt', 'addthis_display_social_widget_excerpt');
    
    add_filter('the_content', 'addthis_display_social_widget', 15);
}


/**
* Adds WP filter so we can append the AddThis button to post content.
*/
function addthis_init()
{
    global $addthis_settings;

    add_action( 'wp_head', 'addthis_add_content_filters');

    if (addthis_get_wp_version() >= 2.7) {
        if ( is_admin() ) {
            add_action( 'admin_init', 'register_addthis_settings' );
        }
    }

    $options = get_option('addthis_settings');

    if (function_exists('wp_register_style')) {
        wp_register_style( 'addthis', WP_PLUGIN_URL . '/addthis/css/addthis.css');
        wp_register_script( 'addthis', WP_PLUGIN_URL . '/addthis/js/addthis.js', array('jquery-ui-tabs') );
    
        add_action('admin_print_styles-index.php', 'addthis_print_style');
        add_action('admin_print_scripts-index.php', 'addthis_print_script');
    }

    add_filter('admin_menu', 'addthis_admin_menu');

    if ( get_option('addthis_product') !== false  && ! is_array( $options ) )
        addthis_options_200();

    // Upgrade to 210 from 200
    if ( isset($options['username']) && ! isset($options['profile']) )
        addthis_options_210();

    add_action( 'addthis_widget', 'addthis_print_widget', 10, 3);
    
    $product = get_option('addthis_product');


    $style = get_option('addthis_style');
    if (strlen($style) == 0) $style = 'share';
    $addthis_settings['style'] = $style;

    $addthis_settings['menu_type'] = get_option('addthis_menu_type');

    $addthis_settings['username'] = get_option('addthis_username');
    $addthis_settings['fallback_username'] = get_option('addthis_fallback_username');

    $addthis_settings['password'] = get_option('addthis_password');

    $language = get_option('addthis_language');
    $addthis_settings['language'] = $language;

    $advopts = array('brand', 'append_data', 'language', 'header_background', 'header_color');
    $addthis_settings['customization'] = '';
    for ($i = 0; $i < count($advopts); $i++)
    {
        $opt = $advopts[$i];
        $val = get_option("addthis_$opt");
        if (isset($val) && strlen($val)) $addthis_settings['customization'] .= "var addthis_$opt = '$val';";
    }
    $addthis_settings['options'] = get_option('addthis_options');

}

add_action('wp_dashboard_setup', 'addthis_dashboard_init' );

add_action('widgets_init', 'addthis_widget_init');

function addthis_widget_init()
{
    require_once('addthis_sidebar_widget.php');
    //require_once('addthis_content_feed_widget.php');
    register_widget('AddThisSidebarWidget');
    //register_widget('AddThisContentFeedWidget');
}

function addthis_sidebar_widget($args) 
{
    extract($args);
    echo $before_widget; 
    echo $before_title . $after_title . addthis_social_widget('', true);
    echo $after_widget;
}

// essentially replace wp_trim_excerpt until we have something better to use here
function addthis_remove_tag($content, $text = '')
{


    if ( isset($_GET['preview']) &&  $_GET['preview'] == 1 && $options = get_transient('addthis_settings') )
        $preview = true;
    else
        $options = get_option('addthis_settings');


    $raw_excerpt = $text;
    if ( '' == $text ) {

        $text = get_the_content('');
        $text = strip_shortcodes( $text );
        remove_filter('the_content', 'addthis_display_social_widget', 15); 
       
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]&gt;', $text);
        $text = strip_tags($text);
        $excerpt_length = apply_filters('excerpt_length', 55); 
        $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
        $words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
        if ( count($words) > $excerpt_length ) {
            array_pop($words);
            $text = implode(' ', $words);
            $text = $text . $excerpt_more;
        } else {
            $text = implode(' ', $words);
        }
        if ($options['addthis_showonexcerpts'] == false)
            return $text;
        return addthis_display_social_widget($text, false, false);
    }
    else
    {
        return $content;
    }
}

function addthis_late_widget($link_text)
{
    remove_filter('get_the_excerpt', 'addthis_late_widget');

    if ( isset($_GET['preview']) &&  $_GET['preview'] == 1 && $options = get_transient('addthis_settings') )
        $preview = true;
    else
        $options = get_option('addthis_settings');
    
    if ($options['addthis_showonexcerpts'] == false)
        return $link_text;
    
    global $addthis_styles, $addthis_new_styles;
    $styles = array_merge($addthis_styles, $addthis_new_styles);
    
    $url = get_permalink();
    $title = get_the_title();
    $url_above = '';
    $url_below = '';
    if ( isset($_GET['preview']) &&  $_GET['preview'] == 1 && $options = get_transient('addthis_settings') )
        $preview = true;
    else
        $options = get_option('addthis_settings');
    

    $url_below =  "addthis:url='$url' ";
    $url_below .=  "addthis:title='$title'"; 

    if (has_excerpt() && ! is_attachment() && isset($options['below']) && $options['below'] == 'custom')
    {
        $belowOptions['size'] = $options['below_custom_size'];
        if ($options['below_do_custom_services'])
            $belowOptions['services'] = $options['below_custom_services'];
        if ($options['below_do_custom_preferred'])
            $belowOptions['preferred'] = $options['below_custom_preferred'];
        $belowOptions['more'] = $options['below_custom_more'];
        return $link_text . apply_filters('addthis_below_content',  addthis_custom_toolbox($belowOptions, $url, $title) );
    }
    
    elseif ( isset ($styles[$options['below']]) && has_excerpt() && ! is_attachment()   )
    {    
        $below = apply_filters('addthis_below_content', $styles[$options['below']]['src']);
    }
    else
    {
        $below = apply_filters('addthis_below_content','' );
    }
    return  $link_text . sprintf($below, $url_below);


}


function addthis_display_social_widget_excerpt($content)
{
    if ( isset($_GET['preview']) &&  $_GET['preview'] == 1 && $options = get_transient('addthis_settings') )
        $preview = true;
    else
        $options = get_option('addthis_settings');
   

    if ( has_excerpt() && $options['addthis_showonexcerpts'] == true )
        return addthis_display_social_widget($content, true, true);
    else
        return $content;
}


function addthis_display_social_widget($content, $filtered = true, $below_excerpt = false)
{

    global $addthis_styles, $addthis_new_styles, $post;
    $styles = array_merge($addthis_styles, $addthis_new_styles);


    if ( isset($_GET['preview']) &&  $_GET['preview'] == 1 && $options = get_transient('addthis_settings') )
        $preview = true;
    else
        $options = get_option('addthis_settings');

    if ( is_home() || is_front_page() ) 
        $display = (isset($options['addthis_showonhome']) &&  $options['addthis_showonhome'] == true ) ? true : false;
    elseif ( is_archive() && ! is_category() )
        $display = (isset($options['addthis_showonarchives']) && $options['addthis_showonarchives'] == true ) ? true : false;
    // Cat
    elseif ( is_category() )
        $display = (isset($options['addthis_showoncats']) && $options['addthis_showoncats'] == true ) ? true : false;
    // Pages
    elseif ( is_page() )
        $display = (isset($options['addthis_showonpages']) && $options['addthis_showonpages'] == true) ? true: false;
    // Single pages (true by default and design)
    elseif ( is_single() )
        $display = true;
    else
        $display = false;
    $custom_fields = get_post_custom($post->ID);
    if (isset ($custom_fields['addthis_exclude']) && $custom_fields['addthis_exclude'][0] ==  'true')
        $display = false;


    remove_filter('wp_trim_excerpt', 'addthis_remove_tag', 9, 2);
    remove_filter('get_the_excerpt', 'addthis_late_widget');
    $url = get_permalink();
    $title = get_the_title();
    $url_above =  "addthis:url='$url' ";
    $url_above .= "addthis:title='$title'"; 
    $url_below =  "addthis:url='$url' ";
    $url_below .= "addthis:title='$title'"; 

    // Still here?  Well let's add some social goodness
    if (  $options['above'] != 'none' && $display  )
    {
        if (isset ($styles[$options['above']]))
        {
            $above = apply_filters('addthis_above_content',  $styles[$options['above']]['src']);
        }
        elseif ($options['above'] == 'custom')
        {
            $aboveOptions['size'] = $options['above_custom_size'];
            if ($options['above_do_custom_services']) 
                $aboveOptions['services'] = $options['above_custom_services'];
            if ($options['above_do_custom_preferred']) 
                $aboveOptions['preferred'] = $options['above_custom_preferred'];
            $aboveOptions['more'] = $options['above_custom_more'];
            $above = apply_filters('addthis_above_content',  addthis_custom_toolbox($aboveOptions, $url, $title) );
        }
    }
    elseif ($display)
        $above = apply_filters('addthis_above_content','' );
    else
        $above = '';

    if ($options['below'] != 'none' && $display && ! $below_excerpt  )
    {
        if (isset ($styles[$options['below']]))
        {    
            $below = apply_filters('addthis_below_content', $styles[$options['below']]['src']);
        }
        elseif ($options['below'] == 'custom')
        {
            $belowOptions['size'] = $options['below_custom_size'];
            $belowOptions['services'] = $options['below_custom_services'];
            $belowOptions['preferred'] = $options['below_custom_preferred'];
            $belowOptions['more'] = $options['below_custom_more'];
            $below = apply_filters('addthis_below_content',  addthis_custom_toolbox($belowOptions, $url, $title) );
        }
    }
    elseif ($below_excerpt && $display && $options['below'] != 'none'  )
    {
        $below = apply_filters('addthis_below_content','' );
        if ($options['addthis_showonexcerpts'] == true )  
            add_filter('get_the_excerpt', 'addthis_late_widget', 14);
    }
    elseif ($display)
        $below = apply_filters('addthis_below_content','' );
    else
        $below = '';

   

    if ($display) 
    {
        $content = sprintf($above, $url_above) . $content . sprintf($below, $url_below); 
        if ($filtered == true)
            add_filter('wp_trim_excerpt', 'addthis_remove_tag', 11, 2);
    }
    
    return $content;

}


add_action('wp_footer', 'addthis_output_script');

/**
 * Check to see if our Javascript has been outputted yet.  If it hasn't, return it.  Else, return false.
 *
 * @return mixed
*/
function addthis_output_script($return = false )
{
    global $addthis_settings;

    if ( isset($_GET['preview']) &&  $_GET['preview'] == 1 && $options = get_transient('addthis_settings') )
        $preview = true;
    else
        $options = get_option('addthis_settings');
    
    $script = "\n<!-- AddThis Button Begin -->\n"
             .'<script type="text/javascript">'
             ."var addthis_product = 'wpp-254';\n";


    $pub = (isset($options['profile'])) ? $options['profile'] : false ;
    if (!$pub) {
        $pub = 'wp-'.cuid();
    }
    $pub = urlencode($pub);

   
    $addthis_config = array();

    if ( isset($options['addthis_append_data']) &&  $options['addthis_append_data'] == true)
        $addthis_config["data_track_clickback"] = true;
      
    if ( isset($options['addthis_language']) && strlen($options['addthis_language']) == 2)
        $addthis_config['ui_language'] = $options['addthis_language'];
        
    if ( isset($options['addthis_header_background']) )
        $addthis_config['ui_header_background'] = $options['addthis_header_background'];

    if ( isset($options['addthis_header_color']) )
        $addthis_config['ui_header_color'] = $options['addthis_header_color'];

    if ( isset($options['addthis_brand']) )
        $addthis_config['ui_cobrand'] = $options['addthis_brand'];


    $addthis_config = apply_filters('addthis_config_js_var', $addthis_config);


    if (! empty ($addthis_config) )
        $script .= 'var addthis_config = '. json_encode($addthis_config) .';';

    if (isset($options['addthis_options']) && strlen($options['addthis_options']) != 0)
    $script .= 'var addthis_options = "'.$options['addthis_options'].'"';

    $script .= '</script>';
    

    $script .= '<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid='.$pub.'"></script>';
    

    if ( ! is_admin() && ! is_feed() )
        echo $script;
    elseif ($return == true &&  ! is_admin() && ! is_feed() )
        return $script;
}



/**
* Appends AddThis button to post content.
*/
function addthis_social_widget($content, $onSidebar = false, $url = null, $title = null)
{
    global $addthis_settings;

    // add nothing to RSS feed or search results; control adding to static/archive/category pages
    if (!$onSidebar) 
    {
        if ($addthis_settings['sidebar_only'] == 'true') return $content;
        else if (is_feed()) return $content;
        else if (is_search()) return $content;
        else if (is_home() && !$addthis_settings['showonhome']) return $content;
        else if (is_page() && !$addthis_settings['showonpages']) return $content;
        else if (is_archive() && !$addthis_settings['showonarchives']) return $content;
        else if (is_category() && !$addthis_settings['showoncats']) return $content;
    }

    $pub = ($addthis_settings['username']);
    if (!$pub) {
        $pub = 'wp-'.cuid();
    }
    $pub = urlencode($pub);

    $link  = !is_null($url) ? $url : ($onSidebar ? get_bloginfo('url') : get_permalink());
    $title = !is_null($title) ? $title : ($onSidebar ? get_bloginfo('title') : the_title('', '', false));
    $addthis_options = $addthis_settings['options'];

    $content .= "\n<!-- AddThis Button BEGIN -->\n"
                .'<script type="text/javascript">'
                ."\n//<!--\n"
                ."var addthis_product = 'wpp-250';\n";


    if (strlen($addthis_settings['customization'])) 
    {
        $content .= ($addthis_settings['customization']) . "\n";
    }

    if ($addthis_settings['menu_type'] === 'dropdown')
    {
        if (strlen($addthis_options)) $content .= "var addthis_options = '$addthis_options';\n";
        $content .= <<<EOF
//-->
</script>
<div class="addthis_container"><a href="http://www.addthis.com/bookmark.php?v=250&amp;username=$pub" class="addthis_button" addthis:url="$link" addthis:title="$title">
EOF;
        $content .= ($addthis_settings['language'] == '' ? '' /* no hardcoded image -- we'll choose the language automatically */ : addthis_get_button_img()) . '</a><script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username='.$pub.'"></script></div>';
    }
    else if ($addthis_settings['menu_type'] === 'toolbox')
    {
        $content .= "\n//-->\n</script>\n";
        $content .= <<<EOF
<div class="addthis_container addthis_toolbox addthis_default_style" addthis:url="$link" addthis:title="$title"><a href="http://www.addthis.com/bookmark.php?v=250&amp;username=$pub" class="addthis_button_compact">Share</a><span class="addthis_separator">|</span>
EOF;
        if (!strlen($addthis_options)) $addthis_options = 'email,favorites,print,facebook,twitter';
        $addthis_options = split(',', $addthis_options);
        foreach ($addthis_options as $option) {
            $option = trim($option);  
            if ($option != 'more') {
                $content .= '<a class="addthis_button_'.$option.'"></a>';
            }
        }
        $content .= '<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username='.$pub.'"></script></div>';
    }
    else
    {
        $link = urlencode($link);
        $title = urlencode($title);
        $content .= <<<EOF
//-->
</script>
<div class="addthis_container"><a href="http://www.addthis.com/bookmark.php?v=250&amp;username=$pub" onclick="window.open('http://www.addthis.com/bookmark.php?v=250&amp;username=$pub&amp;url=$link&amp;title=$title', 'ext_addthis', 'scrollbars=yes,menubar=no,width=620,height=520,resizable=yes,toolbar=no,location=no,status=no'); return false;" title="Bookmark using any bookmark manager!" target="_blank">
EOF;
        $content .= addthis_get_button_img() . '</a></div>';
    }
    $content .= "\n<!-- AddThis Button END -->";

    return $content;
}

/**
* Generates img tag for share/bookmark button.
*/
function addthis_get_button_img( $btnStyle = false )
{
    global $addthis_settings;
    global $addthis_styles;
    global $addthis_default_options;
    
    $addthis_options = get_option('addthis_settings');
    $options = wp_parse_args($addthis_options, $addthis_default_options);
    
    $language = $options['language'];

    if ($btnStyle == false)
        $btnStyle = $addthis_settings['style'];
    if ($addthis_settings['language'] != 'en')
    {
        // We use a translation of the word 'share' for all verbal buttons
        switch ($btnStyle)
        {   
            case 'bookmark':
            case 'addthis':
            case 'bookmark-sm':
                $btnStyle = 'share';
        }
    }

    if (!isset($addthis_styles[$btnStyle])) $btnStyle = 'share';
    $btnRecord = $addthis_styles[$btnStyle];
    $btnUrl = (strpos(trim($btnRecord['img']), 'http://') !== 0 ? "http://s7.addthis.com/static/btn/v2/" : "") . $btnRecord['img'];
        
    if (strpos($btnUrl, '%lang%') !== false)
    {
        $btnUrl = str_replace('%lang%', strlen($language) ? $language : 'en', $btnUrl);
    }
    $btnWidth = $btnRecord['w'];
    $btnHeight = $btnRecord['h'];
    return <<<EOF
<img src="$btnUrl" width="$btnWidth" height="$btnHeight" style="border:0" alt="Bookmark and Share"/>
EOF;
}

function addthis_options_page_scripts()
{
    wp_enqueue_script( 'addthis_options_page_script', plugins_url( '/addthis/js/options-page.js', basename(dirname(__FILE__)) ), array('jquery-ui-tabs', 'thickbox'  ));  
}

function addthis_options_page_style()
{
    wp_enqueue_style( 'addthis_options_page_style', plugins_url('/addthis/css/options-page.css', basename(dirname(__FILE__))  ) );
    wp_enqueue_style( 'thickbox' );
}

function addthis_admin_menu()
{
    $addthis = add_options_page('AddThis Plugin Options', 'AddThis', 'manage_options', __FILE__, 'addthis_plugin_options_php4');
    add_action('admin_print_scripts-' . $addthis, 'addthis_options_page_scripts');
    add_action('admin_print_styles-' . $addthis, 'addthis_options_page_style');
}

    $addthis_default_options = array(
        'profile'   => '',
        'username'  => '',
        'password'  => '',
        'style'     => addthis_style_default ,
        'location'  => 'below',
        'below'     => 'large_toolbox',
        'above'     => 'fb_tw_sc',
        'addthis_show_stats' => true,
        'addthis_append_data'=> true,
        'addthis_showonhome'  => true,
        'addthis_showonpages'   => true,
        'addthis_showonarchives'  => true,
        'addthis_showoncats' => true,
        'addthis_brand'     => '',
        'toolbox'   => '',
        'addthis_language'  => '',
        'addthis_header_background' => '',
        'addthis_header_color' => '',
        'addthis_options' => '',
        'addthis_showonexcerpts' => true,
        'above_custom_size' => '',
        'above_custom_services' => '',
        'above_custom_preferred' => '',
        'above_custom_more' => '',
        'below_custom_size' => '',
        'below_custom_services' => '',
        'below_custom_preferred' => '',
        'below_custom_more' => '',
    );

function addthis_plugin_options_php4() {
    
    global $addthis_styles;
    global $addthis_languages;
    global $addthis_settings;
    global $addthis_menu_types;
    global $addthis_new_styles;
    global $addthis_default_options;

    global $current_user;
    $user_id = $current_user->ID;
    
    if (get_user_meta($user_id, 'addthis_nag_updated_options') )
        delete_user_meta($user_id, 'addthis_nag_updated_options', 'true');
?>
    <div class="wrap">
    <h2 class='placeholder'>&nbsp;</h2>
    <form  id="addthis_settings" method="post" action="options.php">
    <?php 
        // use the old-school settings style in older versions of wordpress
        if (addthis_get_wp_version() < 2.7) {
            wp_nonce_field('update-options');
        } else {
            settings_fields('addthis'); 
        }
        
    $addthis_options = get_option('addthis_settings');
        foreach ( array( 'addthis_show_stats', 'addthis_append_data', 'addthis_showonhome', 'addthis_showonpages', 'addthis_showonarchives', 'addthis_showoncats' ) as $option)
        {                                                                                                                                                                                                                                                               
            if ( $addthis_options && ! isset($addthis_options[$option]) )
                $addthis_options[$option] = false;
        }
        

        $options = wp_parse_args($addthis_options, $addthis_default_options);
        extract($options);   
    ?>

    <div class="page-header" id="tabs">
        <img alt='addthis' src="http://cache.addthis.com/icons/v1/thumbs/32x32/more.png" class="header-img"/>
        <ul class="nav-tab-wrapper">
            <li><h2 class="nav-tab-wrapper"><a href="#tabs-1">Basic</a></h2></li>
            <li><h2 class="nav-tab-wrapper"><a href="#tabs-2">Advanced</a></h2></li>
        </ul>
        <div class='clear'>&nbsp;</div> 
        <div id="tabs-1">
    <table class="form-table">
        <tbody>
        <tr>
            <td id="above" colspan="2">
                <p><?php _e("Above the post", 'addthis_trans_domain') ?>&nbsp;&nbsp;<span class="description"><input type="checkbox" name="addthis_settings[show_above]" <?php echo ('none' == $above) ? 'checked="checked"' : '';?> />&nbsp;none</span></p>
                <?php foreach ($addthis_new_styles as $k => $v)
                {
                    $class = 'hidden';
                    $checked = '';
                    if ($above == $k || ($above == 'none' && $k == $addthis_default_options['above']  ) ){
                        $checked = 'checked="checked"';
                        $class = '';
                    }
                    echo "<p class='above_option select_row $class '><input $checked type='radio' value='".$k."' name='addthis_settings[above]' /><img alt='".$k."'  src='".plugins_url( '/addthis/img/' .  $v['img'], basename(dirname(__FILE__)) ) ."'/></p>";
                }
                
                $class = 'hidden';
                $checked = '';
                if ($above == 'custom' || ($above == 'none' && 'custom' == $addthis_default_options['above']  ) ){
                    $checked = 'checked="checked"';
                    $class = '';
                }

                echo "<div class='above_option select_row $class '><input $checked type='radio' value='custom' name='addthis_settings[above]' id='above_custom_button' /> Custom / Build your own</input>";

                echo "<ul class='above_option_custom hidden'>";
                $above_custom_16 = ($above_custom_size == 16) ? 'selected="selected"' : '' ;
                $above_custom_32 = ($above_custom_size == 32) ? 'selected="selected"' : '' ;
                $above_do_custom_services = ($above_do_custom_services) ? 'checked="checked"' : '';
                $above_do_custom_preferred = ($above_do_custom_preferred) ? 'checked="checked"' : '';

                echo "<li class='nocheck'><span class='at_custom_label'>Size:</span><select name='addthis_settings[above_custom_size]'><option value='16' $above_custom_16 >16x16</option><option value='32' $above_custom_32 >32x32</option></select><br/><span class='description'>The size of the icons you want to display</span></li>";
                echo "<li><input $above_do_custom_services class='at_do_custom'  type='checkbox' name='addthis_settings[above_do_custom_services]' value='true' /><span class='at_custom_label'>Services to always show:</span><input class='at_custom_input' name='addthis_settings[above_custom_services]' value='$above_custom_services'/><br/><span class='description'>Enter a comma-separated list of <a href='http://addthis.com/services'>service codes</a> </span></li>";
                echo "<li><input type='checkbox' $above_do_custom_preferred class='at_do_custom'  name='addthis_settings[above_do_custom_preferred]' value='true' /><span class='at_custom_label'>Auto Personalized:</span>
                    <select name='addthis_settings[above_custom_preferred]' class='at_custom_input'>";
                    for($i=0; $i <= 11; $i++)
                    {
                        $selected = '';
                        if ($above_custom_preferred == $i)
                            $selected = 'selected="selected"';

                        echo '<option value="'.$i.'" '.$selected.'>'.$i.'</option>';

                    }
                echo "</select><br/><span class='description'>Enter the number of automatticly user personalized items you want displayed</span></li>";
               $above_custom_more = ( $above_custom_more ) ? 'checked="checked"' : '';
                
                echo "<li><input $above_custom_more type='checkbox' class='at_do_custom' name='addthis_settings[above_custom_more]' value='true' /><span class='at_custom_label'>More</span><br/><span class='description'>Display our iconic orange plus sign that offers sharing to over 300 destinations</span></li>";
                echo "</ul></div>";
                
                ?>
               

                <a class="above_option" href="#above_more" id="above_more">addtional style options</a>
            </td>
        </tr>
        <tr>
            <td id='below' colspan="2">
                <p><?php _e("Below the post", 'addthis_trans_domain') ?>&nbsp;&nbsp;<span class="description"><input type="checkbox" name="addthis_settings[show_below]" <?php echo ('none' == $below) ? 'checked="checked"' : '';?> />&nbsp;none</span></p>
                <?php foreach ($addthis_new_styles as $k => $v)
                {
                    $class = 'hidden';
                    $checked = '';
                    if ($below == $k || ($below == 'none' && $k == $addthis_default_options['below']  ) )
                    {
                        $checked = 'checked="checked"';
                        $class = '';
                    }
                    
                    echo "<p class='below_option select_row $class '><input $checked type='radio' value='".$k."' name='addthis_settings[below]' /><img alt='".$k."'  src='".plugins_url( '/addthis/img/' .  $v['img'], basename(dirname(__FILE__)) ) ."'/></p>";
                }
                $class = 'hidden';
                $checked = '';
                if ($below == 'custom' || ($below == 'none' && 'custom' == $addthis_default_options['below']  ) ){
                    $checked = 'checked="checked"';
                    $class = '';
                }
                echo "<div class='below_option select_row $class '><input $checked type='radio' value='custom' name='addthis_settings[below]' id='below_custom_button' /> Custom / Build your own</input>";

                echo "<ul class='below_option_custom hidden'>";
                $below_custom_16 = ($below_custom_size == 16) ? 'selected="selected"' : '' ;
                $below_custom_32 = ($below_custom_size == 32) ? 'selected="selected"' : '' ;
                $below_do_custom_services = ($below_do_custom_services) ? 'checked="checked"' : '';
                $below_do_custom_preferred = ($below_do_custom_preferred) ? 'checked="checked"' : '';
                
                echo "<li class='nocheck'><span class='at_custom_label'>Size:</span><select name='addthis_settings[below_custom_size]'><option value='16' $below_custom_16 >16x16</option><option value='32' $below_custom_32 >32x32</option></select><br/><span class='description'>The size of the icons you want to display</span></li>";
                echo "<li><input class='at_do_custom'  type='checkbox' $below_do_custom_services  name='addthis_settings[below_do_custom_services]' value='true' /><span class='at_custom_label'>Services to always show:</span><input class='at_custom_input' name='addthis_settings[below_custom_services]' value='$below_custom_services'/><br/><span class='description'>Enter a comma-separated list of <a href='http://addthis.com/services'>service codes</a> </span></li>";
                echo "<li><input type='checkbox' class='at_do_custom' $below_do_custom_preferred name='addthis_settings[below_do_custom_preferred]' value='true' /><span class='at_custom_label'>Auto Personalized:</span>
                    <select name='addthis_settings[below_custom_preferred]' class='at_custom_input'>";
                    for($i=0; $i <= 11; $i++)
                    {
                        $selected = '';
                        if ($below_custom_preferred == $i)
                            $selected = 'selected="selected"';

                        echo '<option value="'.$i.'" '.$selected.'>'.$i.'</option>';

                    }
                echo "</select><br/><span class='description'>Enter the number of automatticly user personalized items you want displayed</span></li>";
               
                $below_custom_more = ($below_custom_more) ? 'checked="checked""' : '';
                
                echo "<li><input $below_custom_more type='checkbox' class='at_do_custom' name='addthis_settings[below_custom_more]' value='true' /><span class='at_custom_label'>More</span><br/><span class='description'>Display our iconic orange plus sign that offers sharing to over 300 destinations</span></li>";
                echo "</ul></div>";
            
            ?>
            <a class="below_option" href="#below_more" id="below_more">additional style options</a>
        </td>
    </tr>
    <tr valign="top">
        <td colspan="2"><?php _e('Enter a profile, username and password to discover how your content is being shared, and how your most influential audience members are bringing traffic back to your site. Learn what interests them – and to what degree – and how thoses interests are driving sharing. <a href="http://addthis.com/features" target="_blank">Click here for more information on the benefits of register</a>.<a href="http://www.addthis.com/help/faq#accounts" target="_blank">Click here for more information on usernames and profiles</a>   ', 'addthis_trans_domain');?> </td>
    </tr>
    <tr valign="top">
        <th scope="row"><?php _e("AddThis profile id:", 'addthis_trans_domain' ); ?></th>
        <td><input id="addthis_profile"  type="text" name="addthis_settings[addthis_profile]" value="<?php echo $profile; ?>" autofill='off' autocomplete='off'  /></td>
    </tr>
    <tr valign="top">
        <th scope="row"><?php _e("AddThis username:", 'addthis_trans_domain' ); ?></th>
        <td><input id="addthis_username"  type="text" name="addthis_settings[addthis_username]" value="<?php echo $username; ?>" autofill='off' autocomplete='off'  /></td>
    </tr>
    <tr id="password_row" >
        <th scope="row"><?php _e("AddThis password:", 'addthis_trans_domain' ); ?><br/><span style="font-size:10px">(required for displaying stats)</span></th>
        <td><input id="addthis_password" type="password" name="addthis_settings[addthis_password]" value="<?php echo $password; ?>" autocomplete='off' autofill='off'  /></td>
    </tr>
    </tbody>
</table>
  <div class='clear'>&nbsp;</div>  
   </div>
        <div id="tabs-2">
    <table class="form-table">
        <tr>
            <th scope="row"><?php _e("Show stats in admin dashboard:", 'addthis_trans_domain' ); ?></th>
            <td><input type="checkbox" name="addthis_settings[addthis_show_stats]" value="true" <?php echo ($addthis_show_stats == true ? 'checked="checked"' : ''); ?>/></td>
        </tr>
        <tr>
            <th scope="row"><?php _e("Track <a href=\"http://www.addthis.com/blog/2010/03/11/clickback-analytics-measure-traffic-back-to-your-site-from-addthis/\" target=\"_blank\">clickbacks</a>:", 'addthis_trans_domain' ); ?></th>
            <td><input type="checkbox" name="addthis_settings[addthis_append_data]" value="true" <?php echo $addthis_append_data == true ? 'checked="checked"' : ''; ?>/></td>
        </tr>
        <tr>
            <th scope="row"><?php _e("Show on homepage:", 'addthis_trans_domain' ); ?></th>
            <td><input type="checkbox" name="addthis_settings[addthis_showonhome]" value="true" <?php echo ($addthis_showonhome  == true ? 'checked="checked"' : ''); ?>/></td>
        </tr>
        <tr>
            <th scope="row"><?php _e("Show on <a href=\"http://codex.wordpress.org/Pages\" target=\"blank\">pages</a>:", 'addthis_trans_domain' ); ?></th>
            <td><input type="checkbox" name="addthis_settings[addthis_showonpages]" value="true" <?php echo ( $addthis_showonpages  == true ? 'checked="checked"' : ''); ?>/></td>
        </tr>
        <tr>
            <th scope="row"><?php _e("Show in archives:", 'addthis_trans_domain' ); ?></th>
            <td><input type="checkbox" name="addthis_settings[addthis_showonarchives]" value="true" <?php echo ($addthis_showonarchives  == true ? 'checked="checked"' : ''); ?>/></td>
        </tr>
        <tr>
            <th scope="row"><?php _e("Show in categories:", 'addthis_trans_domain' ); ?></th>
            <td><input type="checkbox" name="addthis_settings[addthis_showoncats]" value="true" <?php echo ( $addthis_showoncats == true ? 'checked="checked"' : ''); ?>/></td>
        </tr>
        <tr>
            <th scope="row"><?php _e("Show on excerpts:", 'addthis_trans_domain' ); ?></th>
            <td><input type="checkbox" name="addthis_settings[addthis_showonexcerpts]" value="true" <?php echo ( $addthis_showonexcerpts == true ? 'checked="checked"' : ''); ?>/></td>
        </tr>
        <tr valign="top">
            <td colspan="2"></td>
        </tr>
        <tr valign="top">
            <td colspan="2">For more details on the following options, see <a href="http://addthis.com/customization">our customization docs</a>.</td>
        </tr>
        <tr valign="top">
            <th scope="row"><?php _e("Custom service list:", 'addthis_trans_domain' ); ?><br /><span class='description'><?php _e(
            'Important: AddThis optimizes your list of services based on popularity and language, and personalizes the list for each user. You may decrease sharing by over-riding these features.'
            , 'addthis_trans_domain') ?>
            </span></th>
              <td><input size='60' type="text" name="addthis_settings[addthis_options]" value="<?php echo $addthis_options; ?>" /><br />
              <span class='description'><?php _e('Enter a comma-separated list of <a href="http://addthis.com/services">service codes</a>', 'addthis_trans_domain' ); ?></span>
              </td>  
              
        </tr>
        <tr valign="top">
            <th scope="row"><?php _e("Brand:", 'addthis_trans_domain' ); ?></th>
            <td><input type="text" name="addthis_settings[addthis_brand]" value="<?php echo $addthis_brand; ?>" /></td>
        </tr>
        <tr valign="top">
            <th scope="row"><?php _e("Language:", 'addthis_trans_domain' ); ?></th>
            <td>
                <select name="addthis_settings[addthis_language]">
                <?php
                    $curlng = $addthis_language;
                    foreach ($addthis_languages as $lng=>$name)
                    {
                        echo "<option value=\"$lng\"". ($lng == $curlng ? " selected='selected'":""). ">$name</option>";
                    }
                ?>
                </select>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row"><?php _e("Header background:", 'addthis_trans_domain' ); ?></th>
            <td><input type="text" name="addthis_settings[addthis_header_background]" value="<?php echo $addthis_header_background; ?>" /></td>
        </tr>
        <tr valign="top">
            <th scope="row"><?php _e("Header color:", 'addthis_trans_domain' ); ?></th>
            <td><input type="text" name="addthis_settings[addthis_header_color]" value="<?php echo $addthis_header_color; ?>" /></td>
        </tr>
    </table>
<div class='clear'>&nbsp;</div>
    </div>
    </div>
    <div class="clear">&nbsp;</div>
    <p class="submit">
    <?php
    // Build Preview Link
         $preview_link = esc_url( get_option( 'home' ) . '/' );
         if ( is_ssl() )
              $preview_link = str_replace( 'http://', 'https://', $preview_link );
         $stylesheet = get_option('stylesheet');
         $template = get_option('template');
         $preview_link = htmlspecialchars( add_query_arg( array( 'preview' => 1, 'template' => $template, 'stylesheet' => $stylesheet, 'preview_iframe' => true, 'TB_iframe' => 'true' ), $preview_link ) );


    ?>
    <a href="<?php echo $preview_link; ?>" class="thickbox thickbox-preview" id="preview" ><?php _e('Preview'); ?></a>
    <input type="submit" name="Submit" value="<?php _e('Save Changes') ?>" />
    </p>

    </form>
    </div>
<?php
}
add_action('init', 'addthis_init');

/* 2.9 compatability functions
 */

if (! function_exists('get_user_meta'))
{
    function get_user_meta($userid, $metakey, $ignored='')
    {
        $userdata = get_userdata($userid);
        if (isset($userdata->{$metakey}) )
            return $userdata->{$metakey};
        else 
            return false;
    }

}
if (! function_exists('delete_user_meta'))
{
    function delete_user_meta($userid, $metakey, $ignored = '')
    {
        return delete_usermeta($userid, $metakey);
    }
}

if (! function_exists('add_user_meta'))
{
    function add_user_meta($userid, $metakey, $metavalue)
    {
        return update_usermeta($userid, $metakey, $metavalue);
    }
}
if (! function_exists('get_home_url'))
{
    function get_home_url()
    {
        return get_option( 'home' );
    }
}


?>
