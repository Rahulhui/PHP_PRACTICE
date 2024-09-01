<!-- 
PHP Functions
The real power of PHP comes from its functions.

PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.    
 -------------------------->

 <!-- PHP Built-in Functions
PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task. 
---------------------------->

<!-- PHP User Defined Functions
Besides the built-in PHP functions, it is possible to create your own functions. 
---------------------------->
<!-- 
A function is a block of statements that can be used repeatedly in a program.
A function will not execute automatically when a page loads.
A function will be executed by a call to the function.
Create a Function
A user-defined function declaration starts with the keyword function, followed by the name of the function: 
---------------------------->

<!-- Example

function myMessage() {
  echo "Hello world!";
}
Call a Function
To call the function, just write its name followed by parentheses ():

Example

function myMessage() {
  echo "Hello world!";
}

myMessage(); 
---------------------------->
<?php
$con = "condition";
$str = "string";

function FunctionN() {
    global $con, $str;
    if ($con === $str ) {
        # code...
        echo "its matched";
    }
    else{
        echo "doesnot match the value";
    }
        
   

}
FunctionN()

?>