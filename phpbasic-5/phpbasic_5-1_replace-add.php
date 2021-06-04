<?php
// Set Array in $name
$name = array('Alice', 'Bob', 'Charlie', 'Daniel');

// Confirm array number 0 is "Alice"
print_r($name[0]);
echo "<br/>"

// Change array number 0 in "Antony"
$name[0] = "Antony";
print_r($name[0]);
echo "<br/>"

// Add "Eve" at the end of array
$name[] = "Eve";
print_r($name);