<!-- 

PHP substr() Function
The substr() function returns a part of a string.

Syntax
substr(string,start,length)
Parameter Values
Parameter	              Description
string	               Required. Specifies the string to return a part of
start	               Required. Specifies where to start in the string
A positive number - Start at a specified position in the string
A negative number - Start at a specified position from the end of the string
0 - Start at the first character in string

length	                Optional. Specifies the length of the returned string. Default is to the end of the string.
A positive number - The length to be returned from the start parameter
Negative number - The length to be returned from the end of the string
If the length parameter is 0, NULL, or FALSE - it return an empty string


Return Value:	Returns the extracted part of a string, or FALSE on failure, or an empty string
 -->
 <?php
/*-------String:Substring Function------- */
$str = "Hello world. The world is nice";

$newstr = substr($str, 5);

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = substr($str, 15);

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = substr($str, 22);

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = substr($str, -5);

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = substr($str, -10);

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr =  substr($str, 0, 10);

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = substr($str, 10, 20);

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr =  substr($str, 0, -1);

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr =  substr($str, 10, -10);

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr =  substr($str, -10, -3);

echo "<pre>";
print_r($newstr);
echo "</pre>";
