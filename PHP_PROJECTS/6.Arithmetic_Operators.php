<!-- 
1.PHP Arithmetic Operators
  The PHP arithmetic operators are used with numeric values to perform common arithmetical operations, such as addition, subtraction, multiplication etc.

Operator	Name	                  Example	Result
+	       Addition	                $x + $y	Sum of $x and $y
-	       Subtraction	           $x - $y	Difference of $x and $y
*	       Multiplication	         $x * $y	Product of $x and $y
/	       Division	               $x / $y	Quotient of $x and $y
%	        Modulus	                $x % $y	Remainder of $x divided by $y
**	      Exponentiation	       $x ** $y	Result of raising $x to the $y'th power


 -->
 <?php 
 
 $x = 9 ;
 $y = 5 ;
 $Addition = $x + $y ;
 echo  $Addition . "<br>";
 $Subtraction	=  $x - $y  ;
 echo $Subtraction  . "<br>";
 $Multiplication = $x * $y ;
 echo  $Multiplication . "<br>";
 $Division	=    $x / $y ;
 echo  $Division . "<br>"	;
 $Modulus =  $x % $y ;
 echo " % result is ".$Modulus ."<br>" ;
 $Exponentiation	= $x ** $y  ;
 echo "Exponentiation ** result is-".$Exponentiation ."<br>" ; //9*9*9*9*9
// increament & decreament
//values
$a = 1 ;
$b = 2 ;
$c = 3 ;
///values

$a++ ;
++$a ;
echo $a."<br>" ;

$b-- ;

echo $b ."<br>";
 ?>