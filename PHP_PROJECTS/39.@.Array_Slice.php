<!-- PHP Array_Slice
The array_slice() function returns selected parts of an array.

Syntax
array_slice(array, start, length, preserve)
Parameter Values
Parameter

Description

array

Required. Specifies an array

start

Required. Numeric value. Specifies where the function will start the slice. 0 = the first element. If this value is set to a negative number, the function will start slicing that far from the last element. -2 means start at the second last element of the array.

length

Optional. Numeric value. Specifies the length of the returned array. If this value is set to a negative number, the function will stop slicing that far from the last element. If this value is not set, the function will return all elements, starting from the position set by the start-parameter.

preserve

Optional. Specifies if the function should preserve or reset the keys. Possible values:

true - Preserve keys

false - Default. Reset keys

 
Return Value:

Returns selected parts of an array
 
-->
<?php 
//$color = ['red','green','blue','yelllow','brown'];
$color2 = ['a'=> 'red','b' => 'green','c' =>'blue','d'=>'yelllow','e'=>'brown'];

$newArray = array_slice($color2,1,3,true);
//$minus = array_slice($color,-3,1,true);

echo"<pre>";
print_r($newArray)."<br>";
echo"<pre>";

// echo"<pre>";
// print_r($minus)."<br>";
// echo"<pre>";



?>
