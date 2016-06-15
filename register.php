<html>
	<head>
	<title>Regitration</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript">
function confirmation() {
var answer = confirm("Leave website?")
}
//-->
function checkPasswordMatch() {
    var password = $("#pass1").val();
    var confirmPassword = $("#pass2").val();

    if (password != confirmPassword)
        $("#check").html("(Passwords do not match!)");
    else
        $("#check").html("(Passwords match.)");
}
</script>
	</head>
	<body>
		<div style="background-color : #191D1E; padding: 0px;">
			<img src="images/paste.PNG">
		</div>
		<h1>Sign up</h1>(fill up all the fields)
		
		<form action="regsuc.php" method="POST" enctype="multipart/form-data" >
			<br />
			Enter name : <input type="text" name="name" placeholder="enter name" /><br /><br />
			Enter username : <input type="text" name="username" placeholder="enter username" /><br /><br />

			Enter email : <input type="text" name="email" placeholder="enter email" /><br /><br />
			<div class="td">
			Enter password : <input type="password" name="pass1" id="pass1" placeholder="choose a password" /></div><br />
			<div class="td">
			Confirm password : <input type="password" name="pass2" id="pass2" placeholder="re-enter password" onkeyup="checkPasswordMatch();" /></div>
			</div><br />
			
    <div class="alert" id="check">
     </div>
     <br />
     City : <input type="text" name="city" placeholder="enter your city" /><br /><br />
				Country : <input type="text" name="country" placeholder="enter your country" /><br /><br />
			write something about you : <input type="text" name="about" placeholder="about you" /><br /><br />
		
			<input type="radio" name="sex" value="male" >Male <br />
		    <input type="radio" name="sex" value="female" checked>Female <br /><br />
		    
			Upload an image : <input type="file" name="image">
		    
		    <input type="submit" onclick="confirmation()" style="font-face: 'Comic Sans MS'; font-size: large; color: white; background-color: #008FAD; " value=" SUBMIT ">
		</form>
	</body>
</html>