<!-- 
PHP array_sum() Function
The array_sum() function returns the sum of all the values in the array.

Syntax
array_sum(array)
Parameter Values
Parameter	Description
array	Required. Specifies an array
 
Return Value:	Returns the sum of all the values in an array 
PHP array_product() Function
The array_product() function calculates and returns the product of an array.

Syntax
array_product(array)
Parameter Values
Parameter

Description

array

Required. Specifies an array

 
Return Value:

Returns the product as an integer or float



 -->

 <?php

$a1 = array(2, 4, 6, 8);

$a2 = array("a" => 1.2, "b" => 2.3, "c" => 3.4);

/*------------Array Sum------------ */
echo "Sum of a1 = " . array_sum($a1). '<br><br>';

echo "Sum of a2 = " . array_sum($a2). '<br><br>';


/*------------Array Product------------ */
echo "Product of a1 = " . array_product($a1). '<br><br>';

echo "Product of a2 = " . array_product($a2). '<br><br>';
?>