<!--
 PHP convert_uuencode() Function

The convert_uuencode() function encodes a string using the uuencode algorithm.

Syntax
convert_uuencode(string)


Parameter Values
Parameter          Description

string            Required. The string to uuencode


Return Value:

Returns the uuencoded data

PHP convert_uudecode() Function
The convert_uudecode() function decodes a uuencoded string.

This function is often used together with the convert_uuencode() function.

Syntax
convert_uudecode(string)

Parameter Values
Parameter                    	Description
string	             Required. The uuencoded string to decode

Return Value:	Returns the decoded data as a string 

-->
<?php
/*-------Convert uuencode Function------- */
$str = "Hello world!";

$encodeString = convert_uuencode($str);
echo $encodeString . "<br><br>";

/*-------Convert uudecode Function------- */
$decodeString = convert_uudecode($encodeString);
echo $decodeString;

?>

