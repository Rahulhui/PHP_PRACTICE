<!-- PHP Array_replace 

The array_replace() function replaces the values of the first array with the values from following arrays.

Syntax
array_replace(array1, array2, array3, ...)

Parameter Values
Parameter

Description

array1	Required. Specifies an array
array2	Optional. Specifies an array which will replace the values of array1
array3,...	Optional. Specifies more arrays to replace the values of array1 and array2, etc. Values from later arrays will overwrite the previous ones. 
Return Value:	Returns the replaced array, or NULL if an error occurs  

--------------------------------->



<!-- PHP array_replace_recursive() Function

The array_replace_recursive() function replaces the values of the first array with the values from following arrays recursively.


Syntax
array_replace_recursive(array1, array2, array3, ...)

Parameter Values
Parameter	Description
array1	Required. Specifies an array
array2	Optional. Specifies an array which will replace the values of array1
array3,...	Optional. Specifies more arrays to replace the values of array1 and array2, etc. Values from later arrays will overwrite the previous ones. 
Return Value:	Returns the replaced array, or NULL if an error occurs 
--------------------------------->
<?php
$fruit = ['orange', 'banana', 'apple', 1 => 'grapes'];

$veggie = ['carrot', 'pea'];

$newArray = array_replace($fruit, $veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";


/*----- Index Array --------  */
$color = ['red', 'green', 'blue'];

$newArray = array_replace($fruit, $veggie, $color);

echo "<pre>";
print_r($newArray);
echo "</pre>";



// /* ----------------Associative Array------------------- */
$veggie = ['a' => 'carrot', 'b' => 'pea'];

$veggie = ['a' => 'carrot', 1 => 'pea'];


// /* --------------Array Replace Function----------------- */
$fruit = ['orange', 'b' => 'banana', 'apple', 'grapes'];


// /* ---- array_replace_recursive----------- */
$array1 = array("a"=>array("red"),"b"=>array("green","pink"));

$array2 = array("a"=>array("yellow"),"b"=>array("black"));

$new1Array = array_replace_recursive($array1, $array2);

echo "<pre>";
print_r($new1Array);
echo "</pre>";



?>