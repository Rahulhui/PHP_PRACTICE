<!-- INDEX ARRAY -->
<!-- What is an Array? -->

<!-- An array is a special variable that can hold many values under a single name, and you can access the values by referring to an index number or name. 
------------------------------------>
<!-- Create Array

You can create arrays by using the array() function:

Example

$cars = array("Volvo", "BMW", "Toyota"); 
------------------------------------>
<!-- Multiple Lines
Line breaks are not important, so an array declaration can span multiple lines:

Example

$cars = [
  "Volvo",
  "BMW",
  "Toyota"
]; 
------------------------------------>
<!-- Access Array Item
To access an array item, you can refer to the index number for indexed arrays, and the key name for associative arrays.

Example:

Access an item by referring to its index number:

$cars = array("Volvo", "BMW", "Toyota");
echo $cars[2]; 
------------------------------------>
<?php
// 1
$number = array("one ","two","three","four");


echo $number[3]."<br>";

echo"<pre>";
print_r($number);
echo"</pre>";
// 2
$color[1] = 'red'  ; 
$color [2]=  'green' ; 
$color [3]=   'blue'; 
$color [4]=   'violet'; 

echo"<pre>";
print_r($color)."<br>";
echo"</pre>";

echo $color[4]."<br>" ;
//3
echo "<ul>";
for ($i=1; $i <5 ; $i++) { 
    # code...
   echo $color[$i] ."<br>" ;
}
echo "</ul>";
?>