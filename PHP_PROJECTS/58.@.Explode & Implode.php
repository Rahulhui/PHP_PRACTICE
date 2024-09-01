<!-- 
PHP implode() Function
The implode() function returns a string from the elements of an array.

Syntax
implode(separator,array)
Parameter Values
Parameter

Description

separator

Optional. Specifies what to put between the array elements. Default is "" (an empty string)

array

Required. The array to join to a string

 
Return Value:

Returns a string from elements of an array

 
PHP explode() Function
The explode() function breaks a string into an array.

Syntax
explode(separator,string,limit)
Parameter Values
Parameter

Description

separator

Required. Specifies where to break the string

string

Required. The string to split

limit

Optional. Specifies the number of array elements to return.

Possible values:

Greater than 0 - Returns an array with a maximum of limit element(s)

Less than 0 - Returns an array except for the last -limit elements()

0 - Returns an array with one element

 
Return Value:	Returns an array of strings


 -->

 <?php
/*-------Explode Function------- */

$str = "Hello world. Its a beautiful day";

$array = explode(" ",$str);

echo "<pre>";
print_r($array);
echo "</pre>";

/* ------ */

$array1 = explode(".",$str);

echo "<pre>";
print_r($array1);
echo "</pre>";

/*-------Using Limit with explode ------- */

$array2 = explode(" ",$str, 2);

echo "<pre>";
print_r($array2);
echo "</pre>";


$array3 = explode(" ",$str, 0); //-- Return in one Array Value

echo "<pre>";
print_r($array3);
echo "</pre>";

$array4 = explode(" ",$str, -1);

echo "<pre>";
print_r($array4);
echo "</pre>";

/*----------- Another example -----------*/

//EXAMPLE I

$str1 = "red,green,blue,orange";

$array5 = explode(",",$str1);

echo "<pre>";
print_r($array5);
echo "</pre>";

//EXAMPLE II

$str2 = "red,green-blue-orange";

$array6 = explode(",",$str2);

echo "<pre>";
print_r($array6);
echo "</pre>";

//EXAMPLE III

$array7 = explode("-",$str2);

echo "<pre>";
print_r($array7);
echo "</pre>";


/*-------Implode Function------- */


$arr = array("Hello","World!","Beautiful","Day!");

$strr = implode(" ",$arr);

echo $strr;
echo "<br><br>";

//EMAXPLE II

$strr1 = implode("-",$arr);

echo $strr1;
echo "<br><br>";

//EMAXPLE III

$strr2 = implode(",",$arr);

echo $strr2;
echo "<br><br>";

//EMAXPLE III

$strr3 = implode("wow",$arr);

echo $strr3;
echo "<br><br>";

//EMAXPLE III

$strr4 = implode("<br>",$arr);

echo $strr4;
echo "<br><br>";


//You can use (Join) function work same as Implode

$strr5 = join("<br>",$arr);

echo $strr5;
echo "<br><br>";

?>
