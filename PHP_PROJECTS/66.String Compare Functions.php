<!-- 
PHP strcmp() Function  
The strcmp() function compares two strings.

Syntax
strcmp(string1,string2)

Parameter Values
Parameter	                   Description
string1	                 Required. Specifies the first string to compare
string2	                 Required. Specifies the second string to compare 


Return Value:	This function returns:
0 - if the two strings are equal
<0 - if string1 is less than string2
>0 - if string1 is greater than string2

 
PHP substr_compare() Function
The substr_compare() function compares two strings from a specified start position.

Syntax
substr_compare(string1,string2,startpos,length,case)


Parameter Values
Parameter	                    Description
string1          	Required. Specifies the first string to compare
string2	            Required. Specifies the second string to compare
startpos	       Required. Specifies where to start comparing in string1. If negative, it starts counting from the end of the string
length	            Optional. Specifies how much of string1 to compare
case	           Optional. A boolean value that specifies whether or not to perform a case-sensitive compare:
FALSE - Default. Case-sensitive
TRUE - Case-insensitive



Return Value:	This function returns:
0 - if the two strings are equal
<0 - if string1 (from startpos) is less than string2
>0 - if string1 (from startpos) is greater than string2

If length is equal or greater than length of string1, this function returns FALSE.

 -->

 <?php
/*-------String:Compare Function------- */
$newstr = strcmp("Hello world!","Hello world!");

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr =  strcmp("Hello world!","Hello");

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr =  strcmp("Hello world!","Hello world! Hello!");

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------strncmp --- Same as strcmp except IIIrd param - length------- */
$newstr = strncmp("Hello world!","Hello world!", 6);

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = strncmp("Hello world!","Hello World!", 6);

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------strcasecmp --- Case-insenstive------- */
$newstr = strcasecmp("Hello world!","Hello WORLD!");

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = strcasecmp("Hello world!","HELLO");

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------strncasecmp --- Case-insenstive -- Same as strcasecmp except IIIrd param - length------- */
$newstr = strncasecmp("Hello world!","HELLO world!", 6);

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------strnatcmp  --- Natural Algorithm use for comparision------- */
$newstr = strnatcmp("2Hello world!","10Hello world!");

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------strnatcasecmp --- Case-insenstive------- */
$newstr = strnatcasecmp("2Hello world!","10Hello WORLD!");

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------substr_compare ------- */
$newstr = substr_compare("Hello world","world",6);

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = substr_compare("Hello world","world",0, 3);

echo "<pre>";
print_r($newstr);
echo "</pre>";
 
$newstr = substr_compare("Hello world","world",-2,2);

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = substr_compare("Hello world","Hello WORLD",-2,2, TRUE);

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------similar_text ------- */

$newstr = similar_text("Hello World","Hello YahooBaba");

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = "Similarity : " . similar_text("bafoobar", "barfoo", $perc);

echo "<pre>";
print_r($newstr);
echo "</pre>"; 

$newstr = "<br>Percentage : $perc %";

echo "<pre>";
print_r($newstr);
echo "</pre>";
?>