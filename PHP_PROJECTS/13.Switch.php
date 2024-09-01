<!-- 
    The PHP switch Statement
Use the switch statement to select one of many blocks of code to be executed.

Syntax
switch (expression) {
  case label1:
    //code block
    echo;
  case label2:
    //code block;
    echo;
  case label3:
    //code block
    echo;
  default:
    //code block
}

 -->
 <!--  
    This is how it works:

The expression is evaluated once
The value of the expression is compared with the values of each case
If there is a match, the associated block of code is executed
The echo keyword breaks out of the switch block
The default code block is executed if there is no match
 -->


<?php 
$value = 56;
switch ($value )  {
  case '1':
    # code...
    echo "Today is Monday";
    break;
  case '2':
    # code...
    echo "Today is Tuesday";
    break;
  case '3':
    # code...
    echo "Today is Wednesday";
    break;
  case '4':
    # code...
    echo "Today is Thursday";
    break;
  case '5':
    # code...
    echo "Today is Friday";
    break;
  case '6':
    # code...
    echo "Today is Saturday";
    break;
  case '7':
    # code...
    echo "Today is Sunday";
    break;
  default:
    # code...
    echo "Enter the correct weekday.Value should be between 1 and 7";
}




?>