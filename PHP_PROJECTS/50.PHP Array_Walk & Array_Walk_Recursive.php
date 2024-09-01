<!-- PHP Array_Walk()
The array_walk() function runs each array element in a user-defined function. The array's keys and values are parameters in the function.

Syntax
array_walk(array, myfunction, parameter...)
Parameter Values
Parameter

Description

array

Required. Specifying an array

myfunction

Required. The name of the user-defined function

parameter,...

Optional. Specifies a parameter to the user-defined function. You can assign one parameter to the function, or as many as you like

Return Value:

Returns TRUE on success or FALSE on failure

 
PHP array_walk_recursive() Function
The array_walk_recursive() function runs each array element in a user-defined function. The array's keys and values are parameters in the function. The difference between this function and the array_walk() function is that with this function you can work with deeper arrays (an array inside an array).

Syntax
array_walk_recursive(array, myfunction, parameter...)
Parameter Values
Parameter	Description
array	     Required. Specifying an array
myfunction	   Required. The name of the user-defined function
parameter,...	   Optional. Specifies a parameter to the user-defined function. You can assign one parameter to the function, or as many as you like.
Return Value:	Returns TRUE on success or FALSE on failure 


-->
<?php
/* -------Array Walk-------*/
$fruits = array(
            "a" => "Lemon",
            "b" => "Orange",
            "c" => "Banana",
            "d" => "Apple"
          );

array_walk($fruits, "myFunction");

function myFunction($value, $key){
  echo "$key : $value <br><br>";
}
/* -------Third parameter as a value -------*/

array_walk($fruits, "myFunction1", "is a key of");

function myFunction1($value, $key , $param){
  echo "$key $param $value. <br>";
}
echo '<br><br>';
/* -------array_walk_recursive-------*/

$veggie = array( "1" => "Carrot", "2" => "Tomatoes");

$fruits1 = array(
            $veggie,
            "a" => "Lemon",
            "b" => "Orange",
            "c" => "Banana",
            "d" => "Apple"
          );

array_walk_recursive($fruits1, "myFunction1", "is a key of");

?>



