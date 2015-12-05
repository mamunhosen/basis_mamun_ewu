<?php
function __autoload($className){
  include_once($className.".php");
}

$whiteDuster=new Duster('White','100g');
$redDuster=new Duster('Red','120g');

echo "Color of Duster Is : ".$whiteDuster->color." and weight of the duster is ".$whiteDuster->weight;
echo "<hr/>";
echo "Color of Duster Is : ".$redDuster->color." and weight of the duster is ".$redDuster->weight;
echo "<hr/>";


//Another class declaration.


$mamun=new person();
$shuvo=new person();



$mamun->name="Mamun";
echo $mamun->name." Says ";
$mamun->sayGreeting('Good Morning!');
echo "<hr />";


$shuvo->name="Shovon Rahman";
echo $shuvo->name." Says ";
$shuvo->sayGreeting("Hello Everyone!");
echo "<hr />";

?>