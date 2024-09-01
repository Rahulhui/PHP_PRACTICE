<!-- 
    
PHP rand() Function
The rand() function generates a random integer.

Syntax
 rand();

  or
 
rand(min,max);

Parameter Values
Parameter                 	Description
min	          Optional. Specifies the lowest number to return. Default is 0
max	                 Optional. Specifies the highest number to return. Default is getrandmax()


Return Value:	A random integer between min (or 0) and max (or getrandmax() inclusive)
PHP mt_rand() Function
The mt_rand() function generates a random integer using the Mersenne Twister algorithm.

Syntax
 mt_rand();

    or

mt_rand(min,max);

Parameter Values
Parameter           Description

min        Optional. Specifies the lowest number to return. Default is 0

max      Optional. Specifies the highest number to return. Default is mt_getrandmax()

Return Value:

A random integer between min (or 0) and max (or mt_getrandmax() inclusive). Returns FALSE if max < min

PHP lcg_value() Function
The lcg_value() function returns a pseudo random number in a range between 0 and 1.

Syntax
lcg_value();
Return Value:

A pseudo random float value in a range between 0 and 1


-->
<?php
/*-----Random Number Functions------- */
echo(rand() . "<br>");
echo(rand() . "<br>");
echo(rand(0,10) . "<br>");
echo(rand(10,20) . "<br>");

/*-----mt_rand() -- Mersenne Twister algorithm------- */
echo(mt_rand() . "<br>");

echo(mt_rand(10,20). "<br>");

/*-----lcg_value() --- return float value------- */
echo (lcg_value(). "<br>");
?>