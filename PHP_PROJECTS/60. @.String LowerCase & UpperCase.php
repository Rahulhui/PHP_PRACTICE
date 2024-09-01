<!-- 
    strtolower() Function
The strtolower() function converts a string to lowercase.

Syntax
strtolower(string)
Parameter Values
Parameter	Description
string	Required. Specifies the string to convert 
Return Value:	Returns the the lowercased string 
strtoupper() function
The strtoupper() function converts a string to uppercase.

Syntax
strtoupper(string)
Parameter Values
Parameter	Description
string	Required. Specifies the string to convert 
Return Value:	Returns the the uppercased string
 -->
 <?php
/*-------converts a string to Lowercase------- */
$str = "Yahoo Baba";

$newStr = strtolower($str);

echo $newStr;
echo "<br><br>";

/*-------converts a string to Uppercase------- */

$newStr1 = strtoupper($str);

echo $newStr1;
echo "<br><br>";

/*-------Convert the first character of a string to lowercase: ------- */

$newStr2 = lcfirst($str);

echo $newStr2;
echo "<br><br>";

/*-------Converts the first character of a string to uppercase------- */

$newStr3 = ucfirst($str);

echo $newStr3;
echo "<br><br>";

/*-------Converts the first character of each word in a string to uppercase------- */

$newStr4 = ucwords($str);

echo $newStr4;
echo "<br><br>";

?>