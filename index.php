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
//defining our necessary keys and url here
$client_id = "ENTER YOUR CLIENT ID HERE";
$secret = "ENTER YOUR SECRET ID HERE";
$redirect = "ENTER YOUR REDIRECT URI HERE";
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
        <h1>glome</h1>
        <p> </p>
        <p> </p>
        <p>This is an app which will collect all your 4sq usage data. Please click on the button below to allow us access to your data.</p>
        <p> </p>
        <p> </p>
        <p><a href="https://foursquare.com/oauth2/authenticate?client_id=<?php echo	$client_id; ?>&response_type=code&redirect_uri=<?php echo $redirect; ?>" class="btn btn-primary btn-large"> log in with foursquare &raquo;</a></p>
        <p><b>Note:</b> If you signed up for foursquare using your Facebook credentials then you may not be able to use this app. Unfortunately, this is a constraint imposed by foursquare and oauth2. :(</p>
        <p>Please try it at least once though.</p>
      </div>

      <hr>

      <footer>
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
 

	
