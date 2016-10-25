<!doctype html>
  <html>

<?php
  ?>

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
  <title>title goes here</title>
  <style type="text/css">
  .container{
	  background-color:#c9c9c9;
	  }

	/*searchbar */

#search {
    float: right;
    margin-top: 9px;
    width: 250px;
}

.search {
    padding: 5px 0;
    width: 230px;
    height: 30px;
    position: relative;
    left: 5px;
    float: left;
    line-height: 22px;
}

    .search input {
        position: absolute;
        width: 0px;
        float: Left;
        margin-left: 210px;
        -webkit-transition: all 0.7s ease-in-out;
        -moz-transition: all 0.7s ease-in-out;
        -o-transition: all 0.7s ease-in-out;
        transition: all 0.7s ease-in-out;
        height: 30px;
        line-height: 18px;
        padding: 0 2px 0 2px;
        border-radius:1px;
    }

        .search:hover input, .search input:focus {
            width: 200px;
            margin-left: 0px;
        }

.btn {
    height: 30px;
    position: absolute;
    right: 0;
    top: 5px;
    border-radius:1px;
}

	  
  .main1{
	text-align: center;	  
	  }
.right1 {
	background-color: #3490D0;
	text-align: center;
	width: 15%;
	border-radius: 4px;
	color: #000000;
	font-weight: 300;
	font-style: normal;
	line-height: 2em;
	font-size: 1.5em;
	clear: none;
	display: inline-block;
	float: right;
}

.header1 {
	float: none;
	border-radius: 4px;
	height: 5%;
	background-color: #89bdd3;
	position: static;
	text-align: center;
	padding: 1%;
	bottom: auto;
	clear: both;
	color: #000000;
	font-weight: bold;
	font-size: 2.5em;
	font-variant: normal;
	text-decoration: none;
}

  .col-sm-7 {
	clear: none;
	background-color: #e3e3e3;
	height: 90%;
	text-align: center;
	border-style: solid;
	opacity: 1;
	font-size: xx-large;
	border-color: #3490d0;
	padding-right: 1em;
	padding-left: 1em;
	border-radius: 4px;
}
.table1{
	text-align: center;
	font-size: 1.5em;
	padding-left: 3em;
	padding-right: 3em;
	font-weight: bold;
	}
.footer1 {
	border-radius: 4px;
	float: none;
	height: 5%;
	background-color: #3490d0;
	position: static;
	padding-top: 1em;
	padding-right: 1em;
	padding-left: 1em;
	padding-bottom: 1em;
	text-align: center;
	bottom: auto;
	clear: both;
}
  .container .header1 .panel.panel-default {
	color: #3490d0;
}
  </style>
  </head>
    
  <body>
  <div class="container-fluid">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <a class="nav navbar-brand" href="#"> Resmo</a>
      <form class="navbar-form navbar-right" role="search">
             <form class="navbar-form" role="search">
        <div class="search">
<input type="text" class="form-control" maxlength="64" placeholder="Search" />
 <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
</div>
	</div>
       </form>
    </nav>
      <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
      <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
   <nav class="navbar navbar-inverse navbar-bottom">
 <div class="row">
 <div class="col-lg-6 col-lg-offset-5 text-center">
  
  
  	<ul class="nav navbar-nav ">
      <li><a  href="index.php">Home</a></li>
      <li ><a href="Contribute.php">Contribute</a></li>
      <li ><a href="About us.php">About us</a></li>
      <li ><a href="Contact Us.php">Contact us</a></li>
  	
  	</ul>
    </div>
  
  </div>
  </nav>
  </div>
  <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.js" type="text/javascript"></script>
  </body>
    
  </html>
