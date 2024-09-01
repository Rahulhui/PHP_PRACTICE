<!-- Loop Through an Associative Array -->
<!-- To loop through and print all the values of an associative array, you can use a foreach loop, like this: 
------------------------------>

<!--
     Example

Display all array items, keys and values:

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
} 
------------------------------>
<!-- Loop Through an Indexed Array -->
<!-- 
    To loop through and print all the values of an indexed array, you can use a foreach loop, like this:

Example

Display all array items:

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
  echo "$x <br>";
}
 ------------------------------>
 <?php
 //1//
 $city = [
"kolkata"
,'chennai'
,'mumbai'
,'hydrabad'
 ];
 foreach ($city as $value) {
    # code...
    echo $value .'<br>';
 }
 /// 2 //Associative
 $year = [
  "india" => 1947 ,
  "uk" =>2003,
  "usa" => 2004,
  'pakistan' =>1948  

 ];

foreach ($year as $key => $value) {
    # code...
    echo $key ." = >".$value .'<br>';
}


 
 ?>