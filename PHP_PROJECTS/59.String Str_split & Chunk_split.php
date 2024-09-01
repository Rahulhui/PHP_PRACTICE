<!-- 
    Str_split() Function
The str_split() function splits a string into an array.

Syntax
str_split(string,length)
Parameter Values
Parameter

Description

string

Required. Specifies the string to split

length

Optional. Specifies the length of each array element. Default is 1

 
Return Value:

If length is less than 1, the str_split() function will return FALSE.  If length is larger than the length of string, the entire string will be returned as the only element of the array.

 
chunk_split()
The chunk_split() function splits a string into a series of smaller parts.

Syntax
chunk_split(string,length,end)
Parameter Values
Parameter

Description

string

Required. Specifies the string to split

length

Optional. A number that defines the length of the chunks. Default is 76

end

Optional. A string that defines what to place at the end of each chunk. Default is \r\n

Return Value:

Returns the split string
 -->

 <?php
/*-------String Split Function------- */
$str = "Yahoo Baba";

$array = str_split($str);

echo "<pre>";
print_r($array);
echo "</pre>";

/*-------String Split Length------- */

$array2 = str_split($str, 3);

echo "<pre>";
print_r($array2);
echo "</pre>";


/*-------String Chunk Function------- */


$newStr = chunk_split($str,1,".");
echo $newStr."<br><br>";

$newStr = chunk_split($str,3,"-");
echo $newStr."<br><br>";

$newStr = chunk_split($str,3,"<br>");
echo $newStr."<br><br>";
?>
