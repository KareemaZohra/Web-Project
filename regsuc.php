<html>
<body>
<?php
$con = mysqli_connect("localhost", "root", "", "infotainment");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$img = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

echo $_FILES["image"]["tmp_name"];

$query = 'insert into user(
            name,
            email,
            username,
            password,
            country,
			city,
			aboutme,
			gender,
			photo
            )
            values
            (
            "' .$_POST["name"].'",
            "' .$_POST["email"].'",
			"' .$_POST["username"].'",
			"' .$_POST["pass1"].'",
			"' .$_POST["country"].'",
			"' .$_POST["city"].'",
			"' .$_POST["about"].'",
			"' .$_POST["sex"].'",
			"{$img}"
            )'; 
			
    if(mysqli_query($con ,$query))
    {
        Echo "Registration successful";
    } 
	else
	{
        Echo "username already taken";
    }
?>
<br/>



</body>
</html>