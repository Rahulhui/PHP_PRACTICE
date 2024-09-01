<!-- 
strlen() Function
The strlen() function returns the length of a string.

Syntax
strlen(string)
Parameter Values
Parameter

Description

string

Required. Specifies the string to check

 
Return Value:

Returns the length of a string (in bytes) on success, and 0 if the string is empty

str_word_count() Function
The str_word_count() function counts the number of words in a string.

Syntax
str_word_count(string,return,char)
Parameter Values
Parameter

Description

string

Required. Specifies the string to check

return

Optional. Specifies the return value of the str_word_count() function.

Possible values:

0 - Default. Returns the number of words found

1 - Returns an array with the words from the string

2 - Returns an array where the key is the position of the word in the string, and value is the actual word

char

Optional. Specifies special characters to be considered as words.

Return Value:

Returns a number or an array, depending on the chosen return parameter

 
substr_count() Function
The substr_count() function counts the number of times a substring occurs in a string.

Syntax
substr_count(string,substring,start,length)
Parameter Values
Parameter

Description

string

Required. Specifies the string to check

substring

Required. Specifies the string to search for

start

Optional. Specifies where in string to start searching. If negative, it starts counting from the end of the string

length

Optional. Specifies the length of the search

 
Return Value:

Returns the  the number of times the substring occurs in the string

 -->

 <?php
 /*-------String Length Function------- */
$str = "Yahoo Baba";

$newStr = strlen($str);

echo "<pre>";
print_r($newStr);
echo "</pre>";

/* -------- II Example -------- */
$str = "Baba";

$newStr = strlen($str);

echo "<pre>";
print_r($newStr);
echo "</pre>";

/* -------- str_word_count -------- */
$newStr = str_word_count($str);

echo "<pre>";
print_r($newStr);
echo "</pre>";

/* -------- str_word_count --II Example-------- */
$str = "Yah oo Baba";

$newStr = str_word_count($str);

echo "<pre>";
print_r($newStr);
echo "</pre>";

/* --------Return Array-------- */
str_word_count($str,0);

str_word_count($str,1);

$array =  str_word_count($str,1);

echo "<pre>";
print_r($array);
echo "</pre>";

/* ---- Returns an array where the key is the position of the word in the string---- */
$array =  str_word_count($str,2);

echo "<pre>";
print_r($array);
echo "</pre>";

/*-------String Count Function------- */
$count = substr_count("Hello world. The world is nice","world");

echo "<pre>";
print_r($count);
echo "</pre>";

$count = substr_count("Hello world. The world is nice","world",10);

echo "<pre>";
print_r($count);
echo "</pre>";

$count = substr_count("Hello world. The world is nice","world",1,20);

echo "<pre>";
print_r($count);
echo "</pre>";

$count = substr_count("Hello world. The world is nice","world",1,5); 

echo "<pre>";
print_r($count);
echo "</pre>";


 ?>