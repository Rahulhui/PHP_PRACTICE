<!-- 
    PHP addslashes() Function
The addslashes() function returns a string with backslashes in front of predefined characters.

The predefined characters are:

single quote (')
double quote (")
backslash (\)
NULL
Syntax
addslashes(string)
Parameter Values
Parameter	            Description
string	               Required. Specifies the string to be escaped 
Return Value:	Returns the escaped string
PHP stripslashes() Function
The stripslashes() function removes backslashes added by the addslashes() function.

Syntax
stripslashes(string)
Parameter Values
Parameter	                     Description
string                   	Required. Specifies the string to check 
Return Value:	Returns a string with backslas
 -->

 <?php
/*-------String Addslashes Function------- */
$str = "Hello I am 'Yahoo Baba'";

echo "<pre>";
print_r($str);
echo "</pre>";

$newstr = addslashes($str);

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------String slashes Function------- */
$str = "Hello I am 'Yahoo Baba'";

echo "<pre>";
print_r($str);
echo "</pre>";

/*-------Remove slashes which is added by addslashes function------- */
$newstr = stripslashes($str);

echo "<pre>";
print_r($str);
echo "</pre>";

/*-------String Addcslashes Function------- */
$str = "Hello World!";

$newstr = addcslashes($str, "W");

echo "<pre>";
print_r($str);
echo "</pre>";

/*-------String Addcslashes Function------- */
$newstr = addcslashes($str, "Wl");

echo "<pre>";
print_r($str);
echo "</pre>";

/*-------String Multiple Characters Addcslashes Function------- */
$newstr =  addcslashes($str,"A..Z");

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr =  addcslashes($str,"a..z");

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr =  addcslashes($str,"a..f");

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------String stripcslashes Function------- */
$newstr =  stripcslashes($str);

echo "<pre>";
print_r($newstr);
echo "</pre>";

?>