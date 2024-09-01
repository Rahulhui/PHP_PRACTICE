<!-- array_values()
The array_values() function returns an array containing all the values of an array.

Syntax
array_values(array)
Parameter Values
Parameter	Description
array	Required. Specifying an array
Return Value:	Returns an array containing all the values of an array
array_unique()
The array_unique() function removes duplicate values from an array. If two or more array values are the same, the first appearance will be kept and the other will be removed.

Syntax
array_unique(array, sorttype)
Parameter Values
Parameter	    Description
array	       Required. Specifying an array
sorttype	    Optional. Specifies how to compare the array elements/items. Possible values:
         SORT_STRING - Default. Compare items as strings
        SORT_REGULAR - Compare items normally (don't change types)
         SORT_NUMERIC - Compare items numerically
        SORT_LOCALE_STRING - Compare items as strings, based on current locale 
-->
<?php
/* ------------Array Values------------ */
$a1 = array("a"=>"red","b"=>"green","c"=>"red","d"=>"yellow");

$newArray = array_values($a1);

echo "<pre>";
print_r($newArray);
echo "</pre>";

/* ---------Array Unique---------*/

$newArray1 = array_unique($a1);

echo "<pre>";
print_r($newArray1);
echo "</pre>";

?>

