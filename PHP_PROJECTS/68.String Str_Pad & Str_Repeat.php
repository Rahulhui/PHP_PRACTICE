
<!-- PHP str_pad() Function
The str_pad() function pads a string to a new length.

Syntax
str_pad(string,length,pad_string,pad_type)

Parameter Values
Parameter	           Description
string          	Required. Specifies the string to pad
length	             Required. Specifies the new string length. If this value is less than the original length of the string, nothing will be done
pad_string	       Optional. Specifies the string to use for padding. Default is whitespace
pad_type	               Optional. Specifies what side to pad the string.
Possible values:

STR_PAD_BOTH - Pad to both sides of the string. If not an even number, the right side gets the extra padding
STR_PAD_LEFT - Pad to the left side of the string
STR_PAD_RIGHT - Pad to the right side of the string. This is default
 
Return Value:	Returns the padded string
PHP str_repeat() Function
The str_repeat() function repeats a string a specified number of times.

Syntax
str_repeat(string,repeat)

Parameter Values
Parameter	               Description
string	             Required. Specifies the string to repeat
repeat	              Required. Specifies the number of times the string will be repeated. Must be greater or equal to 0 
Return Value:	Returns the repeated string -->

<?php
/*-------String Pad Function------- */
$str = "Hello World";

$newstr = str_pad($str,20,".");

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = str_pad($str,20,"+");

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = str_pad($str,20,"+=");

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------STR_PAD_LEFT & STR_PAD_BOTH Function------- */
$newstr = str_pad($str, 20, ".", STR_PAD_LEFT);

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = str_pad($str, 20, ".", STR_PAD_BOTH);

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------String Repeat Function------- */
$newstr = str_repeat("Wow",5);

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = str_repeat("+Wow+",5);

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = str_repeat("-=",5);

echo "<pre>";
print_r($newstr);
echo "</pre>";

?>

