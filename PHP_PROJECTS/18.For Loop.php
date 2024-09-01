<!-- 
    PHP for Loop
The for loop is used when you know how many times the script should run.
 -->
 <!-- 
    Syntax
for (expression1, expression2, expression3) {
  // code block
}
  -->
  <!-- 
    This is how it works:

expression1 is evaluated once
expression2 is evaluated before each iterarion
expression3 is evaluated after each iterarion
   -->
   <?php 
  
  
  for ($i=0; $i < 10; $i++) { 
    echo "the number is-".$i."<br>" ;
   }
   
   ?>