<?php

function show_countA() {
	$count = 5;
	echo $count."\n";
}
show_countA();

function show_countB() {
	$count = 10;
	echo $count."\n";
}

show_countB();
show_countA();
?>
