<?php 
session_start();
  if(isset($_SESSION['user']))
  {
  	echo 'Admin Panel';
  }
  else if(isset($_COOKIE['user'])) {
    echo 'Admin Panel';
  }
  else {
   header('Location:blank.php');
  }
  
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>InfoTainment.com</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Myriad_Pro_300.font.js" type="text/javascript"></script>
<!--[if lt IE 7]>
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, #header .row-2 ul li a, #content, .list li');</script>
<![endif]-->
</head>
<body id="page2">
<div class="tail-top">
  <div class="tail-bottom">
    <div class="body-bg">
      <!-- HEADER -->
      <div id="header">
      	<div class="extra"><img src="images/header-img.png" alt="" /></div>
        <div class="row-1">
          <div class="fleft"><a href="#"><img src="images/logo.PNG" alt="" /></a></div>
          <div class="fright"><a style= "top:2px; right: 500px; font-size:16px color:#03617A ;"href="help.php"> Help </a></div>
          echo '<div class="fright"><a style= "top:2px; right: 520px; font-size:16px color:#03617A ;"href="Admin.php"> MyProfile </a></div>';
        </div>
        <div class="row-2">
          <ul>
            <li class="m1"><a href="index.php" >Home</a></li>
            <li class="m2"><a href="movies.php" >Movies</a></li>
            <li class="m3"><a href="dramas.php">Dramas</a></li>
            <li class="m4"><a href="tvshows.php">TV-shows</a></li>
            <li class="m5"><a href="telefilms.php">Telefilms</a></li>
            <li class="m6"><a href="others.php">Others</a></li>
          </ul>
        </div>
        <div class="row-3">
        	<!--img src="images/slogan.PNG" alt="" /-->
          <form action="#" method="post" id="search-form">
            <fieldset>
              <div style="position: relative; top:90px; left: 0px;"><span>
                <input type="text" value="Enter keyword here" onfocus="if(this.value=='Enter keyword here'){this.value=''}" onblur="if(this.value==''){this.value='Enter keyword here'}" />
                </span><a href="#"><img src="images/button.gif" alt="" /></a></div>
            </fieldset>
          </form>
        </div>
      </div>
      <!-- CONTENT -->
      <div id="content">
        <div class="inner_copy">More <a href="#">Website Templates</a> @ Templates.com!</div>
        <div class="tail-right">
          <div class="wrapper">
            <div class="col-1">
              <div class="indent">
                <div class="indent1" >
                	
                  
                  	<font color="#00687E">
                  		Edit an Item
                  	</font>
                  	
                  
                  	<font color="#400090"> <h>Select Catagory :</h></font>
                  	<br /> <br />
	<form action="">
	<select name="Item Type">
	  <option value="movies">Movies</option>
	  <option value="dramas">Dramas</option>
	  <option value="tvshows" selected="selected">Tv-Shows</option>
	  <option value="telefilms">Telefilms</option>
	  <option value="others">Others</option>
	</select>
	</form>
	<br /> <br />
	<form action="editItem.php" method="post">
		<font color="#400090"> <h>Enter Id to be Edited :</h></font> <input type="text" name="editId" /><br/><br />
	</form>
	
	<br /> 
	<font color="#400090"> <h>Edit informations :</h></font>
                  	<br /> <br />
                  
                  <form action="editItem.php" method="post">
                  	Name : <input type="text" name="item_name" /><br/><br />
                  	Language : <input type="text" name="language" /><br/><br />
                  	Country : <input type="text" name="country" /><br/><br />
                  	Casts : <input type="text" name="casts" /><br/><br />
                  	Release-Date : <input type="text" name="rdate" /><br/><br />
                  	Locations : <input type="text" name="locations" /><br/><br />
                    Time-Duration : <input type="text" name="time" /><br/><br />
                  	Resolution : <input type="text" name="resolution" /><br/><br />
                  	Download-Link : <input type="text" name="dlink" /><br/><br />
                  	Short-story : <input type="text" name="shortstory" /><br/><br />
                  </form>
                  
                  <br /> <br />
	             <font color="#400090"> <h>edit Screenshots :</h></font>
                  	<br /> <br />
                  <form action="upload.php" method="post" enctype="multipart/form-data">
                    
    				Shot1 : <input type="file" name="fileToUpload" id="fileToUpload"> <input type="submit" value="Upload" name="submit"><br />
    				Shot2 : <input type="file" name="fileToUpload" id="fileToUpload"> <input type="submit" value="Upload" name="submit"><br />
    				Shot3 : <input type="file" name="fileToUpload" id="fileToUpload"> <input type="submit" value="Upload" name="submit"><br />
    				Shot4 : <input type="file" name="fileToUpload" id="fileToUpload"> <input type="submit" value="Upload" name="submit"><br />
					</form>
					<br /><br />
					
					<div align="center">
                  <input type="submit" style="font-face: 'Comic Sans MS'; font-size: large; color: white; background-color: #008FAD; " value="  Done Editing  ">
                  </div>
                  
                </div>
              </div>
            </div>
           <div class="col-2">
           	<font color="#400090">
                  		<br /><div align=center>What do you want to do?</div><br />
                  	</font>
                  	<br />
                  	<div align=center><a href="Admin.php">Add an item</a></div><br />
                  	<div align=center><a href="editItem.php">Edit an item</a></div><br />
                  	<div align=center><a href="addNews.php">Update news</a></div><br />
              <br /><br />
                 <div id="">
			<form action="logout.php" method="post">

				<div align=center>
					<a href="logout.php">LogOut</a>
				</div>
			</form>
		</div>
              
            </div>
          </div>
        </div>
      </div>
      <!-- FOOTER -->
      <div id="footer">
        <div class="indent">
          <div class="fleft"> <input name="submit" type="submit" value="About InfoTainment.com" /> </div>
          <div class="fright">Copyright - Kareema Zohra</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
<div align=center>
	<font color="#006574"> Thank you for visiting this website</font></a></div></body>
</html>
