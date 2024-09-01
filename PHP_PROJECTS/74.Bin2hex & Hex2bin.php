<!--
 PHP bin2hex() Function

The bin2hex() function converts a string of ASCII characters to hexadecimal values. The string can be converted back using the pack() function.

Syntax
bin2hex(string)

Parameter Values
Parameter       Description

string        Required. The string to be converted

Return Value:	Returns the hexadecimal value of the converted string
PHP hex2bin() Function
The hex2bin() function converts a string of hexadecimal values to ASCII characters.

Syntax
hex2bin(string)

Parameter Values
Parameter          Description

string          Required. The hexadecimal value to be converted

Return Value:

Returns the ASCII character of the converted string, or FALSE on failure
 -->
 <?php
/*-------Binary to hexadecimal Function------- */
$str = bin2hex("Hello World");
echo $str . "<br><br>";


/*-------hexadecimal to Binary Function------- */
echo hex2bin($str);
?>