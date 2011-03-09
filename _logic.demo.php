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
    Example of executing some business logic.
*/

    print("Hello World. This is printed from within a PHP script called <span class=\"code\">" . __FILE__ . "</span>, why not open it up and see how it works.<br />");
    print("The date of today is " . date('l jS \of F Y h:i:s A') . "<br />");
    print("<hr />");
    print("Now let's print out some 'Hello World's.<br />");
    
    for ($i = 1; $i <= 50; $i++) {
        print($i . ": Hello World! ");
    }
?>