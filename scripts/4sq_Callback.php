<?php
/*
 *     4sq_Callback.php
 *      
 *      Copyright 2013 Shion Guha <sguha@cs.cornell.edu>
 *      
 *      This script is written for the glome project under the supervision of Prof. Stephen Wicker, Cornell Univeristy 
 *      
 *      
 */
//defining our necessary keys and urls here
$client_id = "520RC3NSGXPBO2K3RRMWJPLDGGO33ULBXJBTXIRIIVEMHSJM";
$secret = "WKDZV4XA11531XYR2UJWE3BQ2VA1SLJSNTP4BKRSNS5UPQ4Y";
$redirect = "http://shionguha.webfactional.com/scripts/4sq_Callback.php";

//processing code variable in header and getting json stuff 
if($_GET['code']){
//We need to hit up the authkey URL and get the key in JSON format
$authkey = file_get_contents("https://foursquare.com/oauth2/access_token?client_id=".$client_id."&client_secret=".$secret."&grant_type=authorization_code&redirect_uri=".$redirect."&code=".$_GET['code']);
//We then need to decode it and store that key in a variable (or in a database)
$decoded_auth = json_decode($authkey,true);
$access_token = $decoded_auth['access_token'];
//we should save this token to a file on the server for future access.
file_put_contents('accesstokens.txt', $access_token.PHP_EOL, FILE_APPEND);
//we then look up whatever endpoint of the api we want
$userinfo = file_get_contents("https://api.foursquare.com/v2/users/self?oauth_token=".$access_token);
//writing entire json response to file on server
//echo $access_token.".json";
file_put_contents('json/'.$access_token.".json",$userinfo);
//outputting some overall foursquare info just for fun.
$decoded_userinfo = json_decode($userinfo, true);
$name = $decoded_userinfo['response']['user']['firstName'];
$num_friends = $decoded_userinfo['response']['user']['friends']['count'];
$num_badges = $decoded_userinfo['response']['user']['badges']['count'];
$num_mayorships = $decoded_userinfo['response']['user']['mayorships']['count'];
$num_checkins = $decoded_userinfo['response']['user']['checkins']['count'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>glome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="container">

      <!-- Main information here -->
      <div class="hero-unit">
        <p> </p>
        <p> </p>
        <h1>Hello, <?php echo $name; ?></h1>
        <p> </p>
        <p> </p>
        <p>Thank you for allowing us to access your foursquare usage data and contributing to science ! We really appreciate it.</>
        <p> </p>
        <p> </p>
        <p>Hmm. I noticed something interesting. You have <b><?php echo $num_checkins; ?></b> checkins, <b><?php echo $num_friends; ?></b> friends, <b><?php echo $num_badges; ?></b> badges and <b><?php echo $num_mayorships; ?></b> mayorships. Sweet !
        <p><b>Please</b> don't unauthorize this app from foursquare in the next 7 days. I will be writing code furiously to get some of your other data. Thanks !</p>
        <p><i>You can close this window whenever you are done.</i></p>
      </div>

      <hr>

      <footer>
        <p class ="left"><b>If you have any questions regarding this study please email Shion Guha at sg648@cornell.edu</b></p>
        <p class="left">This application uses the foursquare<sup>TM</sup> application programming interface but is not endorsed or certified by Foursquare Labs, Inc</p>
		<p class="left"><img src="http://colinwren.com/projects/route/poweredbyfoursquare-mark.png" /></p></p>
      </footer>

    </div> <!-- /container -->
   
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>