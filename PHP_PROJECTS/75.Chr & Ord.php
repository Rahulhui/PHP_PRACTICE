<!-- 
PHP chr() Function
The chr() function returns a character from the specified ASCII value.

The ASCII value can be specified in decimal, octal, or hex values. Octal values are defined by a leading 0, while hex values are defined by a leading 0x.

Syntax
chr(ascii)

Parameter  Values
Parameter	                   Description
ascii	                Required. An ASCII value


Return Value:	Returns the specified character
PHP ord() Function
The ord() function returns the ASCII value of the first character of a string.

Syntax
ord(string)
Parameter Values
Parameter	                  Description
string	                Required. The string to get an ASCII value from


Return Value:	Returns the ASCII value as an integer
 -->
 <?php
/*-------decimal value------- */
$str = chr(65); //---> 66 , 97
echo $str. "<br><br>";

/*-------Hexadecimal value------- */
$str = chr(0x48);
echo $str. "<br><br>";

/*-------Octal value ------- */
$str = chr(0120);
echo $str. "<br><br>";

/*-------ord Function------- */
$str = ord("A");
echo $str. "<br><br>";

$str = ord("Apple");
echo $str. "<br><br>";

$str = ord("Hello");
echo $str. "<br><br>";
?>