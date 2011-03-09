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
    Function that retreives the HTML from the file that's
   being called, i.e it reads the content of itself.
*/

function getHTML()
{
    /*
        This needs to be refactored to use a constant created in _settings.php
        that constant has to be platform aware, i.e Windows or Linux.
    */
    $sFileName = $_SERVER['SCRIPT_FILENAME'];
    if (file_exists($sFileName)) {
        $handle = fopen($sFileName, "rb");
        $sHTML = fread($handle, filesize($sFileName));
        fclose($handle);
        return $sHTML;
    } else {
        renderErrorMessage("The system was looking for content but could not find it.", "Looked for: " . $sFileName);
    }
}
?>