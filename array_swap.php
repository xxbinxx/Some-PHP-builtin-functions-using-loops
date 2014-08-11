<?php

function array_swap(&$array,$swap_a,$swap_b){
   list($array[$swap_a],$array[$swap_b]) = array($array[$swap_b],$array[$swap_a]);
}


$items = array(
  0 => 'contact',
  1 => 'home',
  2 => 'projects'
);

echo "<b>array before swap</b><br>";

foreach ($items as $key => $val) {
    echo "key=" . $key . " val=" . $val . "<br>";
}

array_swap($items,0,1);

echo "<br>-------------------------------------------<br>";
echo "<b>Array after swap</b><br>";

foreach ($items as $key => $val) {
    echo "key=" . $key . " val=" . $val . "<br>";
}

?>