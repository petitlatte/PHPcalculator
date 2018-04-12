<?php
	// ini_set('display_errors', 1);
	// ini_set('display_startup_errors', 1);
	// error_reporting(E_ALL);

echo " <h1>" . "Your input results"."</h1>";

$selectedShape = $_GET['shape'];

if($selectedShape == "circle"){

	define("PI","3.14");
	$radius = $_GET['radius'];
	$diameter = $radius * $radius;
	$area = PI * $radius * $radius;
	$circumference = 2 * PI * $radius;

echo "Diameter of circle is " . $diameter . "<br>";
echo "Area of circle is " . $area . "<br>";
echo "Circumference of circle is " . $circumference . "<br>";
echo "<svg height= '1000' width= '1000'> <circle cx='300' cy='200' r= " . $radius . " fill= 'red' />
</svg>";



} else if ($selectedShape == "square"){
	$side = $_GET['side'];
	$area = $side * $side;
	$perimeter = 4 * $side;

echo "Area of square is " . $area . "<br>";
echo "Perimeter of square is " . $perimeter . "<br>";
echo "<svg height= '1000' width= '1000'> <rect x='300' y='200' width= " . $side . " height= " . $side .  " fill= 'blue' />
</svg>";


} else if ($selectedShape == "rectangle"){
	$length = $_GET['length'];
	$breadth = $_GET['breadth'];
	$area = $length * $breadth;
	$perimeter = 2 * ($length + $breadth);

echo "Area of rectangle is " . $area . "<br>";
echo "Perimeter of rectangle is " . $perimeter . "<br>";
echo "<svg height= '1000' width= '1000'> <rect x='300' y='200' width= " . $length . " height= " . $breadth .  " fill= 'green' />
</svg>";

}else {
	echo "try again";
}


?>