<!DOCTYPE html>
<html>
<body style="margin-left:20px;">
<?php
$x = 100;  
$y = "100";

echo "<br><br> <br>";
echo "For Comparison : ", "<br>";
echo var_dump($x == $y), "<br>";
echo var_dump($x === $y), "<br><br>";

echo "For Logical : ", "<br>";
if($x == 100 and $y == 50){
	 echo "($x == 100 and $y == 50) is True", "<br>";
}
else{
    echo "($x == 100 and $y == 50) is False", "<br>";
}

if ($x != 100){
	echo " ($x != 100) is True", "<br><br>";
}
else{
	echo " ($x != 100) is False", "<br><br>";
}

echo "For String : ", "<br>";
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;
?>
</body>
</html>