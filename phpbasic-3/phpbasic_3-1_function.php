//Without function

<?php
$height = 3;
$width = 6;
$area = $height * $width;
echo $area;


// With function

<?php

function rectangle() {
    $height = 3;
    $width = 6;
    $area = $height * $width;
}

echo rectangle();