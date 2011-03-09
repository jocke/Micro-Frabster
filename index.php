<?php
    require_once("_tpl.demo.main.php"); // MicroFrabster Magic; That's all that's needed to wrap the content into a template.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Introduction</title>
</head>
<body>
<h2>Introduction</h2>
<p>Thank you for checking out Micro Frabster. It's a honour to have you here.<br />
    The system is designed to allow anyone to easily add more pages and edit the content of the site. It's based on the philosophy that basic HTML is quite a simple and effective way of generating content. You have quite a lot of control over your content, not only with fonts, links, and so forth, but also images, table, and more advanced stuff such as JavaScript. However, duplicating your template, your branding, the livery, is never a good idea. This is where Micro Frabster comes in.
</p>
<h3>How it's supposed to work</h3>
<p>
    Most people who create content are happy to be taught a tool or a few basic HTML tags. This gives them the opportunity to create, edit and modify the content without the intervention of any other. The content creators, however, do not like fettling with links, templates and other "fancy pants"-stuff.<br />
    Micro Frabster allows the content creators to use a standard HTML editor (NVU, Dreamweaver, etc) to create a complete HTML page, and by adding only one line of PHP (which is typically ignored by the HTML editors) they can "frame" their content in the site's branding. It's easy for them to copy an existing web page and rename it, insert the new content and upload it to the webserver. They need never touch the templating system.
</p>

<h3>The Template Design</h3>
<p>
    You can design your HTML templates in whatever system you want (Text editor, Dreamweaver, etc) and then you can decide how to "frame" the content by choosing the right template in the one-line-PHP-code, you can even make your templates modular, and include logic on when or where things should be displayed. All templates are pure PHP, no strange third party stuff you need to learn (feel free to add whatever makes your life easier).
</p>

<h3>There's even a little menu system</h3>
<p>
    For convenience I've included a simple menu system that allows you to create more pages and link to them in quite an easy way. It's based on a PHP array that's simply being looped over. I've created some pretty advanced ones in the past, and the included one is just a simple one-level-deep menu. Feel free to make it more elaborate to suit your project.
</p>
<h3>Technically speaking...</h3>
<p>
    Micro Frabster works so that you create a bog-standard HTML page with your content - no branding, layouts, etc, please. You then add a PHP <span class="code">require_once();</span> code at the top. The <span class="code">require_once();</span> points at the main template you want to use. The template figures out the settings and what else is included. Then the template opens the calling file, the content file, up for reading and reads all of it. Then the template engine extracts the <em>title</em>, any <em>style</em>-tags and the content of the <em>body</em>-tag. Once it's got all the pieces, it starts printing out your templates, outputting the title, style and the body where you've specified. Finally it stops the execution, otherwise the original content would be displayed beneath your beautifully laid out content.<br />
    Another thing to point out is that the code is written to be as simple as possible. There's no Object Oriented code (it really doesn't need it!), there's no cryptic regular expressions. Hopefully this simplicity will spur someone on to create more web sites.
</p>
</body>
</html>
