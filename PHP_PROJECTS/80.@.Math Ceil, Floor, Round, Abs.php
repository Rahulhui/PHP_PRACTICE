<!-- 
PHP floor() Function

The floor() function rounds a number DOWN to the nearest integer, if necessary, and returns the result.

Syntax
floor(number);

Parameter Values
Parameter	                         Description
number	                   Required. Specifies the number to round down


Return Value:	The value rounded down to the nearest integer
PHP ceil() Function
The ceil() function rounds a number UP to the nearest integer, if necessary.

Syntax
ceil(number);
Parameter Values
Parameter

Description

number

Required. Specifies the value to round up

Return Value:

The value rounded up to the nearest integer

PHP round() Function
The round() function rounds a floating-point number.

Syntax
round(number,precision,mode);

Parameter Values
Parameter	              Description
number	             Required. Specifies the value to round
precision	         Optional. Specifies the number of decimal digits to round to. Default is 0

mode	       

Optional. Specifies a constant to specify the rounding mode:

    PHP_ROUND_HALF_UP - Default. Rounds number up to precision decimal, when it is half way there. Rounds 1.5 to 2 and -1.5 to -2


    PHP_ROUND_HALF_DOWN - Round number down to precision decimal places, when it is half way there. Rounds 1.5 to 1 and -1.5 to -1

   PHP_ROUND_HALF_EVEN - Round number to precision decimal places towards the next even value

     PHP_ROUND_HALF_ODD - Round number to precision decimal places towards the next odd value
Return Value:	The rounded value
PHP abs() Function
The abs() function returns the absolute (positive) value of a number.

Syntax
abs(number);
Parameter Values
Parameter

Description

number

Required. Specifies a number. If the number is of type float, the return type is also float, otherwise it is integer

Return Value:

The absolute value of the number 



-->
<?php
/*-------Math:Ceil Function------- */
echo(ceil(0.60) . "<br>");
echo(ceil(0.40) . "<br>");
echo(ceil(5) . "<br>");
echo(ceil(5.1) . "<br>");
echo(ceil(-5.1) . "<br>");
echo(ceil(-5.9). "<br>". "<br>". "<br>");


/*-------Math:Floor Function------- */
echo(floor(0.60) . "<br>");
echo(floor(0.40) . "<br>");
echo(floor(5) . "<br>");
echo(floor(5.1) . "<br>");
echo(floor(-5.1) . "<br>");
echo(floor(-5.9). "<br>". "<br>". "<br>");

/*-------Math:Round Function------- */
echo(round(0.60) . "<br>");
echo(round(0.40) . "<br>");
echo(round(5) . "<br>");
echo(round(5.1) . "<br>");
echo(round(-5.1) . "<br>");
echo(round(-5.9) . "<br>". "<br>". "<br>");

/*-------Math:Abs Function------- */
echo(abs(0.60) . "<br>");
echo(abs(0.50) . "<br>");
echo(abs(5) . "<br>");
echo(abs(5.1) . "<br>");
echo(abs(-5.1) . "<br>");
echo(abs(-5.9). "<br>". "<br>");
?>

