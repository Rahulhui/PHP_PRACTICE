<!-- PHP Logical Operators 
The PHP logical operators are used to combine conditional statements.

-->
<!-- 
Operator	    Name	                Example            	                         Result
and      	    And                 	$x and $y	                         True if both $x and $y are true
or	            Or	                    $x or $y	                         True if either $x or $y is true
xor         	Xor             	    $x xor $y	                         True if either $x or $y is true, but not both
&&	            And	                    $x && $y	                         True if both $x and $y are true
||	            Or	                    $x || $y	                         True if either $x or $y is true
!	            Not	                    !$x	                                True if $x is not true

-->
<?php 
$age = 25 ;
/* Logical And Operator  1*/
if ($age >=18 && $age <=21 ) {
    echo "You are eligible && Operator.<br>";    
}

/* Logical And Operator  2*/
if ($age >=18 and $age <=21) {
    echo "You are eligible and Operator.<br>";    
}
/* Logical or Operator  1*/
if ($age >= 18 or $age <=21) {
    echo "You are eligible or Operator.<br>";    
}
//* Logical not Operator  1*/
$gender = "male";

if (!($gender == "male" )) {
   echo "gender is male";
} else {
    echo  "gender is female";
}

?>