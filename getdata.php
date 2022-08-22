<?php
include 'conn.php';


$queryResult=$connect->query("SELECT * FROM stealer");

$result=array();

while($fetchData=$queryResult->fetch_assoc()){
	$result[]=$fetchData;
}

//$pass = $_POST['pass'];
//if($pass=='Pro123')
//{//
  
echo json_encode($result);  
}


?>