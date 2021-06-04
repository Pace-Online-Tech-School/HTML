<?php
// A) Without datatype declaration
function checkout() {
    $price = 200.1;
    $taxRate = 1.03;
    $FullPrice = $price * $taxRate;
    return $FullPrice;
}

echo checkout();
?>

<?php
// B) With datatype declaration

function checkout() :int {
    $price = 200.1;
    $taxRate = 1.03;
    $FullPrice = $price * $taxRate;
    return $FullPrice;
}

echo checkout();

?>