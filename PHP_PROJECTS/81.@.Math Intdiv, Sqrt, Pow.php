<!-- 
PHP intdiv() Function
The intdiv() function is used for integer division.

Syntax
intdiv(dividend, divisor);
Parameter Values
Parameter                       	Description
dividend	          Required. Specifies a number that will be divided
divisor          	Required. Specifies the number to divide the dividend by


Return Value:	The integer part of the division
PHP sqrt() Function
The sqrt() function returns the square root of a number.

Syntax
sqrt(number);
Parameter Values
Parameter

Description

number

Required. Specifies a number

Return Value:

The square root of number, or NAN for negative numbers

PHP pow() Function
The pow() function returns x raised to the power of y.

Syntax

pow(x,y);
Parameter Values

Parameter	                 Description
x	                 Required. Specifies the base to use
y	                   Required. Specifies the exponent
Return Value:	x raised to the power of y

 -->
 <?php
/*-------intdiv() -- Integer division------- */
echo intdiv(8, 4) . "<br>";
echo intdiv(5, 2) . "<br>";
echo intdiv(-5, -2) . "<br>". "<br>". "<br>";

/*-------sqrt() -- Square root------- */
echo(sqrt(9) . "<br>");
echo(sqrt(4) . "<br>");
echo(sqrt(0) . "<br>");
echo(sqrt(10) . "<br>");
echo(sqrt(5) . "<br>". "<br>". "<br>");

/*-------pow() -- Exponential expression------- */
echo(pow(2,4) . "<br>");
echo(pow(2,2) . "<br>");
echo(pow(-2,4) . "<br>");
echo(pow(-2,-4) . "<br>");

?>