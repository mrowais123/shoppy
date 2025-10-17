<?php
function calculateCircleArea($radius) {
	return M_PI * $radius * $radius;
}

function calculateRectangleArea($length, $width) {
	return $length * $width;
}

function calculateTriangleArea($base, $height) {
	return 0.5 * $base * $height;
}

function calculateSquareArea($side) {
	return $side * $side;
}

function calculateTrapezoidArea($base1, $base2, $height) {
	return 0.5 * ($base1 + $base2) * $height;
}

function calculateParallelogramArea($base, $height) {
	return $base * $height;
}

echo "Enter the radius of circle: ";
$radius = 10;
echo "$radius<br>";

echo "Enter the width of the rectangle: ";
$width = 20;
echo "$width<br>";

echo "Enter the length of the rectangle: ";
$length = 30;
echo "$length<br>";

echo "Enter the base of the triangle: ";
$base = 40;
echo "$base<br>";

echo "Enter the height of the triangle: ";
$height = 50;
echo "$height<br>";

echo "Enter the side of the square: ";
$side = 60;
echo "$side<br>";

echo "Enter the length of the first base of the trapezoid: ";
$base1 = 70;
echo "$base1<br>";

echo "Enter the length of the second base of the trapezoid: ";
$base2 = 80;
echo "$base2<br>";

echo "Enter the height of the trapezoid: ";
$trapezoidHeight = 90;
echo "$trapezoidHeight<br>";

echo "Enter the base of the parallelogram: ";
$parallelogramBase = 15;
echo "$parallelogramBase<br>";

echo "Enter the height of the parallelogram: ";
$parallelogramHeight = 25;
echo "$parallelogramHeight<br>";

echo "Area of circle: " . calculateCircleArea($radius) . "<br>";
echo "Area of Rectangle: " . calculateRectangleArea($length, $width) . "<br>";
echo "Area of Triangle: " . calculateTriangleArea($base, $height) . "<br>";
echo "Area of square: " . calculateSquareArea($side) . "<br>";
echo "Area of Trapezoid: " . calculateTrapezoidArea($base1, $base2, $trapezoidHeight) . "<br>";
echo "Area of Parallelogram: " . calculateParallelogramArea($parallelogramBase, $parallelogramHeight) . "<br>";
?>