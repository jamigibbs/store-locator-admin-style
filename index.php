<?php
/**
 * Plugin Name: Store Locator Admin Styles
 * Plugin URI: https://rescuethemes.com
 * Description: This plugin will apply custom style to the <a href="https://wordpress.org/plugins/store-locator-le/">Store Locator Plus plugin</a>.
 * Version: 1.0.0
 * Author: rescuethemes
 * Author URI: https://rescuethemes.com
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

/*  Copyright 2015 Jami Gibbs  (email : hello@rescuethemes.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


/**
 * Exit if accessed directly
 */
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Dequeue Store Locator admin stlyesheet and load ours
 */
function storelocator_load_custom_wp_admin_style(){
    if( class_exists( 'SLPlus_AdminUI' ) ) {

		wp_dequeue_style( 'wpcsl' );
		
	    wp_enqueue_style( 'storelocator_admin_css', plugin_dir_url( __FILE__ ) . 'css/store-style.css', false, '1.0.0' );
	    wp_enqueue_style( 'storelocator_fonts', plugin_dir_url( __FILE__ ) . 'css/fontello.css', false, '1.0.0' );
   }
}
add_action('admin_enqueue_scripts', 'storelocator_load_custom_wp_admin_style', 20);
