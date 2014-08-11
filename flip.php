<?php
$flip = array(
	"name"=>'tarun',
	"stream"=>"science"
);
$assoc = array();
foreach($flip as $key => $value){
	$assoc[$value] = $key;
}
echo "<pre>";
print_r($assoc);
echo "</pre>";