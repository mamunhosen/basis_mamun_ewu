<?php
echo "Answer to the question no: 5";
echo "<br/>";

$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
"numbers" => array ( 1, 2, 3, 4, 5, 6 ),
"holes" => array ( "First", 5 => "Second", "Third"));
echo "Output: ";
echo $color['color']['a']." ";
echo $color['holes'][5]." ";

?>