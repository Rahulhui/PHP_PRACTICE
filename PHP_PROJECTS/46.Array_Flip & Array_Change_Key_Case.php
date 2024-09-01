<!-- 
PHP array_flip() Function
The array_flip() function flips/exchanges all keys with their associated values in an array.

Syntax
array_flip(array)
Parameter Values
Parameter	Description
array	Required. Specifies an array of key/value pairs to be flipped 
Return Value:	Returns the flipped array on success. NULL on failure 
array_chunk() Function
The array_chunk() function splits an array into chunks of new arrays.

Syntax
array_chunk(array, size, preserve_key)
Parameter Values
Parameter	Description
array	Required. Specifies the array to use
size	Required. An integer that specifies the size of each chunk
preserve_key	Optional. Possible values:
true - Preserves the keys
false - Default. Reindexes the chunk numerically
Return Value:	Returns a multidimensional indexed array, starting with zero, with each dimension containing size elements

 -->
 <?php
/*--------Array Flip---------*/
$a = array(
    "Bill" =>10,
    "Joe" => 20,
    "Peter" => 30
);

$newArray = array_flip($a);

echo "<pre>";
print_r($newArray);
echo "</pre>";


/* -----array_change_key_case----- */
$newArray2 = array_change_key_case($a);

echo "<pre>";
print_r($newArray2);
echo "</pre>";

//default is lower case

/* --------CASE_UPPER or CASE_LOWER-------- */
$newArray3 = array_change_key_case($a, CASE_UPPER);

echo "<pre>";
print_r($newArray3);
echo "</pre>";

?>