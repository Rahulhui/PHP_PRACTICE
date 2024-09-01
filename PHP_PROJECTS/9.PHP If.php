<!-- 

PHP Conditional Statements

Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.

**In PHP we have the following conditional statements:

A.-if statement - executes some code if one condition is true
B.-if...else statement - executes some code if a condition is true and another code if that condition is false
c.- if...elseif...else statement - executes different codes for more than two conditions
D.- switch statement - selects one of many blocks of code to be executed
 -->
 
 <!-- 
PHP - The if Statement
The if statement executes some code if one condition is true.

  -->
  <!-- if (condition) {
  code to be executed if condition is true;
} -->

<?php 
$a = 10 ;
$b = 10 ;

if ($a === $b) {
    echo "condition is working";
}





?>