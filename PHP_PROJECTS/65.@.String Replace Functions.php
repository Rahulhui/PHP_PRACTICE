<!-- 
    PHP str_replace() Function
The str_replace() function replaces some characters with some other characters in a string.

This function works by the following rules:

If the string to be searched is an array, it returns an array

If the string to be searched is an array, find and replace is performed with every array element


If both find and replace are arrays, and replace has fewer elements than find, an empty string will be used as replace

If find is an array and replace is a string, the replace string will be used for every find value

Syntax
str_replace(find,replace,string,count)

Parameter Values
Parameter	             Description
find	             Required. Specifies the value to find
replace	            Required. Specifies the value to replace the value in find
string	            Required. Specifies the string to be searched
count	          Optional. A variable that counts the number of replacements
Return Value:	Returns a string or an array with the replaced values
PHP substr_replace() Function
The substr_replace() function replaces a part of a string with another string.

Syntax

substr_replace(string,replacement,start,length)

Parameter Values

Parameter	                Description
string              	Required. Specifies the string to check
replacement	            Required. Specifies the string to insert
start	              Required. Specifies where to start replacing in the string
A positive number - Start replacing at the specified position in the string
Negative number - Start replacing at the specified position from the end of the string
0 - Start replacing at the first character in the string

length            	Optional. Specifies how many characters should be replaced. Default is the same length as the string.
A positive number - The length of string to be replaced
A negative number - How many characters should be left at end of string after replacing
0 - Insert instead of replace 

Return Value:	Returns the replaced string. If the string is an array then the array is returned
 -->
 <?php
/*-------String:Replace Function------- */
$str = "Hello world. The world is nice";

$newstr = str_replace("world","earth",$str);

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = str_replace("world","",$str);

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*------- Find Array------- */
$find = ["Hello", "world"];
$replace = ["Hi", "earth"];

$newstr = str_replace($find,$replace,$str);

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------Replace in array ------- */
$color = ["blue","red","green","yellow"];

echo "<pre>";
print_r(str_replace("red","pink",$color));
echo "</pre>";

/*-------str_ireplace------- */
$newstr = str_replace("WORLD","earth",$str);

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------substr_replace ------- */
$str = "Hello world. The world is nice";

$newstr = substr_replace($str, "earth", 6);

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr =  substr_replace($str, "earth", 6 , 10);

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr =  substr_replace($str, "earth", 6 , -5);

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = substr_replace($str, "earth", 0 , 0); //--- add in starting

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------strtr ------- */
$str = "Hello world. The world is nice";

$newstr = strtr($str,"eo","ia");

echo "<pre>";
print_r($newstr);
echo "</pre>";


/*-------Multiple Replace Array------- */
$array = array("Hello" => "Hi", "world" => "earth");

$newstr = strtr($str,$array);

echo "<pre>";
print_r($newstr);
echo "</pre>";
?>