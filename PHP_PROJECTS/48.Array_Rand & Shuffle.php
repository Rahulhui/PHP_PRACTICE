<!-- pHP array_rand() Function
The array_rand() function returns a random key from an array, or it returns an array of random keys if you specify that the function should return more than one key.

Syntax
array_rand(array, number)
Parameter Values
Parameter	Description
array	Required. Specifies an array
number	Optional. Specifies how many random keys to return
Return Value:	Returns a random key from an array, or an array of random keys if you specify that the function should return more than one key -->

<?php 
/*------------Array Rand------------ */
$color = array("red","green","blue","yellow","brown");

$newArray = array_rand($color);

echo "<pre>";
print_r($newArray);
echo "</pre>";

//echo $color[$newArray]."<br><br>";
/*------------ IInd Parameter -- as a Number------------ */

$newArray1 = array_rand($color, 2);
echo "<pre>";
print_r($newArray1);
echo "</pre>";

echo $color[$newArray1[0]]."<br>";
echo $color[$newArray1[1]]."<br>";
/*------------Use with Associative Array------------ */

$color1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

$newArray2 = array_rand($color1, 2);

echo "<pre>";
print_r($newArray2);
echo "</pre>";

/*------------Shuffle Array------------ */

$color2 = array("red","green","blue","yellow","brown");

shuffle($color2);

echo "<pre>";
print_r($color2);
echo "</pre>";


/*------------Shuffle Use With Associative Array------------ */

$color3 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

shuffle($color3);

echo "<pre>";
print_r($color3);
echo "</pre>";

?>