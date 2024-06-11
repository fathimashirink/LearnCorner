<?php
 $arr = [5, 8, 1, 9, 24, 14, 36, 25, 78, 15, 37];
 sort($arr);
 echo nthlargest($arr,3);
 function nthlargest($arr,$n){
 $nthdLargestVal = $arr[count($arr)-$n];
 return $nthdLargestVal;
 }
?>