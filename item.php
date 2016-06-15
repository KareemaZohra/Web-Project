<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "test");
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
<body id="page9">
<div class="tail-top">
  <div class="tail-bottom">
    <div class="body-bg">
      <!-- HEADER -->
      <div id="header">
      	<div class="extra"><img src="images/header-img.png" alt="" /></div>
        <div class="row-1">
          <div class="fleft"><a href="#"><img src="images/logo.PNG" alt="" /></a></div>
          <div class="fright"><a style= "top:2px; right: 500px; font-size:16px color:#03617A ;"href="help.php"> Help </a></div>
         <?php 

if(isset($_SESSION['user']))
  {
  	if($_SESSION['user']=='kareema')
	{
		echo '<div class="fright"><a style= "top:2px; right: 520px; font-size:16px color:#03617A ;"href="Admin.php"> MyProfile </a></div>';
	}
	else 
	{echo '<div class="fright"><a style= "top:2px; right: 520px; font-size:16px color:#03617A ;"href="user.php"> MyProfile </a></div>';
	}
  }
  else if(isset($_COOKIE['user'])) {
    echo '<div class="fright"><a style= "top:2px; right: 520px; font-size:16px color:#03617A ;"href="Admin.php"> MyProfile </a></div>';
  }
  else if(isset($_COOKIE['normal'])) {
    echo '<div class="fright"><a style= "top:2px; right: 520px; font-size:16px color:#03617A ;"href="user.php"> MyProfile </a></div>';
  }
  ?>
        </div>
        <div class="row-2">
          <ul>
            <li class="m1"><a href="index.php" class="active">Home</a></li>
            <li class="m2"><a href="movies.php">Movies</a></li>
            <li class="m3"><a href="dramas.php">Dramas</a></li>
            <li class="m4"><a href="tvshows.php">TV-shows</a></li>
            <li class="m5"><a href="telefilms.php">Telefilms</a></li>
            <li class="m6"><a href="others.php">Others</a></li>
          </ul>
        </div>
        <div class="row-3">
        	<!--img src="images/slogan.PNG" alt="" /-->
          <form action="search.php" method="post" id="search-form">
            <fieldset>
              <div style="position: relative; top:90px; left: 0px;"><span>
                <input type="text" value="Enter keyword here" onfocus="if(this.value=='Enter keyword here'){this.value=''}" onblur="if(this.value==''){this.value='Enter keyword here'}" />
                </span><a href="search.php"><img src="images/button.gif" alt="" /></a></div>
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
                <div class="indent1" >
				
				<?php
					$query = 'select * from item where itemId=1;
					
					$result = mysqli_query($con,$query);
					
					$num_row = mysqli_num_rows($result);
				
				$row = mysqli_fetch_assoc($result);
				
				$name=$row["name"];
				$language=$row["language"];
				$category=$row["category"];
				$country=$row["country"];
				$casts=$row["casts"];
				$releaseDate=$row["releaseDate"];
				$locations=$row["locations"];
				$timeDuration=$row["timeDuration"];
				$resolution=$row["resolution"];
				$downloadLink=$row["downloadLink"];
				$shortStory=$row["shortStory"];
				
				if(isset($_POST["ratings"]))
				{
					$query = 'insert into rating
							values
							(
							"' .$_GET["itemId"].'",
							"' .$_POST["ratings"].'"
							)'; 
							
					mysqli_query($con ,$query);
					
				}
				
				$query = 'select avg(rate) as avg from rating where itemId="'.$_GET["itemId"].'"';
					
					$result = mysqli_query($con, $query);
					$row = mysqli_fetch_assoc($result);
					$rating=$row["avg"];
				?>
                	
                  
                  	<font color="#00687E">
                  		Item Name <?php echo $name;?>
                  	</font>
                  
                  <div style="background-color: #7806A4; padding: 2px;">
                  	Name : <?php echo $name;?>
                  </div> 
                  <div style="background-color: #7806A4; padding: 2px;">
                  	Rating : <?php echo $rating;?>
                  </div>
                  <div style="background-color: #7806A4; padding: 2px;">
                  	language : <?php echo $language;?>
                  </div>
                  <div style="background-color: #7806A4; padding: 2px;">
                  	Country : <?php echo $country;?>
                  </div>
                  <div style="background-color: #7806A4; padding: 2px;">
				  
				  <?php
					$query = 'select * from screenshot where itemId="'.$_GET["itemId"].'"';
					$result = mysqli_query($con, $query);
					
					$num_row = mysqli_num_rows($result);
				
					$row = mysqli_fetch_assoc($result);
					$photo1=$row["photo"];
					$row = mysqli_fetch_assoc($result);
					$photo2=$row["photo"];
					$row = mysqli_fetch_assoc($result);
					$photo3=$row["photo"];
					$row = mysqli_fetch_assoc($result);
					$photo4=$row["photo"];
				  ?>
                  	Screenshots : <div align="center" style="padding: 10px; ">
                  		<img src="data:image/jpeg;base64,<?php echo base64_encode($photo1);?>" width="250px" height="200px" />
                  	<img src="data:image/jpeg;base64,<?php echo base64_encode($photo2);?>" width="250px" height="200px" /> <br />
                  	<img src="data:image/jpeg;base64,<?php echo base64_encode($photo3);?>" width="250px" height="200px" />
                  	<img src="data:image/jpeg;base64,<?php echo base64_encode($photo4);?>" width="250px" height="200px" /></div>
                  </div>
                  <div style="background-color: #7806A4; padding: 2px;">
                  	Cast : <?php echo $casts;?>
                  </div>
                  <div style="background-color: #7806A4; padding: 2px;">
                  	Short story : <textarea style="background-color: #F4C6F1;" rows="3" cols="50"><?php echo $shortStory;?></textarea>
                  </div>
                  <div style="background-color: #7806A4; padding: 2px;">
                  	Release date : <?php echo $releaseDate;?>
                  </div>
                  <div style="background-color: #7806A4; padding: 2px;">
                  	Locations : <?php echo $locations;?>
                  </div>
                  <div style="background-color: #7806A4; padding: 2px;">
                  	Time Duration : <?php echo $timeDuration;?>
                </div>
                <div style="background-color: #7806A4; padding: 2px;">
                  	Resolution (available): <?php echo $resolution;?>
                  </div>
                  <div style="background-color: #7806A4; padding: 2px;">
                  	Download link : <a style="color: #400090;" href="<?php echo $downloadLink;?>"><?php echo $downloadLink;?></a>
                  </div>
             
              </div>
            </div>
            <div class="col-2">
            	<br /> <br />
            	<div align="center">
              <font color="#400090"> <h>Rate This Item :</h></font>
                  	<br /> <br />
	<form action="item.php?itemId=<?php echo $_GET["itemId"];?>" method="POST">
	<select name="ratings">
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3" selected="selected">3</option>
	  <option value="4">4</option>
	  <option value="5">5</option>
	  <option value="6">6</option>
	  <option value="7">7</option>
	  <option value="8">8</option>
	  <option value="9">9</option>
	  <option value="10">10</option>
	</select>
	<br /> <br />
	<br /> <br />
	<input type="submit" style="font-face: 'Comic Sans MS'; font-size: large; color: white; background-color: #008FAD; " value=" Done ">
					
	</form>
	<br /> <br />
	
					<a href="user.php?abc=<?php echo $_GET["itemId"];?>" style="font-face: 'Comic Sans MS'; font-size: 15px; color: white; background-color: #008FAD; "> Add this to Favourite list </a>
					<br /><br />
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
