<?php 
// +----------------------------------------------------------------------+
// | MicroFrabster v0.9.7                                                 |
// +----------------------------------------------------------------------+
// | Copyright (c) 2005 - 2011 Selincite.com                              |
// +----------------------------------------------------------------------+
// | This code is released under the Mozilla Public License Version 1.1
// | See http://www.mozilla.org/MPL/MPL-1.1.html for full details.
// |   For more informatino about licensing, and/or further development   |
// | we encourage you to contact us - we're not evil. :)                  |
// +----------------------------------------------------------------------+
// | Authors: Jocke Selin <jocke@selincite.com>                           |
// +----------------------------------------------------------------------+
//
/*  File purpose: 
    Function that draws a linked menu item
*/

function drawMenuItemLink($sHref, $sLabel, $sTitle, $sPosition, $bIsActive = FALSE) 
{
	// Position can be 'first', 'last' or 'middle'
	$sAClass = "";
	if ($bIsActive === TRUE) { 
		$sAClass = "selected ";
	}
	
	if ($sPosition == 'first' OR $sPosition == 'last' OR $sPosition == 'middle') {
		$sAClass .= $sPosition;
    	$sLink = "<a href=\"" . $sHref . "\" title=\"" . $sTitle .  "\" class=\"" . $sAClass ."\">" . $sLabel . "</a>\n";
		print($sLink);
	} else {
		print("Error: Menu item position is not one of 'first', 'last' or 'middle'!");
	}
}
?>