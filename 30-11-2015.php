 <!DOCTYPE html>
 <html>
 <head>
 	<title>30.11.2015</title>
 </head>
 <body>
 <?php
define("CONSTANT", "Hello world.");
echo CONSTANT.'<br/>'; // outputs "Hello world."
echo "line Number".__LINE__."<br/>";//magic constants
echo "The directory of the file is : ".__FILE__.'<br/>';//magic constants;

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


  
?>
 </body>
 </html>