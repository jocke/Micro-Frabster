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
    Function that retreives the inline styles from the HTML
*/

function getHTMLStyles($sHTML) 
{
    if (strlen($sHTML) > 0) {
        
        $iStyleStartPos = strpos($sHTML, "<style");
        $sHTML = substr($sHTML, $iStyleStartPos + 5);
        
        $iStyleStartEndPos = strpos($sHTML, ">");
        $sHTML = substr($sHTML, $iStyleStartEndPos + 1);
        
        $iStyleStartPos = strpos($sHTML, "</style>");
        $sHTML = substr($sHTML, 0, $iStyleStartPos);
        
        // Debugging
        // print("<hr />" . htmlentities($sHTML) . "<hr />");
        return $sHTML;
    } else {
        renderErrorMessage("The system wanted to fetch the styles but was passed empty content.", "Empty HTML variable in File: " . __FILE__);
    }
}
?>