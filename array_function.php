<?php
function test_odd($var){
   return ($var & 1);
}
$a=array('a','b',3,4,5);
print_r(array_filter($a,"test_odd"));
$b=array('VOLVO'=>'x9o1','BMW'=>'4gh5');
//$lower=strtolower(array_keys($b));
$exist=array_key_exists (strtoupper('volvo'),$b);
if ($exist) {
   echo "Key exist";
}
else{
	echo "not exist";
}
echo "<br/>";
print_r(array_pad($b, 3, 'bvk'));
echo "<br/>";
$push=array_push($b,'porshe','boghati');
print_r($b);

echo "<br/>";
?>