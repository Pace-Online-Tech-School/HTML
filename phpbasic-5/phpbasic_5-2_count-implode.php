<?php
//Set Array in $name
$name = array('Alice', 'Bob', 'charlie', 'Daniel');

// Count the number of array
print_r(count($name))
echo "<br/>"

// Convert multiple array values in single string
$name = (implode('/', $name));
echo ($name);
echo "<br/>"

// Check data type
var_dump($name) ;       