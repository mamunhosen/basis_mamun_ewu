<?php
//join function.
//syntex join(separator,array);
$join = array('Welcome','to','join','function' );
echo join(' ',$join);
//htmlentities function
echo "<br/>";
$str = "<© W3Sçh°°¦§>";
echo htmlentities($str);
//conditional statement
$t = date("H");
echo "<p>The hour (of the server) is " . $t;
echo ", and will give the following message:</p>";

if ($t <  "10") {
     echo "Have a good morning!";
} elseif ($t <  "20") {
     echo "Have a good day!";
} else {
     echo "Have a good night!";
}
echo "<br/>";
# addslashes function
$var="what do u 'mean' by that";
 echo addslashes($var);
 echo "<br/>";
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));
echo "<br/>";
$string=' iam listening you ';
echo $string;
echo "<br/>";
$tr=trim($string);
echo($tr).'<br/>';
$str = "Hello World";
echo str_pad($str,15,'!');




?>