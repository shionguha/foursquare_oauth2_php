<?php
/*
 *     4sq_Callback.php
 *      
 *      Copyright 2013 Shion Guha <sguha@cs.cornell.edu>
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
//defining our necessary keys and urls here
$client_id = "INSERT YOUR CLIENT ID HERE";
$secret = "INSERT YOUR SECRET ID HERE";
$redirect = "INSERT YOUR REDIRECT URI HERE";

//processing code variable in header and getting json stuff 
if($_GET['code']){
//We need to hit up the authkey URL and get the key in JSON format
$authkey = file_get_contents("https://foursquare.com/oauth2/access_token?client_id=".$client_id."&client_secret=".$secret."&grant_type=authorization_code&redirect_uri=".$redirect."&code=".$_GET['code']);
//We then need to decode it and store that key in a variable (or in a database)
$decoded_auth = json_decode($authkey,true);
$access_token = $decoded_auth['access_token'];
//we then look up whatever endpoint of the api we want
//$userinfo = file_get_contents("https://api.foursquare.com/v2/users/self?oauth_token=".$access_token);
//attempting to get foursquare history of self
$userinfo = file_get_contents("https://api.foursquare.com/v2/users/self?oauth_token=".$access_token);
$leaderinfo = file_get_contents("https://api.foursquare.com/v2/users/leaderboard?oauth_token=".$access_token);
//writing entire json response to file on server
file_put_contents('shion.json',$userinfo);
//$decoded_userinfo = json_decode($userinfo, true);
//$name = $decoded_userinfo['response']['user']['firstName'];
//getting count of all checkins
$decoded_userinfo = json_decode($userinfo, true);
$name = $decoded_userinfo['response']['user']['firstName'];
}
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
	<h1>Hello, <?php echo $name; ?></h1>
	<p>I just downloaded your entire foursquare check-in history ! Thank you for providing this information for science !</p>
	</div>
	
	<div id="footer">
	<p class="left">This application uses the foursquare<sup>TM</sup> application programming interface but is not endorsed or certified by Foursquare Labs, Inc</p>
	<p class="right"><img src="http://colinwren.com/projects/route/poweredbyfoursquare-mark.png" /></p>
	</div>
</body>
 
</html>

<!-- javascript function for converting json to csv -->
<!-- 
function DownloadJSON2CSV(objArray)
{
    var array = typeof objArray != 'object' ? JSON.parse(objArray) : objArray;
    var str = '';
     
    for (var i = 0; i < array.length; i++) {
        var line = '';
        for (var index in array[i]) {
            if(line != '') line += ','
         
            line += array[i][index];
        }
 
        str += line + '\r\n';
    }
 
    if (navigator.appName != 'Microsoft Internet Explorer')
    {
        window.open('data:text/csv;charset=utf-8,' + escape(str));
    }
    else
    {
        var popup = window.open('','csv','');
        popup.document.body.innerHTML = '<pre>' + str + '</pre>';
    }          
}
 -->