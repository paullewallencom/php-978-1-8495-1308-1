<?php
$string = $_GET["string"];

$arr = array(
	"Adam",
	"Eva",
	"Milan",
	"Mikki",
	"Mikel",
	"Miles",
	"Mills",
	"Rajesh",
	"Roshan",
	"Ronald",
	"Xavier",
	"Brad",
	"Rose",
	"Michael",
	"Dastan",
	"Romeo"
);

function filter($var){
	global $string;
	if(!empty($string))
		return strstr($var,$string);
}

//sort($arr);
$filteredArray = array_filter($arr, "filter");

$result = ""; // nice to have
foreach ($filteredArray as $key => $value){
	$row = "<li>".str_replace($string, "<strong>".$string."</strong>", $value)."</li>";
	$result .= $row;
}

echo $result;
?>