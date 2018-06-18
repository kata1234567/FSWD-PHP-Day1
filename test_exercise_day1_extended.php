<!DOCTYPE html>

<html>
<link rel="stylesheet" type="text/css" href="test.css">
<head>

<title>Hello World</title>

<body>


<!-- Task 1 -->
 <?php 
 echo "Hello, World!"; ?>



<h1 id="test"> 
<?php $name = "Kata"; echo $name; ?>
</h1>
<!-- Task 2 -->

<h1>
<?php  
date_default_timezone_set('Europe/Vienna');

$d=date("D");
if ($d == "Mon")
echo "Happy Monday!";
else
echo "Have a nice day!"; 
?>
</h1>
<!-- Task3 -->

<h1>
<?php
//date_default_timezone_set('Europe/Vienna');

$d=date("D");

if ($d == "Mon")
echo "Today is Monday!";
elseif ($d == "Tue")
echo "Today is Tuesday!";
elseif ($d == "Wed")
echo "Today is Wednesday!";
elseif ($d == "Thu")
echo "Today is Thursday!";
elseif ($d == "Fri")
echo "Today is Friday!";
elseif ($d == "Sat")
echo "Today is Saturday!";
elseif ($d == "Sun")
echo "Today is Sunday!";
else
echo "Have a nice day!";
?>
</h1>


<!-- Task 4.1-->

<?php
$name1 = "Kathrin"; 

for ($i=0; $i<51; $i++)
{
echo "$name1 <br>"; 
}

?>

<!-- Task 4.2 -->

<?php

$name2 = "Monika";
$i=0;

while($i < 20){
	echo "Hi my name is " .$name2 ."<br>";
	$i ++;
}
?>

<br>
<!-- Task 4.3 -->
<?php

$name3 = "Denise";
$i=0; 

do {
	echo "Chears to " .$name3 ."<br>";
	$i ++;
} while ($i <20);
?>


<br>
<!-- Task 5 --> 

<?php
$number = array(0,1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

foreach ($number as $wert){
	echo "Deine Zahl ist: " .$wert ."<br>";
}
?>

<br>

<!-- Task 6.1 -->

<?php
$superstars = array("Mickey Mouse" => "Disney", "Super Man" => "Marvel", "Pipi Langstrumpf" => "Astrid Lindgren", "Tom Turbo" => "Thomas Brezina");

foreach($superstars as $x => $x_value) {
	echo "My favorite author of my superhero is " .$x ."written by " .$x_value;
	echo "<br>";
	//echo "My favorite author of my superhero is " .$superstars['Tom Turbo'];
}
?>

<br>
<!-- Task 6.2 -->

<?php
$heros = array(
"Mickey" => array
(
"name" => "Mickey Mouse", 
"publisher" => "Disney",
"age" => 200,
"characteristic" => "ears",
"location" => ""
),
"SuperMan" => array
(
"name" => "Super Man",
"publisher" => "Marvel",
"age" => 80,
"characteristic" => "cape", 
"location" => ""
),
"Pipi" => array
(
"name" => "Pippi Langstrumpf",
"publisher" => "Astrid Lindgren",
"age" => 55,
"characteristic" => "two bunches",
"location" => ""
),
"Tom" => array
(
"name" => "Tom Turbo",
"publisher" => "Thomas Brezinna",
"age" => 30,
"characteristic" => "speaking bycicle",
"location" => "Vienna"
)
);
/* Accessing multidimensional array values . Task 6.2*/
//echo "Background Infos from superstars : <br>" ;
//echo $heros['Mickey']['name'] ." is " .$heros['Mickey']['age'] ." years old <br/>";

/*Accessing multidimensional array values . Task.6.3 */

foreach ($heros as $x => $x_value) {
	echo "Background Infos from superstars: <br>";
	echo "Name: " .$x_value['name'] ."<br>";
	echo "Publisher: " .$x_value['publisher'] ."<br>";
	echo "Age: " .$x_value['age'] ."<br>";
	echo "Characteristic: " .$x_value['characteristic'] ."<br>";
	if($x_value['location']!= ""){
		echo "Location: " .$x_value['location'] ."<br>";
	}
	echo "<br>";
}
?>

</body>

</html>
