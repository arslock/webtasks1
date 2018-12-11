<?php 
$host = "localhost";
$username = "root";
$password = "";
$db = "db1";

@ $db_conn = mysqli_connect($host, $username, $password, $db);
$sql = "SELECT * FROM cars";
$result = mysqli_query($db_conn, $sql);
$num = mysqli_num_rows($result);
for($i=0; $i < $num; $i++){
		$row = mysqli_fetch_assoc($result);
		echo $row["maker"]." ".$row["model"]."</br>";
		echo "<a href='task12_32.php?model=".$row["model"]."'>Delete</a>"."<br>";
}
if(isset($_REQUEST["model"])){
$madel = $_REQUEST["model"];
$sqql = "DELETE FROM cars WHERE model='$madel'";
$result = mysqli_query($db_conn, $sqql);
}

echo "<a href='task12_3.php'>Back</a>";
 ?>
