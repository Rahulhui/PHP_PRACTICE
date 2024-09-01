<!-- PHP Associative Arrays -->
<!-- Associative arrays are arrays that use named keys that you assign to them. 
----------------------------->


<!-- Example

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);
Access Associative Arrays
To access an array item you can refer to the key name.
 ----------------------------->

<!-- 
    Example

Display the model of the car:

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];
Change Value
To change the value of an array item, use the key name: 
----------------------------->


<!-- Example

Change the year item:

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
$car["year"] = 2024;
var_dump($car); 
----------------------------->
<?php
$age = array(
    "Rahul"=> 25,
    "Rachin"=> '26',
    "Rani"=> 95,
    "Rajesh"=> 85,

);
// for ($i="1"; $i <"5"; $i++) { 
    
//     echo $age."<br>";
// }
echo $age["Rahul"]."<br>";
echo $age["Rachin"]."<br>";
echo $age["Rani"]."<br>";
echo $age["Rajesh"]."<br>";
//change value
$age["Rani"] = 50 ; 




echo "<pre>";
print_r($age);
echo "</pre>";

?>