
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
				
				<?php
				$con = mysqli_connect("localhost", "root", "", "infotainment");
					$id=$_GET["id"];
					$sql='select * from news where id="'.$id.'"';   
					$result = mysqli_query($con,$sql);
					$row = mysqli_fetch_assoc($result);
					
					$head=$row["headline"];
					$description=$row["description"];
					$photo=$row["photo"];
				?>
                	
                  <h2>
                  	<font color="#00687E">
                  		<u><?php echo $head;?></u>
                  	</font>
                  	</h2>
                 
                  	<br /> <br />
	                 <div align="center" style="padding: 10px;">
	                 	<?php echo $description;?></div>
                  	
                </div>
              </div>
            </div>
           <div class="col-2">
           	
                <div align="center" style="padding: 10px;">
                	<img src=src="data:image/jpeg;base64,<?php echo base64_encode($photo);?>" height="220" width="200" />
                </div>
			     <br /><br />
				<div align=center>
					<a href="index.php">Go Back</a>
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
