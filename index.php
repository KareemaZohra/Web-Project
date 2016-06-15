<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "infotainment");
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
<style>
	.list {margin-bottom:-11px}
.list li {padding:0 0 11px 98px;min-height:74px;height:auto!important;height:74px;background:url(images/icon.png) no-repeat left top;line-height:1.43em;position:relative}
.list li strong {display:block;font-size:.86em;padding-bottom:5px}
.list li a {color:#4e4e4e;text-decoration:none}
.list li a:hover {text-decoration:underline}
</style>
<!--[if lt IE 7]>
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, #header .row-2 ul li a, #content, .list li');</script>
<![endif]-->
</head>
<body id="page1">
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
                <input type="text" name="key" value="Enter keyword here" onfocus="if(this.value=='Enter keyword here'){this.value=''}" onblur="if(this.value==''){this.value='Enter keyword here'}" />
                </span><input type="image" src="images/button.gif" name="submit"></div>
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
                  		Welcome to InfoTainment.com!
                  	</font>
                  
                  
                </div>
                <h4>Recent Articles</h4>
                <ul class="list">
				<?php 
					$sql='SELECT * 
					FROM  `news` 
					order by id desc
					LIMIT 0 , 3';
					
					$result = mysqli_query($con,$sql);
					while($row = mysqli_fetch_assoc($result)){
				?>
                  
                  <li><strong><a href='news.php?id=<?php echo $row["id"];?>'><?php echo $row["headline"];?></a></strong><?php echo $row["description"];?></li>
					<?php }?>
               </ul>
              </div>
            </div>
            <div class="col-2">
            	<?php
            	if(!isset($_SESSION['user'])&&!isset($_COOKIE['user'])&&!isset($_COOKIE['normal'])){
            	
   				?>
              
                 <div id="">
			<form action="loginprocess.php" method="post">
				User id:<input type="text" name="id" required/><br/>
				Password:<input type="password" name="pass" required/><br/>
				<div align=center>
					<br/>
					<input type="checkbox" name="remember" value="1"> <font color="#00687E">Remember Me</font><br />
				    	<!--input name="checkbox" type="checkbox" value="OK" /><small>keep me logged in</small></br-->
					<br />
					<input type="submit" style="font-face: 'Comic Sans MS'; font-size: large; color: white; background-color: #008FAD; " value=" LogIn ">
					<br /><br />
               </div>
			</form>
		</div>
              <form name="register" id="reg" method="post" style="color: red" onclick="return foo();">
              <input name="reg" type="submit" value="Create Account" color="red"/>
              <script type="text/javascript">
        				function foo() {
        					 window.open('register.php','1426271947288','width=500,height=600,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=450,top=300');
 							return true;
       					}
					</script>
					</form>
					<?php
					}
                   ?>
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
