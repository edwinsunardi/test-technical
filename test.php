<?php
//
function odd_number($num = array()){
	$row = "";
	foreach($num as $value){
		if($value % 2 !=0){
		$row.= $value.",";
		}
	}
	$row .= $row;
	return $row;
}

echo odd_number(array(2, 4, 0, 100, 4, 11, 2602, 36))."<br/>";

function even_number($num = array()){
	$row = "";
	foreach($num as $value){
		if($value % 2 == 0){
		$row.= $value.",";
		}
	}
	$row .= $row;
	return $row;
}

echo even_number(array(160, 3, 1719, 19, 11, 13, -21));
	

function odd_number2($num = array()){
	$row = "";
	foreach($num as $value){
		if($value % 2 !=0){
		$row.= $value.",";
		}
	}
	$row .= $row;
	return $row;
}

$a=array("red", "blue", "yellow", "black", "grey");
echo array_search("blue",$a);

function blueOcean($num = array(), $getter = array()){
	$i = 0;
	foreach($num as $value){
		if($value == $getter){
			unset($num[$i]);
		}
		$i++;
	}
}

echo blueOcean(array(1,5,5,5,3), array(5));
?>