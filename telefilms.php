<?php

$con = mysqli_connect("localhost", "root", "", "infotainment");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
session_start();

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
<body id="page5">
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
            <li class="m1"><a href="index.php" >Home</a></li>
            <li class="m2"><a href="movies.php">Movies</a></li>
            <li class="m3"><a href="dramas.php">Dramas</a></li>
            <li class="m4"><a href="tvshows.php">TV-shows</a></li>
            <li class="m5"><a href="telefilms.php" class="active">Telefilms</a></li>
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
                <?php
				
				$query = 'select name,itemId,cover from item where category="telefilms"';
					$result = mysqli_query($con, $query);
					
					$num_row = mysqli_num_rows($result);
				$count=1;
                 while($row = mysqli_fetch_assoc($result))
				 { if($count/3==0)
				  echo "<br/><br/>";
			  
					$photo=$row["cover"];
					$name=$row["name"];
					$id=$row["itemId"];
				
                ?>
                <a style="display: inline-block; padding: 10px; color: #400090; font:7px Tahoma;
		      text-decoration: none; background-color: #7806A4; position: relative;" href="item.php?itemId=<?php echo $id;?>">
		      <img src="data:image/jpeg;base64,<?php echo base64_encode($photo);?>" height="150px" width="130px"/>
		      <div align="center"><font size="3px"><?php echo $name;?></font></div></a>
		      <?php
			  $count++;
            }
            ?>
            
              </div>
            </div>
           
            
            <div class="col-2">
              
              <br />
                 <font color="#400090" size="5px"><b>Sort in order to :</b></font>
                 <br /><br />
                 <form action="movies.php">
                 	<font color="#00687E">
            <input type="radio" name="ad" value="add_date" checked>Adding Date <br /><br />
		    <input type="radio" name="r" value="rate" >Rating <br /><br />
		    <input type="radio" name="a" value="alphabet">alphabet <br /><br />
		    <input type="submit" style="font-face: 'Comic Sans MS'; font-size: large; color: white; background-color: #008FAD; " value="  Go  ">
		
                 	</font>
                 </form>
            </div
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
