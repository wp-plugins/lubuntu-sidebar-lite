<?php
/**
 * @package lubuntu-sidebar-lite
 * @version 0.1
 */
/*
Plugin Name: Lubuntu sidebar lite
Plugin URI: http://zeljko.popivoda.com/lubuntu-sidebar-lite-wordpress-plugin
Description: When activated, this plugin will put a Lubuntu sidebar lite on the right side of your website.
Author: Željko Popivoda
Version: 0.1
License: GPLv2
Author URI: http://popivoda.com
*/

function render_lubuntu_sidebar_lite() {
	$lubuntunet_url = plugins_url('images/lubuntu-net.png', __FILE__ );
	$lubuntublog_url = plugins_url('images/lubuntu-blog.png', __FILE__ );
	$lubuntuwiki_url = plugins_url('images/lubuntu-wiki.png', __FILE__ );
	$downloadlubuntu_url = plugins_url('images/download-lubuntu.png', __FILE__ );
	if(function_exists('is_admin_bar_showing')) {
		$padding_top = is_admin_bar_showing() ? 148 : 120;
	} else {
		$padding_top = 120;
	}
	echo "
		
	<div id='lubuntuSidebarLite' style='position:fixed; top:".$padding_top."px; right:-3px; z-index:10000; cursor: pointer; border:none;'>
	
	<div class='lubuntuNetwork'>
	<a target='_blank' title='Lubuntu' href='http://www.lubuntu.net/'>
	<img style='z-index: 10000;' src='{$lubuntunet_url}' /></a></div>
	
	<div class='lubuntuNetwork'>
	<a target='_blank' title='Lubuntu Blog' href='http://lubuntublog.blogspot.com/'>
	<img style='z-index: 10000;' src='{$lubuntublog_url}' /></a></div>
	
	<div class='lubuntuNetwork'>
	<a target='_blank' title='Lubuntu Wiki' href='http://wiki.ubuntu.com/Lubuntu'>
	<img style='z-index: 10000;' src='{$lubuntuwiki_url}' /></a></div>
	
	<div class='lubuntuNetwork'>
	<a target='_blank' title='Download Lubuntu' href='http://help.ubuntu.com/community/Lubuntu/GetLubuntu'>
	<img style='z-index: 10000;' src='{$downloadlubuntu_url}' /></a></div>
	
	</div>
	
	<style>
	.lubuntuNetwork:hover {
	margin-left:-3px;
	}
	</style>
	
	";
}
add_action('wp_footer', 'render_lubuntu_sidebar_lite');
