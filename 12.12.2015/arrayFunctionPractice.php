<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array Function</title>
</head>
<body>

<?php
/* Array_combine
using array_combine you can combine two different Arrays.
*/
$arr1 = array('ID','Name','University');
$arr2 = array('20111-60-035','Mamun Hosen','East West University');
$arr3=array_combine($arr1, $arr2);
echo "<h3> Array_Combine Function Output </h3>";
echo "<pre>";
print_r($arr3) ;
echo "</pre>";

/*   Array_filter   

using array_filter() you can remove 0,null and empty values of any array

 */
echo "<h3> Array_filter Function Output </h3>";
$filter=array(0=>false,1=>0,2=>'foo',3=>null,4=>'');

echo "<pre>";
print_r(array_filter($filter));
echo "</pre>";

function odd($var)
{
    // returns whether the input integer is odd
    return($var & 1);
}

function even($var)
{
    // returns whether the input integer is even
    return(!($var & 1));
}

$array1 = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
$array2 = array(6, 7, 8, 9, 10, 11, 12);

echo "<pre>";
print_r(array_filter($array1, "odd"));
echo "</pre>";
echo "<pre>";
print_r(array_filter($array2, "even"));
echo "</pre>";
?>
	
</body>
</html>