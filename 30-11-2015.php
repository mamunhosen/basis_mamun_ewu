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
	echo "The name of function is: ".__Function__.'<br/>';
}
 bitm();
 class bitm{
 	public function php13(){
    echo __CLASS__.'<br/>';
    echo __METHOD__.'<br/>';


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
?>
 </body>
 </html>