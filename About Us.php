<!doctype html>
  <html>

  <?php

$servername = "localhost";
$username = "root";
$password = "";
$db= "Resmo";

  // Create connection
    mysql_connect($servername, $username, $password);

    mysql_select_db($db);
  ?>


  <head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="footer1.css" rel="stylesheet" type="text/css">
  <title>About Us</title>
  <style type="text/css">
 
  /*footer */

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

  </style>
  </head>
    
  <body>
        
        <header><div class="logo"><a href="index.php" id="hvr-fade1">Resmo</a></div>
      </div>
    </header>
    <div class="content">
  <div class="container-fluid">

    <br>
    <br>
    <br>
 <!-- Page Content -->
    <div class="container">
        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About Us
                    <small>MEET THE RAGTAG BAND</small>
                </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>
            </div>
        </div>

        <!-- Team Members Row -->
        <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Team</h2>
            </div>
            <div class="col-sm-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="image/blossom.jpg" alt="">
                <h3>Dinker Gulati
                    <small>(Exaggerator)</small>
                </h3>
                <p>Likes everything perfect. Always over exited and expects same from everyone. Overwhelmingly obssesed with "New York".</p>
            </div>
            <div class="col-sm-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="image/bubbels.jpg" alt="">
                <h3>Davinder Pal Singh
                    <small>(Davin)</small>
                </h3>
                <p>Kill or be killed. Death is the ultimate truth.Revered member of No-Sleep Team. All hail Satan.</p>
            </div>
            <div class="col-sm-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="image/buttercup.jpg" alt="">
                <h3>Chaitanya Sharma
                    <small>(Mighty)</small>
                </h3>
                <p>Rock n Roll or bust. You are either from Shimla or you suck, just like EDM. Peace\m/</p>
            </div>
            <div class="col-sm-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="image/mojojojo.jpg" alt="">
                <h3>Divyansh Tangri
                    <small>(Devi)</small>
                </h3>
                <p>He likes it in the back...end. Ludhiana is love, Ludhiana is life. There's a name for men without beard, women.</p>
            </div>
            
        </div>

        <hr>
         </div>
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
