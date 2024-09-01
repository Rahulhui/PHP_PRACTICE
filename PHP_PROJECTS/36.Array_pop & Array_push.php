
<!-- PHP array_pop() Function
The array_pop() function deletes the last element of an array. 

-->

<!-- Syntax
array_pop(array) 
-->

<!-- Parameter Values
Parameter	        Description
array	          Required. Specifies an array 

Return Value: Returns the last value of array. If array is empty, or is not an array, NULL will be returned. 

-->
<!-- PHP array_push() Function
The array_push() function inserts one or more elements to the end of an array.

Syntax
array_push(array, value1, value2, ...)
 -->

 <!-- Parameter Values
Parameter	Description
array	      Required. Specifies an array
value1	       Optional. Specifies the value to add (Required in PHP versions before 7.3)
value2	        Optional. Specifies the value to add 

Return Value:	Returns the new number of elements in the array 

-->

<?php 
$fruit = ['orange', 'banana', 'apple', 'grapes'];

// array_pop($fruit);
// echo "<pre>";
// print_r($fruit)."<br>";
// echo "</pre>";




// array_push
array_push($fruit,"nuts",'pine ');


echo "<pre>";
print_r($fruit)."<br>";
echo "</pre>";


?>