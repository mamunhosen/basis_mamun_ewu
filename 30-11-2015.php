 <!DOCTYPE html>
 <html>
 <head>
 	<title>30.11.2015</title>
 </head>
 <body>
 <?php
 include 'namespace30.php';
 
define("CONSTANT", "Hello world.");
echo "<br/>";
echo CONSTANT.'<br/>'; // outputs "Hello world."
echo "line Number".__LINE__."<br/>";//magic constants
echo "The directory of the file is : ".__FILE__.'<br/>';//magic constants to find the file directory;

function Bitm(){
	echo "The name of function is: ".__Function__.'<br/>';//magic constant to find the function name;
}
 bitm();
 class bitm{
 	public function php13(){
    echo __CLASS__.'<br/>';//magic constant to find the class name;
    echo __METHOD__.'<br/>';//magic constant to find the method name;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  


 	}
 }

 $welcome=new bitm();
 $welcome->php13();
 //use_of_trait

trait use_of_trait{
	public function greetings(){
       echo "Welcome to new use of trait";
	}
}

class father_of_trait{
	use use_of_trait;
}
father_of_trait::greetings();
echo "<br/>";

\mamun\use_of_namespace::confused();//imported from another page and i used namespace
//Expression:

function mul($i){
	return $i*2;

}

$a=5;
$c=$a++;

echo $c;
$d=7;
echo mul(++$d);
$a=20;
echo "<br/>";
$c=$a---$a--;
echo "the value is : $c";
echo "<br/>";                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
echo $a;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         

?>
 </body>
 </html>