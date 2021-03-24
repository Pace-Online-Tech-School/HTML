<?php
	$fruits=array('apple'=>'5','banana'=>'3','watermelon'=>'2','kiwi'=>'10');

	echo "<h3>Looping using foreach:</h3>";
	foreach ($fruits as $key => $value) 
	{
		echo "Key= " . $key . " and Value= " . $value . "<br>";
	}
?>