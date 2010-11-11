<?php
ob_start();
$f = basename($_SERVER['SCRIPT_FILENAME']);
$c = ' class="active"';
?>


<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<title>Booster</title>
<link rel="stylesheet" href="style/turbine/css.php?files=style/css/screen.cssp;style/css/print.cssp">
<script>/*@cc_on'abbr article aside audio canvas details figcaption figure footer header hgroup mark meter nav output progress section summary time video'.replace(/\w+/g,function(n){document.createElement(n)})@*/</script>
<!--[if IE 6]><body id="ie6"><![endif]-->
<!--[if IE 7]><body id="ie7"><![endif]-->
<!--[if IE 8]><body id="ie8"><![endif]-->


<div id="wrapper">


<header>
	<h1><a tabindex="1" href="index">Booster</a></h1>
	<nav>
		<h2>Navigation</h2>
		<ul>
			<li<?php if($f == 'index.php'){ echo $c; } ?>><a tabindex="2" href="index">Home</a></li>
			<li<?php if($f == 'manual.php'){ echo $c; } ?>><a tabindex="3" href="manual">Manual</a></li>
			<li<?php if($f == 'download.php'){ echo $c; } ?>><a tabindex="4" href="download">Download</a></li>
			<li<?php if($f == 'support.php'){ echo $c; } ?>><a tabindex="5" href="support">Support</a></li>
			<li<?php if($f == 'development.php'){ echo $c; } ?>><a tabindex="6" href="development">Development</a></li>
		</ul>
	</nav>
</header>


<?php ob_end_flush(); ?>
