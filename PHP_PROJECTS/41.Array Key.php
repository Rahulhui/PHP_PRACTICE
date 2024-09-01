<!--
 PHP Array Key
The array_keys() function returns an array containing the keys.

Syntax
array_keys(array, value, strict)
Parameter Values
Parameter	Description
array	Required. Specifies an array
value	Optional. You can specify a value, then only the keys with this value are returned
strict	Optional. Used with the value parameter. Possible values:
true - Returns the keys with the specified value, depending on type: the number 5 is not the same as the string "5".
false - Default value. Not depending on type, the number 5 is the same as the string "5".
 
Return Value:	Returns the merged array 
-->
<?php
/*-------- array_keys--------*/
$color =["red","green","blue","yellow"];

$newArray = array_keys($color);

echo '<pre>';
print_r($newArray);
echo '</pre>';

/* --------With Associative Array --------- */
$color1 =[
          "first" =>"red",
          "second" =>"green",
          "third" =>"blue",
          "fourth" =>"yellow"
        ];
		
$newArray1 = array_keys($color1);

echo '<pre>';
print_r($newArray1);
echo '</pre>';

/* ---------Comes in 7.3---------- */
 
$newArray1 = array_key_first($color1);

echo '<pre>';
print_r($newArray1);
echo '</pre>';


/* ---------Comes in 7.3----------- */
	
$newArray1 = array_key_last($color1);

echo '<pre>';
print_r($newArray1);
echo '</pre>';


/* ------array_key_exists--------- */
$newArray1 = array_key_exists("third", $color1);

echo '<pre>';
print_r($newArray1);
echo '</pre>';

$newArray1 =  array_key_exists("six", $color);
echo '<pre>';
print_r($newArray1);
echo '</pre>';


/* -------array_key_exists short name key)exists-------- */
$newArray1 = key_exists("second", $color1);

echo '<pre>';
print_r($newArray1);
echo '</pre>';

/* ---------check result with if condition----------- */
if ($newArray1)
  {
    echo "Key exists!";
  }
  else
  {
    echo "Key does not exist!";
  }

?>