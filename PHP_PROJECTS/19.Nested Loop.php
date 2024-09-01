<!-- revise************************* -->
<!-- 
    Nested Loop in PHP
The nested loop is the method of using the for loop inside the another for loop. It first performs a single iteration for the parent for loop and executes all the iterations of the inner loop. After that, it again checks the parent iteration and again performs all the iteration of the inner loop. The same process continuously executed until the parent test condition is TRUE.
 -->
 <?php
 for ($col = 1; $col <= 100 ; $col = $col + 10) { 
  for ($row = $col; $row < $col +10 ; $row++) { 
    # code...echlo
    echo $row;
  }
 echo "<br>";
 }
 
 
 
 ?>
 <!-- we erite this code again -->