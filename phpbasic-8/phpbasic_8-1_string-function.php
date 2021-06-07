<?php

$string = 'Alice and Bob';

// Count the length of the given string.
echo mb_strlen($string)."<br/>";

// Convert given string into uppercase.
echo mb_strtoupper($string)."<br/>";

// Extract parts of string from given string.
echo mb_substr($string, 2, 5)."<br/>;