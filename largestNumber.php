<?php
$array=[4,9,20,13,6,8];
$largest_number=largestOfArray($array);
echo("The largest number of array is ".$largest_number);

function largestOfArray($array){
    $largest_num=$array[0];
    foreach($array as $value){
        if($value>$largest_num)
            $largest_num=$value;
    }
    return $largest_num;
}

?>