<?php

$fruits = array(
    'Red' => 'Apple',
    'Yellow' => 'Banana',
    'Pink' => 'Cherry',
);

foreach ($fruits as $color => $fruit) {
    echo "${fruit} is ${color}.<br/>";
}