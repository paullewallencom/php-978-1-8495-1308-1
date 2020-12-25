<?php
if(isset($_GET["param"])){
	$param = $_GET["param"];
	$value = $_GET["value"];
	
	// if($param) 
	$result["status"] = "100"; // OK
	$result["message"] = "Input is valid!"; // Message
	
	echo json_encode($result);
}
?>
