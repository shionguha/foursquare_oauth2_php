<?php
/*
 *      index.php
 *      
 *      Copyright 2013 Shion Guha <sguha@cs.cornell.edu>
 *      
 *      This script is written solely for the purpose of the glome project led by Prof. Stephen Wicker (ECE, Cornell University)
 * 		and Shion Guha (PhD student, information science, Cornell University). 
 *      
 *      
 */
$client_id = "520RC3NSGXPBO2K3RRMWJPLDGGO33ULBXJBTXIRIIVEMHSJM";
$secret = "WKDZV4XA11531XYR2UJWE3BQ2VA1SLJSNTP4BKRSNS5UPQ4Y";
$redirect = "http://shionguha.webfactional.com/scripts/4sq_Callback.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 
<head>
	<title>glome</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.20" />

</head>
 
<body>
	<div id="content">
	<h1>glome</h1>
	<p>glome: This is an app which will collect all your 4sq data. Right now, it will just tell you your name.</p>
	<p><b>Note:</b> If you signed up for foursquare using Facebook then you may not be able to use this app. Unfortunately, this is a constraint imposed by foursquare and oauth2. :(</p>
	<p><a href="https://foursquare.com/oauth2/authenticate?client_id=<?php echo $client_id; ?>&response_type=code&redirect_uri=<?php echo $redirect; ?>" title="Login">Log in with Foursquare</a></p>
	</div>
	
	<div id="footer">
	<p class="left">This application uses the foursquare<sup>TM</sup> application programming interface but is not endorsed or certified by Foursquare Labs, Inc</p>
	<p class="right"><img src="http://colinwren.com/projects/route/poweredbyfoursquare-mark.png" /></p>
	</div>
</body>
 
</html>