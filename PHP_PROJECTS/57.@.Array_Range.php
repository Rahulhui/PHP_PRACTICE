<!-- 
    PHP Array_Range
The PHP range( ) function is used to create an array containing a range of elements. The PHP range( ) function returns an array of elements from low to high. This function was introduced in PHP 4.0.

Syntax
array range ( mixed $start , mixed $end [, number $step = 1 ] );  
Parameter
Parameter

Description

Is compulsory

low

It is a lower range of the array.

compulsory

high

It is an upper range of the array.

compulsory

step

Steps to increase array element. By default it is 1.

Optional

Returns
The range( ) function returns array of elements
 -->
 <?php
/*-------Array Range Function------- */
$newArray = range(0, 10);

echo "<pre>";
print_r($newArray);
echo "</pre>";

/*-------Using step------- */

$newArray1 = range(0, 100, 10);

echo "<pre>";
print_r($newArray1);
echo "</pre>";


/*-------Using Alphabet------- */

$newArray2 = range('a', 'h');

echo "<pre>";
print_r($newArray2);
echo "</pre>";

//OR

$newArray3 = range('h', 'a');

echo "<pre>";
print_r($newArray3);
echo "</pre>";


/*-------Foreach Array Range Function------- */

foreach (range('h', 'a') as $letter) {
    echo $letter . "<br>";
}

?>

