<?php
function FunctionName($name, $age)  {
    echo "My name is " .$name. "<br>";
    echo "My age is " .$age. "<br>";
}

$wow = "FunctionName";

$wow("John", 30);// Calling the function using the variable containing its name

// <!----Anonymous function--------------------  -->
$Anonymous = function ($REGION_name)  {

    echo $REGION_name . "<br>";
};

$Anonymous("Africa");
$Anonymous("india");
$Anonymous("austrea");
$Anonymous("vietnam");
$Anonymous("grecian");
$Anonymous("latin");


?>
