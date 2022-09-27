<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHPArraysAct2</title>
</head>
<body>

<h1>PHPArraysAct2</h1>
<br>
<?php
 
 $largestCities = array("Tokyo","Mexico City","New York City","Mumbai","Seoul","Shanghai","Lagos","Buenas Aires","Cairo","London");
 print("Printing the values was that separated by commas");
print"<br>";

	for($i = 0; $i < (count($largestCities)); $i++){
		print_r($largestCities[$i] . ", ");
	}	
print"<br>";

sort($largestCities);
?>
<!--Printing the sorted array as an unordered list-->
<p>
	Sorting and printing the array
	<?php
		for ($i = 1; $i <(count($largestCities)); $i++) {
	?>
	<ul>
		<li><?= $largestCities[$i] ?></li>
	</ul>
	<?php
		}
	?>
</p>

<?php 

	$largestCities[] = "Los Angeles";
	$largestCities[] = "Calcutta";
	$largestCities[] = "Osaka";
	$largestCities[] = "Beijing";

	sort($largestCities);
?>

<!--Adding and sorting the Array-->
<p>
	Adding the other cities into the array
	<?php
		for ($i = 1; $i <(count($largestCities)); $i++) {
	?>
	<ul>
		<li><?= $largestCities[$i] ?></li>
	</ul>
	<?php
		}
	?>
</p>



</body>
</html>