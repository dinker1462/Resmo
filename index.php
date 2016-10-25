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
  <title>Resmo</title>
  
  <style type="text/css">

  body{
    font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
  }
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
/* Fade */
#hvr-fade, #hvr-fade a{
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
  color:#111;
}
#hvr-fade:hover, #hvr-fade:focus, #hvr-fade:active, #hvr-fade:hover a, #hvr-fade:focus a, #hvr-fade:active a {
  background-color: #0058BC;
  color: white;
}


#hvr-fade1, #hvr-fade1 a {
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
  color: #b2b2b2;
  text-decoration: none;
}
#hvr-fade1:hover, #hvr-fade1:focus, #hvr-fade1:active, #hvr-fade1 a:hover {
  color: white;
  text-decoration: none;
}

a:hover, a:active{
text-decoration: none;
}

	
  .hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  position: absolute;
  overflow: hidden;
  width: 80%;
  height: 80%;
  left: 10%;
  top: 10%;
  border-bottom: 1px solid #FFF;
  border-top: 1px solid #FFF;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: scale(0,1);
  -ms-transform: scale(0,1);
  transform: scale(0,1);
}

.hovereffect:hover .overlay {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all 0.35s;
  transition: all 0.35s;
}

.hovereffect:hover img {
  filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="linear" slope="0.6" /><feFuncG type="linear" slope="0.6" /><feFuncB type="linear" slope="0.6" /></feComponentTransfer></filter></svg>#filter');
  filter: brightness(0.6);
  -webkit-filter: brightness(0.6);
}

.hovereffect h2 {
  text-transform: uppercase;
  text-align: center;
  position: relative;
  font-size: 17px;
  background-color: transparent;
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,-100%,0);
  transform: translate3d(0,-100%,0);
}

.hovereffect a, hovereffect p {
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,100%,0);
  transform: translate3d(0,100%,0);
}

.hovereffect:hover a, .hovereffect:hover p, .hovereffect:hover h2 {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}


.banner1{
	width: 100%;
	height: 20em;
	
	background-color: #140916;
}
.banner2{
  width: 100%;
  height: 20em;
  
  background-color: #16042D;
}
.banner3{
  width: 100%;
  height: 20em;
  
  background-color: #130456;
}
.banner4{
  width: 100%;
  height: 20em;
  
  background-color: #160382;
}
.banner5{
  width: 100%;
  height: 20em;
  
  background-color: #0058BC;
}

.banner_text{
	color: #FFFFFF;
	text-align: center;
	font-weight: bold;
	font-size: 6em;
	vertical-align: baseline;
	padding-top: 0.8em;
	}

  .col-sm-9 {
	clear: none;
	height: 90%;
	text-align: center;
	opacity: 1;
	font-size: xx-large;
	padding-right: 1em;
	padding-left: 1em;
	border-radius: 4px;
}

.tile1{
	border-radius: 4px;
	color: #222222;
	width: 6em;
	height: 6em;
	float: none;
	display: inline-block;
	margin: .5em;
	position: static;
	}
	
.tile2{
	border-radius: 4px;
	color: #FFFFFF;
	background-color: #202020;
	width: 4em;
	height: 4em;
	float: none;
	display: inline-block;
	margin: .5em;
	padding-top: 1em;
	}
	
  </style>
  </head>
  <body>
 
       <header><div class="logo"><a href="index.php" id="hvr-fade1">Resmo</a></div>
      
    </header>

<div class="content">
   
    
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <div class="banner1">
      <h3 class="banner_text">CHOs</h3>
      </div>
    </div>

    <div class="item">
      <div class="banner2">
      <h3 class="banner_text">Previous Tests</h3>
      </div>
    </div>

    <div class="item">
      <div class="banner3">
      <h3 class="banner_text">Notes</h3>
      </div>
    </div>

    <div class="item">
      <div class="banner4">
      <h3 class="banner_text">Assignments</h3>
      </div>
    </div>

    <div class="item">
      <div class="banner5">
      <h3 class="banner_text">Lab Manuals</h3>
      </div>
    </div>

  </div>
</div>
  <br>
  <div class="container-fluid">
  <div class="row">
  <div class="col-sm-3">
      <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Latest Resources</h3>
      </div>
      <div class="list-group">
        <div class="panel-body"> 
         <ul class="list-group">
          <?php
            $query="select * from resmo order by id desc";
            $result= mysql_query($query);
            for($i=0; $i<=9; $i++){
            $records = mysql_fetch_assoc($result);
            echo "<li class=\"list-group-item\" id=\"hvr-fade\"><a href=\"$records[file_location]\">$records[file_name] | $records[sub_name]</a></li>";
            } 
          ?>
         </ul>
        </div>
      </div>
      </div>
  </div>
  <div class="col-sm-9">

	<div class="tile1">
<div class="hovereffect">
	<img src="image/cpp.png" class="img-responsive" class="tile1" alt="">
  <div class="overlay">
  <br>
  <p>
  	<a href="Subject.php?sub=OOP&cat=CHO">OOP</a>
  </p>
</div>
</div>
	</div>


    <div class="tile1">
<div class="hovereffect">
    <img src="image/dbms.png" class="img-responsive" class="tile1" alt="">
<div class="overlay">
<br>
<p>
	<a href="Subject.php?sub=DBMS&cat=CHO">DBMS</a>
</p>
</div>
</div>
    </div>


    <div class="tile1">
<div class="hovereffect">
    <img src="image/html.jpg" class="img-responsive" class="tile1" alt="">
<div class="overlay">
   <br>
   <p>
   	<a href="Subject.php?sub=CST&cat=CHO">CST</a>
   </p>
   </div>
   </div>
    </div>


    <div class="tile1">
<div class="hovereffect">
    <img src="image/linux.png" class="img-responsive" class="tile1" alt="">
<div class="overlay">
   <br>
   <p>
    <a href="Subject.php?sub=Linux&cat=CHO">Linux</a>
   </p>
   </div>
   </div>
    </div>


    <div class="tile1">
<div class="hovereffect">
    <img src="image/cn.jpg" class="img-responsive" class="tile1" alt="">
<div class="overlay">
<br>
<p>
  <a href="Subject.php?sub=CN&cat=CHO">CN</a>
</p>
</div>
</div>
    </div>


    <div class="tile1">
<div class="hovereffect">
    <img src="image/mpi.png" class="img-responsive" class="tile1" alt="">
<div class="overlay">
<br>
<p>
  <a href="Subject.php?sub=MPI&cat=CHO">MPI</a>
</p>
</div>
</div>
    </div>


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
 <script src="../../dist/js/bootstrap.min.js"></script>  
 <script>
  $('.carousel').carousel({
   interval: 3000
  });
 </script>   

  </html>