<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<a href="task2.php?category=sport">Sport news</a> | <a href="task2.php?category=politics">Politic news</a><br/><br/>
<a href="task2.php?category=sport&format=json">Sport news (JSON)</a> | <a href="task2.php?category=politics&format=json">Politic news (JSON)</a><br/><br/>

<?php
$news = ["sport"=>["C. Ronaldo has scored three goals in last five matches","Golovkin has won match for title"],"politics"=>["Trump has cancelled his visit to North Corea, because of sanction","N. Nazarbayev has approved new version of alphabet"]];

if(isset($_GET['category'])){
  $category = $_GET['category'];
	$json = isset($_GET['format']);
	if($json){
		echo json_encode($news[$category]);
	}
	else{
		echo $news[$category][0]."<hr>".$news[$category][1];
	}

}
else{
	echo "";
}
?>

</body>
</html>