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
  
  $con = mysqli_connect("localhost", "root", "", "infotainment");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
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
                  		Add an Item
                  	</font>
					
					<?php
					if(isset($_POST["item_name"]))
 {
	 

$img = addslashes(file_get_contents($_FILES["cover"]["tmp_name"]));


$query = 'insert into item(
            name,
			category,
            language,
			country,
            casts,
            releaseDate,
			locations,
			timeDuration,
			resolution,
			downloadLink,
			shortStory,
			cover
            )
            values
            (
            "' .$_POST["item_name"].'",
			"' .$_POST["Type"].'",
            "' .$_POST["language"].'",
			"' .$_POST["country"].'",
			"' .$_POST["casts"].'",
			"' .$_POST["rdate"].'",
			"' .$_POST["locations"].'",
			"' .$_POST["time"].'",
			"' .$_POST["resolution"].'",
			"' .$_POST["dlink"].'",
			"' .$_POST["shortstory"].'",
			"'.$img.'"
            )'; 
			
    if(mysqli_query($con ,$query))
    {
        Echo "upload successful";
		
		$id = mysqli_insert_id($con);
		
		$img1 = addslashes(file_get_contents($_FILES["ss1"]["tmp_name"]));
		$query = 'insert into screenshot
            values
            (
            "' .$id.'",
			"'.$img1.'"
            )'; 
		mysqli_query($con ,$query);
		
		$img2 = addslashes(file_get_contents($_FILES["ss2"]["tmp_name"]));
		$query = 'insert into screenshot
            values
            (
            "' .$id.'",
			"'.$img2.'"
            )';
		mysqli_query($con ,$query);
		
		$img3 = addslashes(file_get_contents($_FILES["ss3"]["tmp_name"]));
		$query = 'insert into screenshot
            values
            (
            "' .$id.'",
			"'.$img3.'"
            )';
		mysqli_query($con ,$query);
		
		$img4 = addslashes(file_get_contents($_FILES["ss4"]["tmp_name"]));
		$query = 'insert into screenshot
            values
            (
            "' .$id.'",
			"'.$img4.'"
            )';
			mysqli_query($con ,$query);
    } 
	else
	{
        Echo "not successful";
    }
 }
					?>
                  	
                  
                  	<font color="#400090"> <h>Select Catagory :</h></font>
                  	<br /> <br />
	<form action="Admin.php" method="post" enctype="multipart/form-data">
	<select name="Type">
	  <option value="movies">Movies</option>
	  <option value="dramas">Dramas</option>
	  <option value="tvshows" selected="selected">Tv-Shows</option>
	  <option value="telefilms">Telefilms</option>
	  <option value="others">Others</option>
	</select>
	<br /> <br />
	<font color="#400090"> <h>Input informations :</h></font>
                  	<br /> <br />
                  
                  
                  	Enter Name : <input type="text" name="item_name" /><br/><br />
					Enter Cover : <input type="file" name="cover" id="cover"><br/><br/>
                  	Enter Language : <input type="text" name="language" /><br/><br />
                  	Enter Country : <input type="text" name="country" /><br/><br />
                  	Enter Casts : <input type="text" name="casts" /><br/><br />
                  	Enter Release-Date : <input type="text" name="rdate" /><br/><br />
                  	Enter Locations : <input type="text" name="locations" /><br/><br />
                  	Enter Time-Duration : <input type="text" name="time" /><br/><br />
                  	Enter Resolution : <input type="text" name="resolution" /><br/><br />
                  	Enter Download-Link : <input type="text" name="dlink" /><br/><br />
                  	Enter Short-story : <input type="text" name="shortstory" /><br/><br />
                  
                  <br /> <br />
	             <font color="#400090"> <h>Upload Screenshots :</h></font>
                  	<br /> <br />
                    
    				Shot1 : <input type="file" name="ss1" id="ss1"> <br /><br />
    				Shot2 : <input type="file" name="ss2" id="ss2"> <br /><br />
    				Shot3 : <input type="file" name="ss3" id="ss3"> <br /><br />
    				Shot4 : <input type="file" name="ss4" id="ss4"> <br /><br />
					<br /><br />
					
					<div align="center">
                  <input type="submit" style="font-face: 'Comic Sans MS'; font-size: large; color: white; background-color: #008FAD; " value=" Add to Cart "> </form>
                  </div>
                  
                </div>
              </div>
            </div>
           <div class="col-2">
           	
           	
                  	<br /><div align=center>What do you want to do?</div><br />
                  	</font>
                  	<br />
                  	<div align=center><a href="Admin.php">Add an item</a></div><br />
                  	<div align=center><a href="editItem.php">Edit an item</a></div><br />
                  	<div align=center><a href="addNews.php">Update news</a></div><br />
              <br /><br />
                 <div id="">
			<form action="logoutA.php" method="post">

				<div align=center>
					<a href="logoutA.php">LogOut</a>
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
