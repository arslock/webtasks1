<?php 
$cars = [["id"=>1,"maker"=>"Toyota","model"=>"Camry 50","price"=>30000,"year"=>2017,"url"=>"https://images.kz.prom.st/82151491_w640_h640_toyota_camty_50.jpg"],["id"=>2,"maker"=>"Mercedes","model"=>"C 100","price"=>20000,"year"=>2016,"url"=>"https://img.newatlas.com/mercedes-amg-c-63-6.jpg?auto=format%2Ccompress&ch=Width%2CDPR&fit=max&q=60&w=616&s=f2d1e1fe43d4431c02fecd8d3e04468e"],["id"=>3,"maker"=>"Daewoo","model"=>"Nexia","price"=>15000,"year"=>2015,"url"=>"https://mosautoshina.ru/i/auto/daewoo_nexia_2016.jpg"],["id"=>4,"maker"=>"Mercedes","model"=>"S 500","price"=>27000,"year"=>2014,"url"=>"https://i.ytimg.com/vi/_0NNpLDNUYM/maxresdefault.jpg"]];

$host = "localhost";
$username = "root";
$password = "";
$db = "db1";

@ $db_conn = mysqli_connect($host, $username, $password, $db);

//$sql = "INSERT INTO cars(maker,model,price,year,url) VALUES ('Mercedes','C 100',20000,2016,'https://img.newatlas.com/mercedes-amg-c-63-6.jpg?auto=format%2Ccompress&ch=Width%2CDPR&fit=max&q=60&w=616&s=f2d1e1fe43d4431c02fecd8d3e04468e')";
echo "<form method='post', action='task12_3.php'>";
echo "<input type='text' name='username'><br/>";
echo "<input type='password' name='password'><br/>";
echo "<input type='submit'>";
$sql = "SELECT * FROM students";
$result = mysqli_query($db_conn, $sql);
$num = mysqli_num_rows($result);

if(isset($_POST["username"]))
	if(isset($_POST["password"]))
	for($i=0; $i < $num; $i++){
		$row = mysqli_fetch_assoc($result);
		
		if($_POST["username"] == $row["username"] and $_POST["password"] == $row["password"] and $row["admin"]==1){
				echo "<br>You are Admin!!!<br/>";
				echo "Go to delete some cars -> <a href='task12_32.php'>Me!</a>";
			}
		elseif($_POST["username"] == $row["username"] and $_POST["password"] == $row["password"])
				echo "<br>You are Welcome!!!";	
		elseif($_POST["password"] != $row["password"] and $_POST["username"] != $row["username"])
				echo "<br>Wrong password or username";
			
			
		

	}

 ?>
