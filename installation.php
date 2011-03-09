<?php
    require_once("_tpl.demo.main.php"); // MicroFrabster Magic; That's all that's needed to wrap the content into a template.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Installation</title>
</head>
<body>
<h2>Installing Micro Frabster</h2>
<p>This should be easy, or at least I hope it is. There's no dependencies, per se. Just PHP. If your server runs PHP, it should run Micro Frabster.</p>
<h3>The files</h3>
<p>
    Put the files in a web directory. Set the file permissions and try to access one of the PHP files that doesn't start with "_" (underscore). You should see the templating engine in action. Now you can open up <span class="code">_settings.php</span> and wade throught it changing the bits that you see fit. You'll probably want to change the title settings to start with.
</p>
<h3>Create templates</h3>
<p>
    Open the file called <span class="code">_tpl.demo.body.php</span> to see how the main template is built. Here you can now change the HTML as you see fit. This is the main template. If you want, change the name of the file so it's not called "demo". You can have several of these type main template files depending on how advanced your layout is. One for your first page, one for your photo gallery, and a generic one, perhaps?<br />
    In the <span class="code">_tpl.demo.head.php</span> file you can see how the <span class="code">head</span>-section of the HTML is put together. Change it so it works for you.
    In <span class="code">_tpl.demo.main.php</span> you can see how the head and body are stitched together. 
</p>
<h3>Create content files</h3>
<p>
    You can create the content files in whatever editor you want, but do omit any layout, branding and livery that's not part of the actual content. When you're done, add this PHP code: <span class="code">&lt;?php require_once("_tpl.demo.main.php"); ?&gt;</span>, and your content will be wrapped in the template.
</p>

<h3>The menus</h3>
<p>
    Included is a simple menu example. The menus are configured in the <span class="code">_settings.php</span> file. They're based on PHP's arrays. The keys are href (link), label (the visual text) and the title (the "mouse over" text). I'm sure it'll become clear once you look in the file.</p>

<h3>But what about executing PHP code?</h3>
<p>Yes! That's possible too. I call it logic, or more specifically business logic. Have a look at the <a href="logic.php" title="An example on how to execute some PHP code in a template.">Logic Example</a> for more details.
</p>


<h3>Note!</h3>
<p>Please note that Micro Frabster is tested on Linux/Apache, it's been running on MS IIS (Windows), but I've not tested on that at the moment. Please let me know if you find any problems, patches are greatly appreciated.</p>
</body>
</html>
