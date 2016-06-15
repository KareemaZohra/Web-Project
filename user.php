<!--<?php
$con = mysqli_connect("localhost", "root", "", "infotainment");
session_start();
 if(isset($_COOKIE['kj']))
      {
        header('Location:Admin.php');
            die();
      }
if(isset($_SESSION['user']))
{
	header('Location:Admin.php');
	die();
}
if(isset($_POST['submit']))
{
 if($_POST['id']=='kari'&&$_POST['pass']=="12345")
 {
	$_SESSION['user']='asd';
	if(isset($_POST['checkbox']))
	{
            setcookie("kj","12345",time()+60);	
	}
    header('Location:Admin.php');
 
 }
 
}
?>-->
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
<body id="page8">
<div class="tail-top">
  <div class="tail-bottom">
    <div class="body-bg">
      <!-- HEADER -->
      <div id="header">
      	<div class="extra"><img src="images/header-img.png" alt="" /></div>
        <div class="row-1">
          <div class="fleft"><a href="#"><img src="images/logo.PNG" alt="" /></a></div>
          
          <div class="fright"><a style= "top:2px; right: 500px; font-size:16px color:#03617A ;"href="help.php"> Help </a></div>
          <div class="fright"><a style= "top:2px; right: 520px; font-size:16px color:#03617A ;"href="user.php"> MyProfile </a></div>
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
              <div class="indent">
                <div class="indent1" >
                	<?php
					$username= $_GET['id'];
					 $sql='select * from user where username="'.$username . '" ';   
					$result = mysqli_query($con,$sql);
					$row = mysqli_fetch_assoc($result);
              $prof_name=$row["name"];
			  $about=$row["aboutme"];
			  $city=$row["city"];
			  $country=$row["country"];
			  $photo=$row["photo"];
			  
              ?>
                  
                  	<font color="#00687E">
                  		Welcome <?php echo"$prof_name"?>!
                  	</font>
                  
                  </div>
                  <?php
               
                 for($count=1; $count<=9; $count++)
				 { if($count/3==0)
				  echo "<br/><br/>";
               
                ?>
                <a style="display: inline-block; padding: 10px; color: #400090; font:7px Tahoma;
		      text-decoration: none; background-color: #7806A4; position: relative;" href="item.php">
		      <img src="images/mvi2.jpg" height="150px" width="130px"/>
		      <div align="center"><font size="3px">Boss</font></div></a>
		      <?php
            }
            ?>
                
              </div>
            </div>
            <br /><br />
            <div class="col-2">
            	
            	<img src="data:image/jpeg;base64,<?php echo base64_encode($photo);?>" align="right" border="6" ="50" height="100" title="this is Me:"/>
              <hr align="left" width="72%" size="4" color="#00687E" />
              
              <p align="left">
              	
              	<font size="5px" color="#00687E">
              		<?php
              		echo $prof_name;
              		?>
              		<br/>
              	</font>
              	<font size="2px" color="#6A7180">
              		<?php
              		echo $about;
              		?>
              		<br />
              	</font>
              	<font size="2px" color="#6A7180">
              		<i>
              		<?php
              		echo "form : " .$city ."," .$country;
              		?>
              		</i>
              	</font>
              	<hr align="right" width="72%" size="4" color="#00687E" />
				</p>
				<br /><br />
				<div align="center"><a style= "top:2px; right: 500px; font-size:25px color:#00C9E3 ;"href="help.php"> My Favourite List </a></div><br />
          <div align="center"><a style= "top:2px; right: 520px; font-size:25px color:#00C9E3 ;"href="user.php"> My Wish List </a></div>
				<br /><br />
				<div align="center">
                <form>
              		<input type="submit" style=" font-face: 'Comic Sans MS'; font-size: 15px; color: white; background-color: #00C9E3; " value=" Edit Profile ">
              	</form>
              </div>
              <br />
              <div align="center">
              	<form>
              	<input type="submit" style=" font-face: 'Comic Sans MS'; font-size: 15px; color: white; background-color: #00C9E3; " value=" Log Out ">
              	</form>
            </div>
            <br /><br />
            <hr align="right" width="100%" size="4" color="#00687E" />
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
