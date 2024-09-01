<!--
 PHP md5() Function
The md5() function calculates the MD5 hash of a string.
Syntax
md5(string,raw)

Parameter Values

Parameter                   	Description
string	            Required. The string to be calculated
raw              	Optional. Specifies hex or binary output format:
                    TRUE - Raw 16 character binary format
                     FALSE - Default. 32 character hex number
 

Return Value:	Returns the calculated MD5 hash on success, or FALSE on failure

PHP sha1() Function
The sha1() function calculates the SHA-1 hash of a string.
Syntax

sha1(string,raw)
Parameter Values

Parameter	                    Description
string                  	Required. The string to be calculated
raw	                     Optional. Specify hex or binary output format:
                         TRUE - Raw 20 character binary format
                        FALSE - Default. 40 character hex number
 
Return Value:	Returns the calculated SHA-1 hash on success, or FALSE on failure 

-->

<?php
/*-------Md5 Function------- */
$str = "Hello";

$newstr = "The string: ".$str;

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = "md5 Binary : ".md5($str, TRUE); //-- 16 char

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = "md5 HEX : ".md5($str); //-- 32 char

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------sha1 Function------- */
$newstr = "sha1 Binary : ".sha1($str, TRUE); //-- 20 char

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = "sha1 Binary : ".sha1($str);  //-- 40 char

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*------- If Condition Md5 Function Example------- */
if (md5($str) == "8b1a9953c4611296a827abf8c47804d7")
  {
  echo "Hello world!";
  exit;
  }

?>

