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
    Configurations are in here.
*/

    // =============================================================
    //   This file defines all the necessary settings
    // =============================================================

    // Note that the root should not have the trailing / slash
    define("APP_ROOT", dirname($_SERVER["SCRIPT_NAME"]) . "/");         // The root of the application (used in menu/linking)
    define("APP_ROOT_PATH", dirname($_SERVER["SCRIPT_FILENAME"]) . "/");
    
    // Debugging: 
    // print("APP_ROOT: " . APP_ROOT . "<br />\n");
    // print("APP_ROOT_PATH: " . APP_ROOT_PATH . "<br />\n");

    define("TITLE_PRE", "Micro Frabster: "); // Used in conjunction with content title: Before: TITLE_PRE + "Content Title"
    define("TITLE_POST", "");  // Used in conjunction with content title: After: "Content Title" + TITLE_POST
    define("TITLE_DEFAULT", "Your Project Name - Home"); // The default title - if there's no other title in the content.

    //  ------------------------- Error Reporting --------------------------
    error_reporting(E_ALL);     // All errors
    // error_reporting(E_ALL ^ E_NOTICE);  // Default PHP errors
    // error_reporting(0); // No error reporting
    //  ------------------------- Error Reporting - End --------------------


    // ------------------------- Menu Definition --------------------------
    // Array of Menu Items - Defines all possible menu items
    $aMenuPageIndex         = array("href" => "index.php", "label" => "Home", "title" => "Home");
    $aMenuPageInstallation  = array("href" => "installation.php", "label" => "Installation", "title" => "Installation");
    $aMenuPageLogic         = array("href" => "logic.php", "label" => "Logic Example", "title" => "A small example of using executeable business logic.");

    // Defines the final menu - mostly the order - NOTE! These indexes are used as counters, do not manually edit the indexes!!
    $aMenuDefinition[] = $aMenuPageIndex;
    $aMenuDefinition[] = $aMenuPageInstallation;
    $aMenuDefinition[] = $aMenuPageLogic;
    // ------------------------- End Menu Definition ----------------------
?>
