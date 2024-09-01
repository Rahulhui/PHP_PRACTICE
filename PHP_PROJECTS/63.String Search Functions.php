<!-- 
PHP strstr() Function
The strstr() function searches for the first occurrence of a string inside another string.

Syntax
strstr(string,search,before_search)
Parameter Values
Parameter                 	Description
string                 	Required. Specifies the string to search
search                	Required. Specifies the string to search for. If this parameter is a number, it will search for the character matching the ASCII value of the number
before_search	             Optional. A boolean value whose default is "false". If set to "true", it returns the part of the string before the first occurrence of the search parameter.


Return Value:	Returns the rest of the string (from the matching point), or FALSE, if the string to search for is not found.
PHP stristr() Function
The stristr() function searches for the first occurrence of a string inside another string.

Syntax
stristr(string,search,before_search)


Parameter Values
Parameter	         Description
string	             Required. Specifies the string to search
search	             Required. Specifies the string to search for. If this parameter is a number, it will search for the character matching the ASCII value of the number
before_search	        Optional. A boolean value whose default is "false". If set to "true", it returns the part of the string before the first occurrence of the search parameter.



Return Value:	Returns the rest of the string (from the matching point), or FALSE, if the string to search for is not found.
PHP strchr() Function
The strchr() function searches for the first occurrence of a string inside another string.

This function is an alias of the strstr() function.

Syntax
strchr(string,search,before_search);

Parameter Values
Parameter	                    Description
string	                Required. Specifies the string to search
search	                Required. Specifies the string to search for. If this parameter is a number, it will search for the character matching the ASCII value of the number
before_search	        Optional. A boolean value whose default is "false". If set to "true", it returns the part of the string before the first occurrence of the search parameter.



Return Value:	Returns the rest of the string (from the matching point), or FALSE, if the string to search for is not found.
PHP strpbrk() Function
The strpbrk() function searches a string for any of the specified characters.

This function returns the rest of the string from where it found the first occurrence of a specified character, otherwise it returns FALSE.

Syntax
strpbrk(string,charlist)



Parameter Values
Parameter	               Description
string	               Required. Specifies the string to search
charlist	           Required. Specifies the characters to find



Return Value:	Returns the string starting from the character found, otherwise it returns FALSE

 -->

 <?php
/*-------strstr -- case-sensitive------- */
$str = "Hello world. The world is nice";

$newstr = strstr($str, "world");

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = strstr($str, "world",true); //-- before_search

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = strstr($str, "WORLD"); //-- case-sensitive

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------stristr -- case-insensitive------- */
$newstr = stristr($str, "WORLD"). "<br>";

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------strchr -- same as strstr------- */
$newstr = strchr($str,"world");

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = strchr($str,"world",true); //true

echo "<pre>";
print_r($newstr);
echo "</pre>";


$newstr = strrchr($str,"world"); //reverse order

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------strpbrk - Search for specified characters------- */
$newstr = strpbrk($str, "wo"). "<br>";

echo "<pre>";
print_r($newstr);
echo "</pre>";
?>


