<!-- array_merge() Function
The array_merge() function merges one or more arrays into one array.

Syntax
array_merge(array1, array2, array3, ...)
Parameter Values
Parameter	Description
array1	Required. Specifies an array
array2	Optional. Specifies an array
array3,...	Optional. Specifies an array 
Return Value:	Returns the merged array
array_combine()
The array_combine() function creates an array by using the elements from one "keys" array and one "values" array.

Syntax
array_combine(keys, values)
Parameter Values
Parameter	        Description
keys	         Required. Array of keys
values	       Required. Array of values 
Return Value:	Returns the combined array. FALSE if number of elements does not match 

-->

<?php  
/* Multiple Array Merge */
$fruit = ['a'=>"orange", 'd' => "banana", 'e' => "grapes"];
//  $veggie = ['carrot', 'pea'];
$color = [ 'a'=> 'red','b'=>'green', 'c' =>'blue'];

//$newArray = array_merge($fruit,$color,$veggie);
$newArray = array_merge_recursive($fruit,$color);



echo"<pre>";

print_r($newArray).'<br>';
echo"<pre>";
/* ---------if u want the duplicate key entry of first array---------- */
// $newArray = $fruit + $veggie;

/* ----------array_merge_recursive-------------- */
//$newArray = array_merge_recursive($fruit,$veggie); /* --- for common key built new array --- */


// $veggie = ['b' => ['color' => ['red','blue','green']],  /* ---- more complex multidim array ----*/
//             'e' => 'pea',
//             55,
//             68
//           ];

// $newArray = array_merge_recursive($fruit,$veggie);


/* --------array_combine-------- */
$name = array("Ram","Mohan","Salman");
$age = array("35","37","43");

$newArray = array_combine($name, $age);

echo "<pre>";
print_r($newArray);
echo "</pre>";



?>