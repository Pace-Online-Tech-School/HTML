<!DOCTYPE html>
<html>
<body style="margin-left:20px;">

<?php
$x = array("a" => "Apple", "b" => "Orange",); 
$y = array("d" => "Sunflower", "e" => "Rose",); 

echo "<br><br> <br>";
echo "For Array Operator : ", "<br>";
print_r($x + $y); // union of $x and $y
echo "<br><br>";

echo "For Increment/Decrement Operator : ", "<br>";
$x = 10;  
echo ++$x, "<br>" ;

$y = 10;  
echo $y++, "<br><br>" ;

echo "For Conditional Assignment Operator : ", "<br>";
echo $color = $color ?? "red";

?>
</body>
</html>