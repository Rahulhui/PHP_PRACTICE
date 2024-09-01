<!-- //PHP Continue & Break -->

<!-- Continue in For Loops
The continue statement stops the current iteration in the for loop and continue with the next.

Example

Move to next iteration if $x = 4:

for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
} -->

<!-- --------------------------------------------------
    Break in While Loop
The break statement can be used to jump out of a while loop.

 Example

$x = 0;

while($x < 10) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
}
 -->
 <?php
 for ($i=0; $i < 10; $i++) { 
    # code...if
    if ($i == 4 ) {
        # code...
        echo "no-".$i."<br>";
        continue;
        
    }
    echo "the no is-".$i."<br>" ;
    
 }
 ?>
 <?php
 for ($i=0; $i < 10; $i++) { 
    # code...if
    if ($i == 4 ) {
        # code...
        echo "no-".$i."<br>";
       break;
        
    }
    echo "BREAK STRART ";
    echo "the no is-".$i."<br>" ;
 }
 ?>