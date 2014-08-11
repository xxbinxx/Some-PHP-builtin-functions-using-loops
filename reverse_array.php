<?php
/**
 * Program in core php to replace each 
 * element at position x with position with 
 * n-x, where n is the length of the array. 
 * Don't use php in built function.
 */
$array = array(5, 8, 11, 15, 2, 6);

$len = count($array);

function swap(&$value1, &$value2){
	$temp = $value1;
	$value1 = $value2;
	$value2 = $temp;	
}

for( $i = 0,$j = $len; $i<$len/2,$j > $len/2; $i++,$j--){
	echo '<br>array['. $i. '] = '.$array[$i];
	echo '<br>array[' .$j. '] = '.$array[$j-1];
	swap($array[$i], $array[$j-1]);
}

foreach ($array as $key) {
	echo "<br>$key";
}
?>
