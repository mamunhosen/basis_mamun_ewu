<?php
$array1=array('course1'=>'java','course2'=>'sql');
$array2=array('course1'=>'php','course4'=>'html');
$result=array_merge($array1,$array2);
echo "<pre>";
print_r($result);
echo "</pre>";
echo "<br/>";
$array3=array('course1','course2');
$array4=array('php','javaScript');
$result=array_combine($array3,$array4);
echo "<pre>";
print_r($result);
echo "</pre>";
echo "<br/>";
  
  $fileName = 'instructions.txt';
  $file = fopen('instructions.txt','r')or die('Unable to open the file!') ;
   While(!feof($file) )                            // feof()checks the end of  file in php
  {
       echo fgets($file)."</br>";                       // fgets() read a  fileline by line in php

  }
  fclose($file); 

  $file1=fopen('newfile.txt','w') or die ('Unable to open file!');
  $txt="Hello This line is going to be write in my file\n";
  fwrite($file1, $txt);
  $txt2="This is another line is going to be write\n";
  fwrite($file1,$txt2);
  fclose($file1);
  $file2=fopen('newfile.txt','r') or die ('Unable to open file!');
  while (!feof($file2)) {
  	echo fgets($file2)."<br/>";
  }

  $numbers=[2,3,5,6,7,8,32,33,34,54,44,43,90,66,77];
  $arrlen=count($numbers);
  for ($i=0; $i <$arrlen ; $i++) { 
  	if (($numbers[$i]%2)) {
  		continue;
  	}
  	echo $numbers[$i]."<br/>";
  }
$str1 = 'yabadabadoo';
$str2 = 'yaba';
if (strpos($str1,$str2)!==false) {
    echo "\"" . $str1 . "\" contains \"" . $str2 . "\"";
} else {
    echo "\"" . $str1 . "\" does not contain \"" . $str2 . "\"";
}
echo "<br/>";
echo "I am using MySQL version: ". mysql_get_server_info();
?>