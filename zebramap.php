<?php
/*
Plugin Name: ZebraMap Time Zone Map Integration
Plugin URI: http://zebramap.com/
Description: This plugin enables integration of the ZebraMap time zone map in WordPress. When this plugin is activated you can insert your map with a shortcode. You get the shortcode from your map configuration interface under the "Publish" tab. <a href="http://zebramap.com">ZebraMap</a>
Version: 1.0
Author: ZebraMap
License: GPL2

Copyright 2011  Guustaaf Damave  (email : gd@freeflowmedia.com)

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

// zebramap shortcode function
// [zebramap mapcode="code"]
function zebramap_func( $atts, $content = null ) {
	extract( $atts );
	if( strlen($mapcode) < 22 ){
		return '<p>Please get the correct shortcode at <a href="http://zebramap.com">ZebraMap</a></p>';
	}else{
		return <<<CODE
<div id="zebramap"><script type="text/javascript"
  src="http://mtzm-map01.info/emb/$mapcode.js">
</script><div>
CODE;
	}
}
add_shortcode( 'zebramap', 'zebramap_func' );

?>