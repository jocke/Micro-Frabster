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
    To render a <style> tag if needed.
*/
function renderStyleTag($sHTMLStyle)
{
    if($sHTMLStyle != "") {
        print("<style type=\"text/css\">\n");
        print($sHTMLStyle);
        print("</style>\n");
    }
}
?>