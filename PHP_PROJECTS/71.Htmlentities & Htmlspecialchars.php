<!-- PHP Htmlentities
The htmlentities() function converts characters to HTML entities.

Syntax
htmlentities(string,flags,character-set,double_encode)

Parameter Values
Parameter	                   Description
string                     	Required. Specifies the string to convert
flags                      	Optional. Specifies how to handle quotes, invalid encoding and the used document type.

The available quote styles are:

ENT_COMPAT - Default. Encodes only double quotes
ENT_QUOTES - Encodes double and single quotes
ENT_NOQUOTES - Does not encode any quotes
Invalid encoding:

ENT_IGNORE - Ignores invalid encoding instead of having the function return an empty string. Should be avoided, as it may have security implications.

ENT_SUBSTITUTE - Replaces invalid encoding for a specified character set with a Unicode Replacement Character U+FFFD (UTF-8) or &#FFFD; instead of returning an empty string.

ENT_DISALLOWED - Replaces code points that are invalid in the specified doctype with a Unicode Replacement Character U+FFFD (UTF-8) or &#FFFD;
Additional flags for specifying the used doctype:

ENT_HTML401 - Default. Handle code as HTML 4.01
ENT_HTML5 - Handle code as HTML 5
ENT_XML1 - Handle code as XML 1
ENT_XHTML - Handle code as XHTML
character-set	Optional. A string that specifies which character-set to use.
Allowed values are:

UTF-8 - Default. ASCII compatible multi-byte 8-bit Unicode
ISO-8859-1 - Western European
ISO-8859-15 - Western European (adds the Euro sign + French and Finnish letters missing in ISO-8859-1)
cp866 - DOS-specific Cyrillic charset
cp1251 - Windows-specific Cyrillic charset
cp1252 - Windows specific charset for Western European
KOI8-R - Russian
BIG5 - Traditional Chinese, mainly used in Taiwan
GB2312 - Simplified Chinese, national standard character set
BIG5-HKSCS - Big5 with Hong Kong extensions
Shift_JIS - Japanese
EUC-JP - Japanese
MacRoman - Character-set that was used by Mac OS
Note: Unrecognized character-sets will be ignored and replaced by ISO-8859-1 in versions prior to PHP 5.4. As of PHP 5.4, it will be ignored an replaced by UTF-8.

double_encode	Optional. A boolean value that specifies whether to encode existing html entities or not.
TRUE - Default. Will convert everything
FALSE - Will not encode existing html entities
Return Value:	Returns the converted string. However, if the string parameter contains invalid encoding, it will return an empty string, unless either the ENT_IGNORE or ENT_SUBSTITUTE flags are set
PHP htmlspecialchars() Function
The htmlspecialchars() function converts some predefined characters to HTML entities.

The predefined characters are:

& (ampersand) becomes &amp;
" (double quote) becomes &quot;
' (single quote) becomes &#039;
< (less than) becomes &lt;
> (greater than) becomes &gt;
 

Syntax
htmlspecialchars(string,flags,character-set,double_encode)

Parameter Values
Parameter	             Description
string                  	Required. Specifies the string to convert
flags                   	Optional. Specifies how to handle quotes, invalid encoding and the used document type.

The available quote styles are:

ENT_COMPAT - Default. Encodes only double quotes
ENT_QUOTES - Encodes double and single quotes
ENT_NOQUOTES - Does not encode any quotes
Invalid encoding:

ENT_IGNORE - Ignores invalid encoding instead of having the function return an empty string. Should be avoided, as it may have security implications.
ENT_SUBSTITUTE - Replaces invalid encoding for a specified character set with a Unicode Replacement Character U+FFFD (UTF-8) or &#FFFD; instead of returning an empty string.
ENT_DISALLOWED - Replaces code points that are invalid in the specified doctype with a Unicode Replacement Character U+FFFD (UTF-8) or &#FFFD;
Additional flags for specifying the used doctype:

ENT_HTML401 - Default. Handle code as HTML 4.01
ENT_HTML5 - Handle code as HTML 5
ENT_XML1 - Handle code as XML 1
ENT_XHTML - Handle code as XHTML
character-set	Optional. A string that specifies which character-set to use.
Allowed values are:

UTF-8 - Default. ASCII compatible multi-byte 8-bit Unicode
ISO-8859-1 - Western European
ISO-8859-15 - Western European (adds the Euro sign + French and Finnish letters missing in ISO-8859-1)
cp866 - DOS-specific Cyrillic charset
cp1251 - Windows-specific Cyrillic charset
cp1252 - Windows specific charset for Western European
KOI8-R - Russian
BIG5 - Traditional Chinese, mainly used in Taiwan
GB2312 - Simplified Chinese, national standard character set
BIG5-HKSCS - Big5 with Hong Kong extensions
Shift_JIS - Japanese
EUC-JP - Japanese
MacRoman - Character-set that was used by Mac OS
 

Return Value:	Returns the converted string

If the string contains invalid encoding, it will return an empty string, unless either the ENT_IGNORE or ENT_SUBSTITUTE flags are set -->

<?php
/*-------String Htmllentities Function------- */
$str = "A 'quote' is <b>bold</b>";

$newstr = $str;

echo "<pre>";
print_r($newstr);
echo "</pre>";


$newstr = htmlentities($str);

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------  ------- */
$str = '<a href="https://www.yahoobaba.net">Yahoo Baba Website</a>';

echo "<pre>";
print_r($str);
echo "</pre>";

$str = "I love 'PHP'.";

echo "<pre>";
print_r($str);
echo "</pre>";

                       // ENT_COMPAT
$newstr = htmlentities($str, ENT_QUOTES); //--- Does not encode single quotes

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = htmlentities($str, ENT_NOQUOTES);  //----- Does not encode any quotes

echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------htmlspecialchars ----$------- */
$newstr = htmlspecialchars($str, ENT_NOQUOTES);  //----- Does not encode any quotes

echo "<pre>";
print_r($newstr);
echo "</pre>";


/*-------html_entity_decode ------- */
$htmlent = htmlentities($str);
$newstr = $htmlent;

echo "<pre>";
print_r($newstr);
echo "</pre>";


$newstr = html_entity_decode($htmlent);

echo "<pre>";
print_r($newstr);
echo "</pre>";


//htmlspecialchars_decode ----$


/*-------get_html_translation_table------- */
echo "<pre>";
print_r (get_html_translation_table(HTML_SPECIALCHARS));
echo "</pre>";

echo "<pre>";
print_r (get_html_translation_table(HTML_ENTITIES));
echo "</pre>";

?>

