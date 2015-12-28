<?php
echo "Answer to the question no: 2";
echo "<br/>";
$color = array('white', 'green', 'red');
echo "Output: ";
foreach ($color as $value) {
  echo $value." ";

}
echo "<br/>";

echo "Unordered output:";
echo "<ul>";
echo "<li>".$color[1]."</li>";
echo "<li>".$color[2]."</li>";
echo "<li>".$color[0]."</li>";
echo "</ul>";


?>