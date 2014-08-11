<?php
$age = array("Bin" => "21", "Yas" => "22", "Chu" => "23");

foreach ($age as $key => $val) {
    echo "key=" . $key . " val=" . $val . "<br>";
}

function transpose($array) {
    $transposed_array = array();
    if ($array) {
        foreach ($array as $row_key => $row) {
            if (is_array($row) && !empty($row)) {
                
                //check to see if there is a second dimension
                foreach ($row as $column_key => $element) {
                    $transposed_array[$column_key][$row_key] = $element;
                }
            } else {
                $transposed_array[0][$row_key] = $row;
            }
        }
        return $transposed_array;
    }
}

?>