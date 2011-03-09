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
    Outputs an error message and aborts the execution. 
*/

function renderErrorMessage($sMessage, $sHiddenMessage, $sHeader = "An error has occurred!")
{
    ?>
    <html>
    <head>
    <style type="text/css">
    <!--
    .errorheader {
        font-family: "Courier New", Courier, mono;
        font-size: 18px;
        font-weight: bold;
        color: #CC0000;
        text-decoration: none;
        border-bottom-width: 2px;
        border-bottom-style: solid;
        border-bottom-color: #CC0000;
    }
    .errormessage {
        font-family: "Courier New", Courier, mono;
        font-size: 14px;
        color: #CC0000;
    }
    .errorbox {
        margin: 3px;
        padding: 3px;
        border: 3px double #CC0000;
    }
    -->
    </style>
    <title><?php print($sHeader); ?></title>
    </head>
    
    <body>
        <div id="Layer1" style="position:absolute; left:80px; top:89px; width:387px; height:39px; z-index:1; background-color: #FFFFFF; layer-background-color: #FFFFFF; border: 1px none #000000;">
            <div  class="errorbox">
          <p><span class="errorheader"><?php print($sHeader); ?></span><br>
            <span class="errormessage"><?php print($sMessage); ?></span>
            </p>
          </div>
        </div>
        <?php print("<!-- " . $sHiddenMessage . " -->"); ?>
    </body>
    <?php
    exit();
}
?>