<?php 
$host = "localhost";
$username = "root";
$password = "";
$db = "cars";

@ $db_conn = mysqli_connect($host, $username, $password, $db);

$connection_error = mysqli_connect_error();
if($connection_error != null){
	echo "We have a connection problem ".$connection_error;
}

//$query = "INSERT INTO mawiny(maker,model,price,year,url) VALUES ('Toyota','Land Cruiser',50000,2004,'http://cdn.motorpage.ru/Photos/800/01a88.jpg')";
$query = "SELECT * FROM mawiny";
$result = mysqli_query($db_conn, $query);
$num = mysqli_num_rows($result);

for ($i=0;$i<$num;$i++){
		$row = mysqli_fetch_assoc($result);
		echo "<div class='item'>";
		echo "<img src=".$row["url"]." width='100px'>";
		echo "<div class='main_body'>";
		echo "<div class='title'>";
		echo "<span class='maker'>".$row["maker"]."</span>";
		echo "<span class='model'>"." ".$row["model"]."</span>";
		echo "</div>";
		echo "<div class='price'>";
		echo $row["price"];
		echo "</div>";
		echo "<div class='year'>";
		echo $row["year"];
	echo 	"</div>";
	echo 	"</div>";
	echo "</div>";
		
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arslan Task</title>
<style>
	.title{
		font-weight: bold;
		font-size: 25px;
		padding-bottom: 5px;
	}
	.main_body{
		display: inline-block;

	}
	
	img{
		padding: 0px;
	}
	.item{
		margin: 10px;
		border: 1px solid red;
		border-radius: 5px;
		width: 400px;
		display: inline-block;
	}
	
</style>
</head>
<body>
	
	
</body>
</html>