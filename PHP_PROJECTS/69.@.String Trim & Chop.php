<!-- 
    PHP trim() Function

The trim() function removes whitespace and other predefined characters from both sides of a string.

Related functions:

ltrim() - Removes whitespace or other predefined characters from the left side of a string
rtrim() - Removes whitespace or other predefined characters from the right side of a string


Syntax
trim(string,charlist)

Parameter Values
Parameter	                   Description
string	                Required. Specifies the string to check
charlist	           Optional. Specifies which characters to remove from the string. If omitted, all of the following characters are removed:
"\0" - NULL
"\t" - tab
"\n" - new line
"\x0B" - vertical tab
"\r" - carriage return
" " - ordinary white space
Return Value:	Returns the modified string


PHP chop() Function
The chop() function removes whitespaces or other predefined characters from the right end of a string.

Syntax
chop(string,charlist)

Parameter Values
Parameter	                 Description
string	              Required. Specifies the string to check
charlist	      Optional. Specifies which characters to remove from the string.
The following characters are removed if the charlist parameter is empty:
"\0" - NULL
"\t" - tab
"\n" - new line
"\x0B" - vertical tab
"\r" - carriage return
" " - ordinary white space
 
Return Value:	Returns the modified string
 -->
 <?php
/*-------String Trim Function------- */
$str = "Yahoo Baba";

echo "<pre>";
print_r($str);
echo "</pre>";

$newstr = trim($str,"a");

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = trim($str,"b"); //-- no effect

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = trim($str,"ba");

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = trim($str,"Yba");

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------String Left & Right Trim Function------- */
$newstr = rtrim($str,"Yba");

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = ltrim($str,"Yba");

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------String Remove Trim Function------- */
$str = " Yahoo Baba ";

$newstr = trim($str);

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = rtrim($str);

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------String Chop Trim Function-- work same as rtrim------- */

$newstr =  chop($str, "Yba");

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr =  chop($str, "Baba");

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr =  chop($str); //-- remove extra right space

echo "<pre>";
print_r($newstr);
echo "</pre>";
?>