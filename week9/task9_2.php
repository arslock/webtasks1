<?php 
$makers = $_POST["makers"];
$old = 2018 - $_POST["years"];
$year = $_POST["years"];
$tax = "";
$tech_check = "";
$require = "";
$model = $_POST["model"];
$radio = $_POST["radioButton"];
$price = $_POST["price"];
if(isset($_POST["checkBox"])){
	$tax = "Yes";
}
else{
	$tax = "No";
}
if(isset($_POST["checkBox2"])){
	$tech_check = "Yes";
}
else{
	$tech_check = "No";
}
if(isset($_POST["checkBox3"])){
	$require = "Yes";
}
else{
	$require = "No";
}

echo "You added new item: ".$makers." ".$model."</br>";
echo "produced in ".$year."(".$old."years old)"."with ".$radio." engine </br>";
echo "Tax payed: ".$tax."</br>";
echo "Technical check passed: ".$tech_check."</br>";
echo "Doesn't require investment ".$require."</br>";
echo "$".$price;
 ?>



