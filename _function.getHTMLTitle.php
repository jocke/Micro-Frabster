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
    Function that retreives the title from the HTML
*/

function getHTMLTitle($sHTML) 
{
    if (strlen($sHTML) > 0) {
        
        $iStartPos  = strpos($sHTML, "<title>");
        $sTitle     = substr($sHTML, $iStartPos + 7);
        $iStartPos  = strpos($sTitle, "</title>");
        $sTitle     = substr($sTitle, 0, $iStartPos);
        
        return $sTitle;
    } else {
        renderErrorMessage("The system wanted to format the header but was passed empty content.", "Empty HTML variable in File: " . __FILE__);
    }
}
?>