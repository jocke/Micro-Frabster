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
    This file contains the <body> section of the template. 
    If you have several different layouts, create more of these files to
    represent your layouts.
*/

?>
    <body>
        <div id="main">
            <div id="main-header">
                    <a href="./"><h1>Micro Frabster Templating Engine</h1></a>
            </div>
            <br clear="all" />
            
            <div id="content-menu">
                <div id="menu">
                    <?php $mSubMenu = menu(); ?>
                </div>
                <div id="content">
                    <?php renderBody($sHTMLBody); /* Outputs the body section from the content file */ ?>
                </div>
                <div id="gutter">&nbsp;</div>
            </div>
            <br clear="all" />
            
            <div id="footer">
                <hr />
                Micro Frabster the super-simple templating engine. - Copyright Selincite 2005 - <?php print(date('Y')); ?> - Released under the Mozilla Open Source licence.
            </div>
        </div>
    </body>
</html>
