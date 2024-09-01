<!-- PHP - The if...elseif...else Statement
The if...elseif...else statement executes different codes for more than two conditions.

-->
<!-- 
Syntax
if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  // code to be executed if first condition is false and this condition is true;
} else {
  // code to be executed if all conditions are false;
}

 -->
<?php
    $per = 16;

    if ($per >= 80 && $per <= 100) {
        echo "You are Above 80%";
    } else if ($per >= 60 && $per < 80) {
        echo "You are Above 60%";
    } else if ($per >= 40 && $per < 60) {
        echo "You are Above 40%";
    } else if ($per >= 25 && $per < 40) {
        echo "You are Above 25%";
    } else {
        echo "You are below 25% & you have failed.";
    }
?>
