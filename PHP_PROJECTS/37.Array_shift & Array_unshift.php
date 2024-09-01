<!-- Array_shift()
The array_shift() function removes the first element from an array, and returns the value of the removed element. 
-->

<!-- Syntax
array_shift(array) 
-->
<!-- 
    Parameter Values
Parameter       Description

array            Required. Specifies an array

Return Value:

Returns the value of the removed element from an array, or NULL if the array is empty 
------------------------->
<!-- Array_unshift()
The array_unshift() function inserts new elements to an array. The new array values will be inserted in the beginning of the array. 
-->

<!-- Syntax
array_unshift(array, value1, value2, value3, ...) 
-->
<!-- Parameter Values
Parameter   Description

array       Required. Specifying an array

value1       Optional. Specifies a value to insert (Required in PHP versions before 7.3)

value2        Optional. Specifies a value to insert

value3          Optional. Specifies a value to insert

Return Value:

Returns the new number of elements in the array

-->

<?php
/*------- Add on starting on the Array------ */
$fruit = ["orange", "banana", "grapes"];

array_shift($fruit);

echo "<pre>";
print_r($fruit);
echo "</pre>";


/*------ Delete from Start------ */
$fruit = ["orange", "banana", "grapes"];

array_unshift($fruit,"Apple", "guava", "lemon");

echo "<pre>";
print_r($fruit);
echo "</pre>";


?>
