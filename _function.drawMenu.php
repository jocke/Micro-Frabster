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
    Function that draws the menu
*/

function drawMenu($aMenu) 
{
    $mReturn = FALSE;
    $iSize = count($aMenu);
    // print("iSize: $iSize");
    
    foreach ($aMenu as $iIndex => $aMenuItem) {
        // print("iIndex: " . ($iIndex + 1));
        
        if (($iIndex + 1) == 1) {
            $sPosition = 'first';
        } elseif (($iIndex + 1) == $iSize) {
            $sPosition = 'last';
        } else {
            $sPosition = 'middle';
        }
        
        $bIsCurrent = FALSE;
        if ((APP_ROOT . $aMenuItem['href']) == ($_SERVER['PHP_SELF'])) {
            $bIsCurrent = TRUE;
        }
        
        drawMenuItemLink($aMenuItem['href'], $aMenuItem['label'], $aMenuItem['title'], $sPosition, $bIsCurrent);
    }
}
?>