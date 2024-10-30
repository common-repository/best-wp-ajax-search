<?php
/*
Plugin Name: Best WP Ajax Search
Plugin URI: https://neatma.com/
Description: A lightweight react based ajax live search plugin, use [bestwp-ajax-search] shortcode to show the search box anywhere you want.
Version: 1.0.1
Author: Amin Nazemi
Author URI: https://neatma.com/
Text Domain: ajax-search
Domain Path: /languages/
*/

use BestWp\AjaxSearch;

include_once 'ajax-search.php';

new AjaxSearch();