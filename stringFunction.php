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
$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
echo "<br/>";
for ($i = 0; $i < 5; $i++) {
    if ($i == 2){
        continue;
    }
    print "$i\n";
}




?>