<!-- PHP list() function
The PHP list( ) function is used to assign values to a list of variables in one operation. This function was introduced in PHP 4.0.Syntax

array list ( mixed $var1 [, mixed $... ] );  
Parameter
Parameter

Description

Is compulsory

Variable1

The first variable to assign a value to.

compulsory

Variable2...

More variables to assign values to.

Optional

Return value
The list( ) function returns the assigned array. 
-->
<?php
/*-------Array List Function------- */
$color = array('red', 'green', 'blue');

list($a , $b, $c) = $color;

echo "Value of a : $a <br>";
echo "Value of b : $b <br>";
echo "Value of c : $c <br>";
echo "<br><br>";

/*-------Array Numberic Value------- */

$color1 = array(22,55,33);

list($a , $b, $c) = $color1;

echo "Value of a : $a <br>";
echo "Value of b : $b <br>";
echo "Value of c : $c <br>";
echo "<br><br>";
/*------- Remove Variable------- */

list($a , , $c) = $color1;

echo "Value of a : $a <br>";
echo "Value of c : $c <br>";
echo "<br><br>";

/*-------Only works with Numeric Index------- */

$color2 = array(0 => 'red', 1 => 'green', 2 => 'blue');

list($a , $b, $c) = $color2;

echo "Value of a : $a <br>";
echo "Value of b : $b <br>";
echo "Value of c : $c <br>";
echo "<br><br>";

/*-------All values in One Array------- */

list($d[0], $d[1], $d[2]) = $color2;

echo "Value of a : $d[0] <br>";
echo "Value of b : $d[1] <br>";
echo "Value of c : $d[2] <br>";
echo "<br><br>";

?>

