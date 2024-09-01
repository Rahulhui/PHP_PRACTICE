<!-- 
PHP extract() Function
The extract() function imports variables into the local symbol table from an array.

This function uses array keys as variable names and values as variable values. For each element it will create a variable in the current symbol table.

This function returns the number of variables extracted on success.

Syntax
extract(array, extract_rules, prefix)
Parameter Values
Parameter	Description
array	Required. Specifies the array to use
extract_rules	Optional. The extract() function checks for invalid variable names and collisions with existing variable names. This parameter specifies how invalid and colliding names are treated.
Possible values:

EXTR_OVERWRITE - Default. On collision, the existing variable is overwritten
EXTR_SKIP - On collision, the existing variable is not overwritten
EXTR_PREFIX_SAME - On collision, the variable name will be given a prefix
EXTR_PREFIX_ALL - All variable names will be given a prefix
EXTR_PREFIX_INVALID - Only invalid or numeric variable names will be given a prefix
EXTR_IF_EXISTS - Only overwrite existing variables in the current symbol table, otherwise do nothing
EXTR_PREFIX_IF_EXISTS - Only add prefix to variables if the same variable exists in the current symbol table
EXTR_REFS - Extracts variables as references. The imported variables are still referencing the values of the array parameter
prefix	Optional. If EXTR_PREFIX_SAME, EXTR_PREFIX_ALL, EXTR_PREFIX_INVALID or EXTR_PREFIX_IF_EXISTS are used in the extract_rules parameter, a specified prefix is required.

This parameter specifies the prefix. The prefix is automatically separated from the array key by an underscore character.
 
Return Value:	Returns  the number of variables extracted on success
PHP compact() Function
The compact() function creates an array from variables and their values.

Syntax
compact(var1, var2...)
Parameter Values
Parameter

Description

var1

Required. Can be a string with the variable name, or an array of variables

var2,...

Optional. Can be a string with the variable name, or an array of variables. Multiple parameters are allowed.

 
Return Value:

Returns an array with all the variables added to it



 -->
 <?php
/*-------Array Extract Function------- */

$a = "orange";

$color = array('a' => 'red', 'b' => 'green', 'c' => 'blue');

extract($color);

echo "Value of a : $a <br>";
echo "Value of b : $b <br>";
echo "Value of c : $c <br>";
echo '<br><br>';

/*-------Extract_rules------- */


//EXTR_OVERWRITE

extract($color,EXTR_OVERWRITE);

echo "Value of a : $a <br>";
echo "Value of b : $b <br>";
echo "Value of c : $c <br>";
echo '<br><br>';

//EXTR_SKIP

$a1 = "orange";
$color = array('a1' => 'red', 'b1' => 'green', 'c1' => 'blue');

extract($color,EXTR_SKIP);

echo "Value of a1 : $a1 <br>";
echo "Value of b1 : $b1 <br>";
echo "Value of c1 : $c1 <br>";
echo '<br><br>';

//EXTR_PREFIX_SAME  ;

extract($color,EXTR_PREFIX_SAME,"test");

echo "Value of a1 : $a1 <br>";
echo "Value of a1 : $test_a1 <br>";
echo "Value of b1 : $b1 <br>";
echo "Value of c1 : $c1 <br>";
echo '<br><br>';

//EXTR_PREFIX_ALL

extract($color,EXTR_PREFIX_ALL,"test");

echo "Value of a1 : $a1 <br>";
echo "Value of a1 : $test_a1 <br>";
echo "Value of b1 : $test_b1 <br>";
echo "Value of c1 : $test_c1 <br>";
echo '<br><br>';


/*-------Compact Function------- */


$firstname = "Yahoo";
$lastname = "Baba";
$age = "20";
$gender = "Male";
$country = "India";

$newArray = compact("firstname", "lastname", "age");

echo '<pre>';
print_r($newArray);
echo '</pre>';

/*-------Use extra array in compact function------- */

$extra = ["gender" , "country"];

$newArray1 = compact("firstname", "lastname", "age",$extra );

echo '<pre>';
print_r($newArray1);
echo '</pre>';

?>
