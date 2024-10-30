<?php
namespace BestWp;

if (!defined('ABSPATH')) {
    die();
}

class AjaxSearch
{

    public function __construct()
    {

        add_action('wp_enqueue_scripts', array($this, 'loadScripts'));
        add_shortcode('bestwp-ajax-search', array($this, 'addShortcode'));
    }


    public function addShortcode()
    {

        $message = '<div id="bwp-search-box"></div>';
        return $message;
    }

    public function loadScripts()
    {

        $the_js_ver  = date("ymd-Gis", filemtime(plugin_dir_path(__FILE__) . 'build/app.jsx.js'));
        $the_css_ver = date("ymd-Gis", filemtime(plugin_dir_path(__FILE__) . 'build/app.jsx.css'));

        wp_enqueue_script('ajax_search', plugins_url('build/app.jsx.js', __FILE__), array('jquery', 'lodash', 'react', 'react-dom', 'wp-element'), $the_js_ver, true);


        wp_register_style('ajax_search', plugins_url('build/app.jsx.css', __FILE__), false, $the_css_ver);
        wp_enqueue_style('ajax_search');

        wp_localize_script('ajax_search', 'ajax_search', [
            'baseUrl' => get_template_directory_uri(),
            'siteUrl' => get_site_url()
        ]);

    }


}

