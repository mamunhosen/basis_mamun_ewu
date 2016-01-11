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
echo "Array_pad: ";
print_r(array_pad($b, 5, 'bvk'));
echo "<br/>";
$push=array_push($b,'porshe','boghati');
echo "Array_push: ";
print_r($b);

echo "<br/>";
$a=array("red","green","blue");
array_pop($a);
echo "Array_pop: ";
print_r($a);
echo "<br/>";
$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,4);
echo "Array_rand: <br/>";
echo $a[$random_keys[0]].'<br/>';
echo $a[$random_keys[1]].'<br/>';
echo $a[$random_keys[2]].'<br/>';
echo $a[$random_keys[3]].'<br/>';
echo "array_replace";
$d=array('dhaka');
$b=array('Ctg');
$c=array('Khulna');
print_r(array_replace($d,$b,$c));
echo "<br/>";
echo "array_search:";
echo array_search('blue',$a);
echo "<br/>";
echo "array_reverse:";
print_r(array_reverse($a));
echo "<br/>";
$age=array("Peter"=>"40","Ben"=>"37","Joe"=>"43");
asort($age);
echo "array_asort:";
print_r($age);


?>