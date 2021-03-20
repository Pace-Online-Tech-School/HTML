<?php
	$fruits=array(
			array("apple","5","2"),
			array("banana","3","3"),
			array("watermelon","2","1"),
			array("kiwi","10","4"),
			);

	for ($row=0; $row < 4; $row++) { 
		echo "Row number= ". $row;
		echo "<ul>";
		for ($col=0; $col < 3; $col++) { 
		 	echo "<li>". $fruits[$row][$col] ."</li>";
		}
		echo "</ul>";
	}
?>