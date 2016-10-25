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

<?php
    $sub= $_GET['sub'];
    $cat= $_GET['cat'];
  ?>


  <head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
    <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="footer1.css" rel="stylesheet" type="text/css">
  <title>Subject</title>
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
#hvr-fade2 {
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
#hvr-fade2:hover, #hvr-fade2:focus, #hvr-fade2:active, #hvr-fade2 a:hover {
  color: black;
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
/*!
 * Start Bootstrap - Simple Sidebar HTML Template (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

/* Toggle Styles */

#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled {
    padding-left: 250px;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 0;
    height: 50%;
    margin-left: -250px;
    overflow-y: auto;
    background: #111;
    border-radius-bottom-right: 5px;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;

}

#wrapper.toggled #sidebar-wrapper {
    width: 250px;
}

#page-content-wrapper {
    width: 100%;
    //position: absolute;
    padding: 15px;
}

#wrapper.toggled #page-content-wrapper {
    //position: absolute;
    margin-right: -250px;
}

/* Sidebar Styles */

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
}

.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #999999;
}

.sidebar-nav li a:hover {
    text-decoration: none;
    color: #fff;
    background: rgba(255,255,255,0.2);
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}

.sidebar-nav > .sidebar-brand a {
    color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 250px;
    }

    #wrapper.toggled {
        padding-left: 0;
    }

    #sidebar-wrapper {
        width: 250px;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 0;
    }

    #page-content-wrapper {
        padding: 20px;
        //position: relative;
    }

    #wrapper.toggled #page-content-wrapper {
        //position: relative;
        margin-right: 0;
    }
}

  </style>
</head>
<body>

       <header><div class="logo"><a href="#menu-toggle" class="" id="menu-toggle">&#9776 </a><a href="index.php" id="hvr-fade1">Resmo</a></div>
      </div>
    </header>

<div class="content">

        <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
          <b>
            <ul class="sidebar-nav">
                <li id="hvr-fade">
                    <a href="Subject.php?cat=CHO&sub=<?php echo $sub ?>">CHO</a>
                </li>
                <li id="hvr-fade">
                    <a href="Subject.php?cat=Assignments&sub=<?php echo $sub ?>">Assignments</a>
                </li>
                <li id="hvr-fade">
                    <a href="Subject.php?cat=Previous Tests&sub=<?php echo $sub ?>">Previous Tests</a>
                </li>
                <li id="hvr-fade">
                    <a href="Subject.php?cat=Notes&sub=<?php echo $sub ?>">Notes</a>
                </li>
                <li id="hvr-fade">
                    <a href="Subject.php?cat=Miscellaneous&sub=<?php echo $sub ?>">Miscellaneous</a>
                </li>
                
            </ul>
          </b>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
               <center><h1><?php echo $sub ?> | <?php echo $cat ?></h1></center>
            <div class="row">
            <div class="col-sm-3"></div>
              <div class="col-sm-6">
                
                <?php
                $query1="SELECT * FROM resmo where sub_name='$sub' AND sub_cat='$cat'";
                $query2="SELECT file_location FROM resmo where sub_name='$sub' AND sub_cat='$cat'";
                $result1= mysql_query($query1);
                $result2= mysql_query($query2);

                  echo"<ul class=\"list-group\">";

                    if(mysql_num_rows($result1)>0){

                while ($row = mysql_fetch_assoc($result1)) {
                  echo "<li class=\"list-group-item\" id=\"hvr-fade2\"><a href=\"$row[file_location]\"> $row[file_name] </a></li>";
                }
                  echo "</ul>";
                }

                  else{
                    echo "<br><center><h4>Sorry Folks, Nothing Here</center></h4>";
              }
                ?>

              </div>
              <div class="col-sm-3"></div>
            </div>
          </div>
     </div>
</div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

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

  </body>
</html>