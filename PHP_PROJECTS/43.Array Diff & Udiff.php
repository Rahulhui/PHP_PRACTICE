<!-- PHP Array Diff 
The array_diff() function compares the values of two (or more) arrays, and returns the differences.

This function compares the values of two (or more) arrays, and return an array that contains the entries from array1 that are not present in array2 or array3, etc.

Syntax
array_diff(array1, array2, array3, ...)

Parameter Values
Parameter	Description
array1	Required. The array to compare from
array2	Required. An array to compare against
array3,...	Optional. More arrays to compare against 
Return Value:	Returns an array containing the entries from array1 that are not present in any of the other arrays
array_udiff()
The array_udiff() function compares the values of two or more arrays, and returns the differences.

This function compares the values of two (or more) arrays, and return an array that contains the entries from array1 that are not present in array2 or array3, etc.

Syntax
array_udiff(array1, array2, array3, ..., myfunction)

Parameter Values
Parameter	Description
array1	Required. The array to compare from
array2	Required. An array to compare against
array3,...	Optional. More arrays to compare against
myfunction	Required. A string that define a callable comparison function. The comparison function must return an integer <, =, or > than 0 if the first argument is <, =, or > than the second argument 
Return Value:	Returns an array containing the entries from array1 that are not present in any of the other arrays
 -->
 <?php
/*--------- array_diff - compare only values and return differences only form $a1 ---------*/
$a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

$a2 = array("a"=>"red","f"=>"green","d"=>"purple");

$newArray = array_diff($a1,$a2);

echo "<pre>";
print_r($newArray);
echo "</pre>";

//show change case

/* ---------Comapre Three Arrays --------- */
$a3 = array("a"=>"red","b"=>"black","h"=>"yellow");

$newArray1 = array_diff($a1,$a2,$a3);

echo "<pre>";
print_r($newArray1);
echo "</pre>";

/*--------- Compare only Key ---------*/
$newArray2 = array_diff_key($a1,$a2);

echo "<pre>";
print_r($newArray2);
echo "</pre>";


/* -------Compare Key and Value both ---- Only compare associative array------- */
$newArray3 = array_diff_assoc($a1,$a2);

echo "<pre>";
print_r($newArray3);
echo "</pre>";

function compare($a,$b)
{
  if ($a===$b){
    return 0;
  }
  return ($a > $b)?1:-1;
}

function compareValue($a,$b)
{
  if ($a===$b){
    return 0;
  }
  return ($a > $b)?1:-1;
}

/* -------Match Key and Value both with callback function------- */
$newArray4 = array_diff_uassoc($a1,$a2, "compare"); //--- can also use string fun - "strcasecmp"

echo "<pre>";
print_r($newArray4);
echo "</pre>";



//this function can write also like thid( array_udiff_assoc ) -- Important


/* --------Compare only key with function-------- */
$newArray5 = array_diff_ukey($a1,$a2, "compare");

echo "<pre>";
print_r($newArray5);
echo "</pre>";


/* ------Compare only value with function------ */
$newArray6 = array_udiff($a1,$a2, "compare");

echo "<pre>";
print_r($newArray6);
echo "</pre>";


/* --------Compare both value and key with two different functions---------- */

$newArray7 = array_udiff_uassoc($a1,$a2,"compare","compareValue");

echo "<pre>";
print_r($newArray7);
echo "</pre>";

?>

