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
    Contains the logic for outputting the body of the content.
*/

function renderBody($sHTMLBody) 
{
    if(defined("EXEC_LOGIC")) {
        if (file_exists(EXEC_LOGIC)) {
            if (defined("EXEC_LOGIC_POSITION") AND (EXEC_LOGIC_POSITION == "after")) {
                print($sHTMLBody);
            }
            include(EXEC_LOGIC);
            if (defined("EXEC_LOGIC_POSITION") AND (EXEC_LOGIC_POSITION == "before")) {
                print($sHTMLBody);
            }
        } else {
            print("<!-- I tried to execute this: " . EXEC_LOGIC . ", but the file doesn't exist, so I'm reverting back to 'standard content' -->");
            print($sHTMLBody);
        }
    } else {
        print($sHTMLBody);
    }
}
?>