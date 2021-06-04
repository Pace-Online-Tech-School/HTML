<?php
// Set arrays, Associative array also acceptable
$fruits = array('apple','orange','banana');
$meats = array('chicken','pork', 'beef');
$snacks = array('cake', 'donut', 'maffin');

// Contain arrays in $foods array
$foods = array($fruits, $meats, $snacks);

// Show multidimentional array
print_r($foods);