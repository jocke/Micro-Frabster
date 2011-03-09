<?php
    define("EXEC_LOGIC", "_logic.demo.php");      // This logic will be executed
    define("EXEC_LOGIC_POSITION", "after");       // Executes the logic after the content (can be 'before' and 'after')
    require_once("_tpl.demo.main.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Example of using business logic (executing PHP code)</title>
</head>
<body>
<h2>Business Logic Example</h2>
<h3>How to execute some PHP code to make your pages dynamic.</h3>
<p>
    When you want to execute some PHP code, business logic, all you have to do is to specify the file you want to execute in the top of your content file. In this example it's done with <span class="code">define("EXEC_LOGIC", "_logic.demo.php");</span>, and then you can define whether you want to execute it before or after this text that's in the content file. That's done by specifying "<span class="code">before</span>" or "<span class="code">after</span>", like so: <span class="code">define("EXEC_LOGIC_POSITION", "after");</span>. Whatever is in the logic file will be executed and outputted. Like the stuff below:
</p>

</body>
</html>
