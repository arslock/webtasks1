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

<a href="task10_2.php">All</a> | <a href="task10_2.php?maker=Toyota">Toyota</a> | <a href="task10_2.php?maker=BMW">BMW</a> | <a href="task10_2.php?maker=Porsche">Porsche</a>	<br/>
	
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


$query = "SELECT * FROM mawiny";
$result = mysqli_query($db_conn, $query);
$num = mysqli_num_rows($result);



if(isset($_GET["maker"])){
	$makir = $_REQUEST["maker"];
	
	$sql = "SELECT * FROM mawiny WHERE maker='$makir'";
	$result = mysqli_query($db_conn, $sql);
	$num = mysqli_num_rows($result);
}

for ($i=0;$i<$num;$i++){
		$row = mysqli_fetch_assoc($result);
		echo "<div class='item'>";
		echo "<img src=".$row["url"]." width='100px' height='100px'>";
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

</body>
</html>