<!-- 
    
PHP strip_tags() Function
The strip_tags() function strips a string from HTML, XML, and PHP tags.

Syntax
strip_tags(string,allow)

Parameter Values
Parameter	              Description
string	              Required. Specifies the string to check
allow	             Optional. Specifies allowable tags. These tags will not be removed 


Return Value:	Returns the stripped string
PHP wordwrap() Function
The wordwrap() function wraps a string into new lines when it reaches a specific length.

Syntax
wordwrap(string,width,break,cut)

Parameter Values
Parameter             Description

string           Required. Specifies the string to break up into lines

width          Optional. Specifies the maximum line width. Default is 75

break        Optional. Specifies the characters to use as break. Default is "\n"

cut         Optional. Specifies whether words longer than the specified width should be wrapped:

            FALSE - Default. No-wrap

             TRUE - Wrap

 
Return Value:

Returns the string broken into lines on success, or FALSE on failure. 


-->
<?php
/*-------strip_tags Function------- */
$str = "Hello <b>World</b>, Hello <i>Earth</i>";

$newstr = strip_tags($str);

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------Remove tag------- */
$newstr = strip_tags($str,"<b>");

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------Wordwrap Function------- */
$str = "This world is beautiful.";

$newstr = wordwrap($str,5);

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = wordwrap($str,5,"<br>",TRUE);

echo "<pre>";
print_r($newstr);
echo "</pre>";

?>

