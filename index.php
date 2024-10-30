<?php
	/*
	Plugin Name: Button It Up
	Plugin URI: http://www.parisvega.com/if-ya-wanna-click-it-ya-better-put-a-button-it/
	Description: Make clickable things look clickable. For example, the Upload/Insert button.
	Version: 1
	Author: Paris Vega
	Author URI: http://parisvega.com
	License: 
		Copyright 2012  Paris Vega  (email : paris@parisvega.com)
	
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
    add_action( 'admin_enqueue_scripts', 'button_it_up' );
    
	function button_it_up() {        
		wp_register_style( 'button-it-up-style', plugins_url('button-it-up.css', __FILE__) );        
		wp_enqueue_style( 'button-it-up-style' );
	}
?>
