<?php
echo "Array_replace".'<br/>';
echo "Description: replace the values of first array with the values of following array".'<br/>';
echo "Returns type: Returns replaced array.".'<br/>';
$color=array("red","blue","yellow");
$color1=array("dha","ctg","raj");
$replaced=array_replace($color, $color1);
print_r($replaced);


?>