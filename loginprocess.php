<?php

ob_start();
session_start();
$con = mysqli_connect("localhost", "root", "", "infotainment");
  $username= $_POST['id']; 
  $password = $_POST['pass']; 
 
  
  $sql='select * from user where username="'.$username . '" '; 
  
  $result = mysqli_query($con,$sql); 
  $row = mysqli_fetch_assoc($result); 
  
  if($username=='kareema' && $password=="123")
 {$cookie_name = "user";
$cookie_value = "Admin";
	$_SESSION['user']=$username;
	/*if(isset($_POST['checkbox']))
	{
            setcookie("kj","12345",time()+60);	
	}*/
	if($_POST['remember'])
	{
		setcookie($cookie_name, $cookie_value, time() + (180), "Admin.php"); // 86400 = 1 day
	}
    header('Location:Admin.php');
 
 }
  else if($row['password']==$password) 
   {
   	$cookie_name = "normal";
   
   	$_SESSION['user']=$username;
	/*if(isset($_POST['checkbox']))
	{
            setcookie("kj","12345",time()+60);	
	}*/
	if($_POST['remember'])
	{
		setcookie($cookie_name, $username, time() + (180), "user.php"); // 86400 = 1 day
	}
    header('Location:user.php');  
   } 
   else
   	 {
   	 	 header('Location:index.php');
    } 
    ?>