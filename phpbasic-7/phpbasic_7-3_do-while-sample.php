<?php$x = 10;
while ($x < 10) {
    echo $x;
    $x = $x + 1
    //Can be written as "$x += 1".
}

echo "<br/>"; echo "---"; echo "<br/>";

$x = 10;
do {
    echo $x;
    $x = $x + 1;
} while ($x < 10);