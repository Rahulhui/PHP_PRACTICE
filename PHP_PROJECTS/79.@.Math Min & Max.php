<!--
 HP min() Function
The min() function returns the lowest value in an array, or the lowest value of several specified values.

Syntax

min(array_values);

      or

min(value1,value2,...);

Parameter Values
Parameter             Description

array_values                 Required. Specifies an array containing the values

value1,value2,...          Required. Specifies the values to compare (must be at least two values)

Return Value:

The numerically lowest value


PHP max() Function
The max() function returns the highest value in an array, or the highest value of several specified values.

Syntax
max(array_values);

      or

max(value1,value2,...);

Parameter Values

Parameter	                  Description
array_values	       Required. Specifies an array containing the values
value1,value2,...	  Required. Specifies the values to compare (must be at least two values)

Return Value:	The numerically highest value 

-->
<?php
/*-------Math:Max Function------- */
$val = max(22,14,68,18,15);
echo $val . "<br>";
 

/*-------Math:Min Function------- */
$val = min(22,14,68,18,15);
echo $val . "<br>";
 

/*-------Math:Max single Array Function------- */
$val = max(array(44,16,81,12));
echo $val . "<br>";


/*-------Math:Min single Array Function------- */
$val = min(array(44,16,81,12));
echo $val . "<br>";


/*-------Math:Max Multiple Array Function------- */
$val = max(array(2, 4, 8), array(2, 5, 1));

echo "<pre>";
print_r($val);
echo "</pre>";


/*-------Math:Min Multiple Array Function------- */
$val = min(array(2, 4, 8), array(2, 5, 1));

echo "<pre>";
print_r($val);
echo "</pre>";


/*-------Math:Max Boolean Value Function------- */
$val = max(TRUE,FALSE);
echo $val . "<br>";


$val = min(TRUE,FALSE);
echo $val . "<br>";


$val = max(TRUE,0);
echo $val . "<br>";


$val = min(TRUE,0);
echo $val . "<br>";

?>