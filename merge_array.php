<?php

$array1=[0,1];
$array2=[5,89];
$array3=[5,89,6,56,23,549,98,35,468];

function foo(){
	$args = func_get_args();
	$num = func_num_args();
	// creating an associate array.
		$assArray = array();
        for($i=0; $i<$num; $i++){        	
        	echo "<br><br>";print_r($args[$i]);   
        	foreach($args[$i] as $key){
        		$assArray[] = $key;
        	}
        }
echo "<br>-----------------------------------------</br><b>Final array</b>";
    return $assArray;
}

foreach(foo($array1, $array2, $array3) as $val)
	echo $val."<br>";

?>
