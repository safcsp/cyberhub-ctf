<?php
$isGuest = true;
if(strstr($_SERVER['HTTP_USER_AGENT'], 'CyberSec Inc')){
    $isGuest = false;
    header('x-flag: CYBERHUB{W3lcomeC0mpanyUs3R}');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CyberSec Inc for security services</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-color:#1b262c;">
	<div style="text-align:center;"><img src="./LogoMakr_5AhwaN.png" alt="Company Private Users"></div><br><br>
      <?php
      if( $isGuest ){
          echo '<h1 style="color:#3282b8;text-align:center;"> Hi User, access limited for company browser</h1>';
      }else{
          echo '<h1 style="color:#3eff00; margin-left:16%">Access granted:employee <br></h1><h2 style="color:#50d890;text-align:center;">the flag you are looking for is here somewhere </h2>';
      }
      ?>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script>

      </script>
    </body>
  </html>
