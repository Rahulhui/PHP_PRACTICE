<!-- 
    PHP array_fill() Function
The array_fill() function fills an array with values.

Syntax
array_fill(index, number, value)
Parameter Values
Parameter	Description
index	Required. The first index of the returned array
number	Required. Specifies the number of elements to insert
value	Required. Specifies the value to use for filling the array 
Return Value:	Returns the filled array 
PHP array_fill_keys() Function
The array_fill_keys() function fills an array with values, specifying keys.

Syntax
array_fill_keys(keys, value)
Parameter Values
Parameter	Description
keys	Required. Array of values that will be used as keys
value	Required. Specifies the value to use for filling the array 
Return Value:	Returns the filled array
 -->
 <?php
/* -----------Array Fill Keys----------- */
$a = array("a","b","c","d","e");

$newArray = array_fill_keys($a, "Testing");

echo "<pre>";
print_r($newArray);
echo "</pre>";

/* -----------Array Fill----------- */
$newArray1 = array_fill(-2, 4, "Testing");

echo "<pre>";
print_r($newArray1);
echo "</pre>";

?>

