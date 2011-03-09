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
    Main Application and caller for standard template
*/

require_once("_include.php");

$sHTML = getHTML();
if ($sHTML !== FALSE) {
    $sHTMLTitle     = getHTMLTitle($sHTML); // Retreives the content of the TITLE-tag
    $sHTMLStyle     = getHTMLStyles($sHTML);
    $sHTMLBody      = getHTMLBody($sHTML);   // Retreives the content of the BODY-tag
    require("_tpl.demo.head.php");    // Outputs the <head>-section and anything before that
    require("_tpl.demo.body.php");    // Outputs the <body>-section and closing </html>-tag
}
exit();
?>
