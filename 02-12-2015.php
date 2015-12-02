<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Control Structure</title>
</head>
<body>
	<?php
$run=array('Sakib'=>102,'Tamim'=>137,'Mushfiq'=>147);
foreach ($run as $Batsman_name => $Batsman_run) {
	echo "<pre><strong>"."Batsman_name=</strong>".$Batsman_name.", Run=".$Batsman_run;
	echo  "<br/>"."</pre>";
}
echo "</br>";

$player = 
array('Ronaldo' =>  array('La_liga' =>50 ,'Champions_league'=>12 ),
	'Messi'=>array('La_liga' =>45 ,'Champions_league'=>8 ),
	'Neymar'=>array('La_liga' =>40 ,'Champions_league'=>10 ) );

	foreach ($player as $player_name => $record) {
		 echo "<pre>Player Name: ".$player_name.'<br/>';
		foreach ($record as $league_name=>$goal) {
			echo "League Name: $league_name and Number Of Goal: $goal <br />";
		}
	}
	echo "</br>";

$friends=[
    "John"=>[
        'Location'=>'Dhaka', 
        'Age'=>30, 
        'Profession'=>['Designer','Developer','Engineer']
    ],
    "Bill"=>[
        'Location'=>'CTG',
        'Age'=>29,
        'Profession'=>['Programmer','Engineer','Teacher']
    ],
    "Mark"=>[
        'Location'=>'Barishal',
        'Age'=>33,
        'Profession'=>['Network','Hardware','Engineer']
    ]
];
foreach ($friends as $Name=> $value) {
    echo "Name : $Name </br>";  
    foreach ($value as $info => $info_value) {
        if (is_array($info_value)) 
            echo "$info : ". implode(', ',$info_value) . '.</br>';
        else
            echo "$info : $info_value </br>";
    }
    echo '</br>';
}


?>
</body>
</html>




