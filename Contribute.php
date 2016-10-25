<?php
$servername = "localhost";
$username = "root";
$password = "";
$db= "Resmo";

  // Create connection
  mysql_connect($servername, $username, $password);

  mysql_select_db($db);
	if (isset($_FILES['upload'])) {
		$errors=array();
		$file_name=$_FILES['upload']['name'];
		$file_size=$_FILES['upload']['size'];
		$file_tmp=$_FILES['upload']['tmp_name'];
		$file_type=$_FILES['upload']['type'];
		$file_ext=strtolower(end(explode('.',$_FILES['upload']['name'])));
		$extensions=array("doc","docx","pdf","txt","jpeg","png","jpg","jpeg");
		$file_name=preg_replace("#[^a-z0-9.]#i", "", $file_name);
		$file_path="Uploads/".$file_name;
    $file_sub_cat=$_POST['sub_cat'];
    $file_sub_name=$_POST['sub_name'];
		if (in_array($file_ext,$extensions)== false) {
      $errors[]='Extension not allowed, Please choose an appropriate file.';
      echo "<script>
            alert(\"Extension not allowed, Please choose an appropriate file.\");
      </script>
      ";
		}
		if ($file_size>2097152) {
      $errors[]='File size should not be more than 2 MB';
      echo "<script>
            alert(\"File size should not be more than 2 MB\");
      </script>
      ";
		}
    if ($file_sub_cat=="one" or $file_sub_name=="one") {
      $errors[]='Please Fill out all the Fields';
      echo "<script>
            alert(\"Please Fill out all the Fields\");
      </script>
      ";
    }
        if ($file_size==0) {
          $errors[]='Please attach a File';
      echo "<script>
            alert(\"Please attach a File\");
      </script>
      ";
    }
		if (empty($errors)==true) {
			move_uploaded_file($file_tmp,$file_path);
			echo "<script>
            alert(\"Success! Thanks for Contributing\");
      </script>
      ";
			$dbADD="insert into resmo_upload(file_name,sub_cat,sub_name,file_location)
				values('$file_name','$file_sub_cat','$file_sub_name','$file_path')";
			$result=mysql_query($dbADD);
		}else{
		}
	}
?>



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
    <link href="footer1.css" rel="stylesheet" type="text/css">
  <title>Contribute</title>
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
      
<br> <br> <br> <br> <center>
<div class="container">
  <h1>Upload Your File here...</h1>
  <form method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">UPLOAD:</label>
      <input  type="file" name="upload">

    <br>
  

<select class="form"name="sub_name">
<option value="one">Select Subject</option>
    <option value="DBMS">DBMS</option>
    <option value="CST">Client Side Technologies</option>
    <option value="Linux">Linux</option>
    <option value="CN">Computer Networks</option>
    <option value="MPI">Microprocessors and Interfacing</option>
    <option value="OOP">C++</option>
</select>
<br> <br>
<select class="form" name="sub_cat">
    <option value="one">Select Category</option>
    <option value="CHO">CHO</option>
    <option value="Previous Tests">Previous Test Paper</option>
    <option value="Notes">Notes</option>
    <option value="Assignments">Assignments</option>
    <option value="Miscellaneous">Miscellaneous</option>
</select>
</div>




<br> <br>
    <input type="submit" name="submit" id="hvr-fade" value="UPLOAD">


    
  
</div>
  </form>
</div>

		</div>
</center>
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
