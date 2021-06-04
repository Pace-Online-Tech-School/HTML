<?php
// Set arrays.

$yellow_fruits = array('Bnana', 'Pineapple', 'Mango');
$red_fruits = array('Apple', 'Strawberry',);

// Combine multiple arrays
$fruits = array_merge($yellow_fruits, $red_fruits);
print_r($fruits);

//Serach a value from an array
print_r(array_search('Apple', $furuits);
//Pineapple is not matched