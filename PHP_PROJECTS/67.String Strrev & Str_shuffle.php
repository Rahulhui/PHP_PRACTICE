<!-- 
  PHP strrev() Function
The strrev() function reverses a string.

Syntax
strrev(string)
Parameter Values
Parameter	Description
string	Required. Specifies the string to reverse 
Return Value:	Returns the reversed string
PHP str_shuffle() Function
The str_shuffle() function randomly shuffles all the characters of a string.

Syntax
str_shuffle(string)
Parameter Values
Parameter	Description
string	Required. Specifies the string to shuffle 
Return Value:	Returns the shuffled string  
 -->
 <?php
/*-------String Reverse Function------- */
$newstr =  strrev("Yahoo Baba");

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------String Shuffle Function------- */
$newstr =  str_shuffle("Yahoo Baba");

echo "<pre>";
print_r($newstr);
echo "</pre>";
?>
