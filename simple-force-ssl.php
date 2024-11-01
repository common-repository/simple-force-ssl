<?php
/*
Plugin Name:  Simple Force SSL
Plugin URI: http://wordpress.org/plugins/simple-force-ssl/
Description: Using this plugin you can force a site to load over ssl. It redirects the user to the https version of the website.
Author: Mohit Agarwal
Version: 1.5.3
Author URI: http://agarwalmohit.com/
Stable tag: "trunk"
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


Simple Force SSL is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Simple Force SSL is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Simple Force SSL. If not, see http://www.gnu.org/licenses/gpl-2.0.html
*/




/**
 * @package Simple Force SSL
 * @version 1.5.3
 */

function me_simple_force_ssl(){
	if(!is_ssl()){
		wp_redirect('https://'. $_SERVER['HTTP_HOST']. $_SERVER['REQUEST_URI'], 301);
		exit();
	}
}
add_action('template_redirect', 'me_simple_force_ssl', 1);