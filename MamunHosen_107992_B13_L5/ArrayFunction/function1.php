<?php
echo "Array_pop".'<br/>';
echo "Description: Delete the last element of an array".'<br/>';
echo "Returns type: Returns the last value of array. If array is empty, or is not an array, NULL will be returned.".'<br/>';
$color=array("red","blue","yellow");
$pop=array_pop($color);
print_r($color);


?>