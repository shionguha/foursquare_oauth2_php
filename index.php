<?php
/*
 *      index.php
 *      
 *      Copyright 2011 Colin Wren <colin@gimpneek.com>
 *      
 *      This program is free software; you can redistribute it and/or modify
 *      it under the terms of the GNU General Public License as published by
 *      the Free Software Foundation; either version 2 of the License, or
 *      (at your option) any later version.
 *      
 *      This program is distributed in the hope that it will be useful,
 *      but WITHOUT ANY WARRANTY; without even the implied warranty of
 *      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *      GNU General Public License for more details.
 *      
 *      You should have received a copy of the GNU General Public License
 *      along with this program; if not, write to the Free Software
 *      Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 *      MA 02110-1301, USA.
 *      
 *      
 */
$client_id = "INSERT YOUR CLIENT ID HERE";
$secret = "INSERT YOUR SECRET ID HERE";
$redirect = "INSERT YOUR REDIRECT URI HERE";
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
	<p><a href="https://foursquare.com/oauth2/authenticate?client_id=<?php echo $client_id; ?>&response_type=code&redirect_uri=<?php echo $redirect; ?>" title="Login">Log in with Foursquare</a></p>
	</div>
	
	<div id="footer">
	<p class="left">This application uses the foursquare<sup>TM</sup> application programming interface but is not endorsed or certified by Foursquare Labs, Inc</p>
	<p class="right"><img src="http://colinwren.com/projects/route/poweredbyfoursquare-mark.png" /></p>
	</div>
</body>
 
</html>