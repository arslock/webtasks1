<?php 
$usname = $_POST["name"];
$pass = $_POST["pass"];
$conf_pass = $_POST["conf_pass"];

if($usname !== ""){
}
else{
	echo "<p>Username is empty</p>";
}
if($pass !== ""){
}
else{
	echo "<p>Password is empty</p>";
}
if($conf_pass !== ""){
	if(strcasecmp($pass, $conf_pass) == 0 ){
			echo "<p>Confirmed</p>";
	}
	else{
		echo "<p>Cannot Confirm</p>";
	}
}
else{
	echo "<p>Confirm password is empty</p>";
}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.us{
			padding-right: 55px;
		}
		.pa{
			padding-right: 59px;
		}
		p{
			border: 4px solid red;
			width: 450px;
		}
	</style>
</head>
<body>
	<form method="post">
	<label class="us">Username:</label>
	<input type="text" name="name"><br>
	<label class="pa">Password:</label>
	<input type="password" name="pass"><br>
	<label class="cp">Confirm Password:</label>
	<input type="password" name="conf_pass"><br>
	<input type="submit" value="Confirm"><br>
	</form>
</body>
</html>