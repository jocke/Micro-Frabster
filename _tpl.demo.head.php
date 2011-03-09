<?php
// IE of course requires special attention.
$is_ie = false;
if ((strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 7.0; Windows') !== false) or (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0; Windows') !== false)){
    $is_ie = true;
}
header("content-type:text/xml;charset=utf-8");
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past
if ($is_ie) { 
    header("Content-Type: text/html");
}
print("<" . "?" . "xml"); ?> version="1.0" encoding="utf-8"<?php print("?" . ">\n"); ?>
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
    Render head, with title and styles
*/
?>
<?php if ($is_ie) { ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php } else { ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
<?php } ?>
<head>
<title><?php
if($sHTMLTitle != "") {
    print(TITLE_PRE . " " . $sHTMLTitle . " " . TITLE_POST);
} else {
    if (defined("TITLE_DEFAULT")) {
        print(TITLE_DEFAULT);
    } else {
        print("(CMS: MicroFrabster, By Selincite)"); // Oh, the glory!!! ;-)
    }
}
?></title>

<?php if ($is_ie) { ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<?php } else { ?>
    <meta http-equiv="Content-Type" content="text/xml; charset=utf-8" />
<?php } ?>

<link rel="stylesheet" type="text/css" href="styles.css" />
<!-- <link rel="icon" href="favicon.ico" type="image/x-icon" /> -->
<!-- <link rel="Shortcut Icon" href="favicon.ico" /> -->
<?php renderStyleTag($sHTMLStyle);  /* Outputs the <style> tag if needed if the content file has got special styles. */?>
<?php print("</head>"); ?>
