<!-- Strings
A string is a sequence of characters, like "Hello world!".
Strings in PHP are surrounded by either double quotation marks, or single quotation marks.

echo "Hello";
echo 'Hello';
-->
<!-- 
Double or Single Quotes?
You can use double or single quotes, but you should be aware of the differences between the two.

Double quoted strings perform action on special characters.

E.g. when there is a variable in the string, it returns the value of the variable:

 -->
 <?php
$a = "Hello" ;
$s = $a . " World ";

$a = 200;
$s = $a . " World " . 500;


$s = "Hello ";
$s .= " this is";
$s .= " our world";


$s .= 555;

echo $s;
?>