
<!-- 
    PHP Assignment Operators
The PHP assignment operators are used with numeric values to write a value to a variable.

The basic assignment operator in PHP is "=". It means that the left operand gets set to the value of the assignment
 -->
 <!-- Assignment	Same as...	               Description
x = y	             x = y	                 The left operand gets set to the value of the expression on the right
x += y	            x = x + y	               Addition
x -= y	           x = x - y	             Subtraction
x *= y	             x = x * y	             Multiplication
x /= y	           x = x / y	            Division
x %= y	            x = x % y	            Modulus 
-->
<?php 
$a = 7 ;
$b = 8 ;

//echo $a =  $a + $b ."<br>";
// echo$a += $b ."<br>";
// echo$a -=  $b ."<br>";
// echo$a *=  $b ."<br>";
// echo$a /=  $b."<br>";
echo$a %=  $b ."<br>";
echo$a **=  $b ."<br>";





?>