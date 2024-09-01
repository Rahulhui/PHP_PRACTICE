<!--  
1.PHP Constants
1.a- A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
1.b- A valid constant name starts with a letter or underscore (no $ sign before the constant name).

Note: Unlike variables, constants are automatically global across the entire script.

-->
<!-- 
 Syntax
define(name, value, case-insensitive);   
 -->
 <?php 
 define("test",50,true);
// define("test",50);   Constant test already defined in
 echo  test ;
//  echo  test ;
 
 
 ?>