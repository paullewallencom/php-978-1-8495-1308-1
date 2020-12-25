<?php 
$result = array();

$result["status"] 		= "";
$result["message"] 	= "";

if(isset($_POST["itemID"]) && isset($_POST["itemValue"])){
	$result["status"] 		= "100";
	$result["message"] 	= "Rating has been saved successfully.";
} else {
	$result["status"] 		= "400";
	$result["message"] 	= "Provide itemID and itemValue!";
} 

echo json_encode($result);
?>