<!-- 
PHP while Loop
The while loop executes a block of code as long as the specified condition is true.
-->
<!-- 
Example
Print $i as long as $i is less than 6:

$i = 1;
while ($i < 6) {
  echo $i;
  $i++;
}
The while loop does not run a specific number of times, but checks after each iteration if the condition is still true.

The condition does not have to be a counter, it could be the status of an operation or any condition that evaluates to either true or false.

 -->
 <?php 
 $tomato = 1 ; 
 while ($tomato <= 15) {
    echo $tomato."tomato"."<br>";
    $tomato++;
 }
 
 
 ?>