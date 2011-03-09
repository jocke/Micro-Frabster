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
    Function that retreieves the body-tag from the HTML
*/

function getHTMLBody($sHTML) 
{
    if (strlen($sHTML) > 0) {
        
        // Yes, I know this could be done by using regular expressions, but most
        // non-programmers see that as voodoo, this is plain non-voodoo software.
        $iBodyStartPos = strpos($sHTML, "<body");
        $sHTML = substr($sHTML, $iBodyStartPos + 5);
        
        $iBodyStartEndPos = strpos($sHTML, ">");
        $sHTML = substr($sHTML, $iBodyStartEndPos + 1);
        
        $iBodyStartPos = strpos($sHTML, "</body>");
        $sHTML = substr($sHTML, 0, $iBodyStartPos);
        
        // Debugging
        // print("<hr />" . htmlentities($sHTML) . "<hr />");
        return $sHTML;
    } else {
        renderErrorMessage("The system wanted to format the content but was passed empty content.", "Empty HTML variable in File: " . __FILE__);
    }
}
?>