<!-- 
    PHP strrpos() Function
The strrpos() function finds the position of the last occurrence of a string inside another string.

Syntax
strrpos(string,find,start)
Parameter Values
Parameter	Description
string	Required. Specifies the string to search
find	Required. Specifies the string to find
start	Optional. Specifies where to begin the search 
Return Value:

Returns the position of the last occurrence of a string inside another string, or FALSE if the string is not found. Note: String positions start at 0, and not 1.
 -->
 <?php
/*-------strpos --- Find the position of the first occurrence------- */
$str = "Hello world. The world is nice";

$newStr = strpos($str, "world");

echo "<pre>";
print_r($newStr);
echo "</pre>";

$newStr = strpos($str, "world", 10);

echo "<pre>";
print_r($newStr);
echo "</pre>";

$newStr = strpos($str, "world", -20); //--- use negative start value

echo "<pre>";
print_r($newStr);
echo "</pre>";

/*------- strrpos --- Finds the position of the last occurrence------- */
$newStr = "strpos :" . strpos($str, "world");

echo "<pre>";
print_r($newStr);
echo "</pre>";

$newStr = "strrpos :" . strrpos($str, "world");

echo "<pre>";
print_r($newStr);
echo "</pre>";

/*------- stripos --- Find the position of the first occurrence------- */
$newStr = "stripos :" . stripos($str, "WORLD");

echo "<pre>";
print_r($newStr);
echo "</pre>";

$newStr = "stripos :" . stripos($str, "WORLD", 10);

echo "<pre>";
print_r($newStr);
echo "</pre>";

/*------- strripos --- Finds the position of the last occurrence------- */
$newStr = "strripos :" . strripos($str, "WORLD");

echo "<pre>";
print_r($newStr);
echo "</pre>";
?>

