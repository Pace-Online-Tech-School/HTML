<?php
	$fruits=array('apple','banana','watermelon','kiwi');

	echo "<h3>Looping using for:</h3>";
	//count() function is used to count
	//The number of element is 5
	$count_fruits=count($fruits); 
	for ($x=0; $x < $count_fruits; $x++) 
	{ 
		echo $fruits[$x] ."<br>";
	}

	echo "<h3>Looping using foreach:</h3>";
	foreach ($fruits as $value) 
	{
		echo $value ."<br>";
	}
?>