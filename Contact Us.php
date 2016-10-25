<?php
$servername = "localhost";
$username = "root";
$password = "";
$db= "Resmo";

  // Create connection
  mysql_connect($servername, $username, $password);

  mysql_select_db($db);

  $only_name= $_POST['name'];
  $only_email=$_POST['email'];
  $message=$_POST['message'];
  $to="resmoproject@gmail.com";
  $subject="New Message from site visitor ".$only_name;
  

  $body_message='From: '.$only_name."\n";
  $body_message .='Email: '.$only_email."\n";
  $body_message .='Message: '.$message."\n";


  $headers='From: '.$only_name."\r\n";
  $headers .='Reply-To: '.$only_email."\r\n";
  mail($to,$subject,$body_message,$headers);
  ?>

<!doctype html>

<html>
      <script>
      function button(){
            alert("Your Message has been Sent!");
          }
      </script>
  <head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <title>Contact</title>
  <style type="text/css">
  body {overflow-x: hidden;}



  footer
{
  background: #111;
  color: #eee;
  font-size: 1em;
  padding: 1em;
  display: table-row;
  height: 1px;
}
ul#unstyled
{
  list-style: none;
  padding: 0;
}
.footer-nav a
{
  color: #b2b2b2;
}
.footer-nav a:hover
{
  color: #fff;
  text-decoration: none;
}
.footer-nav li
{
  display: inline;

}
.footer-nav li:not(:first-child):before
{
  content: '|';
  padding:0px 10px;
}

ul#unstyled
{
  list-style: none;
  padding: 1em;
}
.col-sm-3 .logo-bottom{
  padding:0.2em;
  text-align: center;
  font-size: 2em;
  }
.col-sm-6 .footer-nav{
  text-align: center; 
  }
.col-sm-3 .footer-nav{
  text-align: center; 
  }

.logo{
  font-size:2.2em;
  padding: 0.2em;

}

html {
    height:100%;
    font-family: sans-serif;
}
body{
    height:100%;
    display: table;
    width:100%;
    font-family: sans-serif;
}
.content{
  display: table-row;
  height: 100%;
}
header{
  background: #111;
  display:table-row;
  height:1px;
  color: #eee;
  width: 100%;

}
/* Fade */
#hvr-fade {
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  overflow: hidden;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: color, background-color;
  transition-property: color, background-color;
}
#hvr-fade:hover, #hvr-fade:focus, #hvr-fade:active {
  background-color: #0058BC;
  color: white;
}
#hvr-fade1 {
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  overflow: hidden;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: color, background-color;
  transition-property: color, background-color;
}
#hvr-fade1:hover, #hvr-fade1:focus, #hvr-fade1:active, #hvr-fade1 a:hover {
  color: white;
  text-decoration: none;
}
.logo a{
color: #b2b2b2;
text-decoration: none;
}
.logo a:hover, .logo a:active{
color: white;
text-decoration: none;
}

  .col-sm-7 {
	clear: none;
	height: 90%;
	text-align: center;
	border-style: solid;
	opacity: 1;
	font-size: xx-large;
	border-color: #222222;
  background-color: #F2F2F2;
	padding-right: 1em;
	padding-left: 1em;
	border-radius: 4px;
}

  </style>
  </head>
    
  <body>
   <header><div class="logo"><a href="index.php" id="hvr-fade1">Resmo</a></div>
      </div>
    </header>
    <div class="content">
   
    <br>

    <!-- Container (Contact Section) -->
<div class="container">
  <h2 class="text-center">CONTACT US!</h2> <br> <br>
  <div class="row"> <center>
    <div class="col-sm-5"> <br> <br> <br> <br>
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Rajpura, Punjab, India</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 8556977633</p>
      <p><span class="glyphicon glyphicon-envelope"></span> resmoproject@gmail.com</p>	   
    </div>
    <div class="col-sm-7">
      <div class="row">
      <br>
        <div class="col-sm-4 form-group">
          <form method="post">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
        <br>
          <button class="btn btn-default pull-right" type="submit" id="hvr-fade" onclick="button()">Send Message</button>
        </form>
        </div> </center>
      </div>	
    </div>
  </div>
</div>
   </center>
   </div>
   </div>
   </div>
   <footer class="site-footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3" id="unstyled">
          <div class="logo-bottom">Resmo, 2016
          </div>
        </div>
       
        <div class="col-sm-6">
          <ul id="unstyled" class="footer-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="About Us.php">About Us</a></li>
          <li><a href="Contact Us.php">Contact Us</a></li>
          <li><a href="Contribute.php">Contribute</a></li>
          </ul>
        </div>
        <div class="col-sm-3">   
          <ul id="unstyled" class="footer-nav">
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Google+</a></li>
          </ul>
        </div>
        
       </div>
      </div>
  </footer>
  <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.js" type="text/javascript"></script>
  </body>
    
  </html>
