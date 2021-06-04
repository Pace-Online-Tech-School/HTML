<?php

function animal_a() {
        $dog = 'Beagle';
        echo $dog;
}

function animal_b {
    echo $dog;
}

animal_a();
animal_b();

?>

<?php

$dog = 'Beagle';

function animal_a() {
    global $dog;
    echo $dog;
}

function animal_b() {
    echo $dog;
}

animal_a();
animal_b();

?>