<?php
echo "Enter the first number: ";
$number1 = 10;
echo "$number1<br>";
echo "Enter the second number: ";
$number2 = 20;
echo "$number2<br>";

$sum = $number1 + $number2;
$subtraction = $number1 - $number2;
$multiplication = $number1 * $number2;

if ($number2 != 0) {
	$division = $number1 / $number2;
} else {
	$division = "Cannot divide by zero";
}

$exponent = $number1 ** $number2;

echo "Sum: $sum\n<br>";
echo "Subtraction: $subtraction\n<br>";
echo "Multiplication: $multiplication\n<br>";
echo "Division: $division\n<br>";
echo "Exponent: $exponent\n<br>";
?>