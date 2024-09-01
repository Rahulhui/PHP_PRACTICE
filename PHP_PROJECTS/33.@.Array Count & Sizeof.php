<!-- PHP count() Function
Return the number of elements in an array:

example :- 

$cars=array("Volvo","BMW","Toyota");
echo count($cars);
?> 
--------------------------------->

<!-- Syntax
count(array, mode)
 --------------------------------->
 <!-- Parameter Values
Parameter

Description

array

Required. Specifies the array

mode

Optional. Specifies the mode. Possible values:

0 - Default. Does not count all elements of multidimensional arrays

1 - Counts the array recursively (counts all the elements of multidimensional arrays) 
--------------------------------->
<!-- PHP sizeof() Function
Return the number of elements in an array:

example :- 

$cars=array("Volvo","BMW","Toyota");
echo sizeof($cars);
?>
Syntax
sizeof(array, mode)
--------------------------------->
<!-- Parameter Values
Parameter

Description

array

Required. Specifies the array

mode

Optional. Specifies the mode. Possible values:

0 - Default. Does not count all elements of multidimensional arrays

1 - Counts the array recursively (counts all the elements of multidimensional arrays)
 --------------------------------->

 <?php 
//1
$Building = [
    "Eiffel Tower - Paris, France",
    "Empire State Building - New York City, USA",
    "Burj Khalifa - Dubai, UAE",
    "Taj Mahal - Agra, India",
    "Sydney Opera House - Sydney, Australia",
    "Great Wall of China - China",
    "Colosseum - Rome, Italy",
    "Machu Picchu - Peru",
    "Sagrada Família - Barcelona, Spain",
    "Petronas Twin Towers - Kuala Lumpur, Malaysia"
];
//
echo "1.count(Building,1):-".count($Building,1)."<br>";
 echo '2.count($Building):-'.count($Building)."<br>";

echo "3.sizeof(Building) :-".sizeof($Building)."<br>";
//2 // Associative Array city
$location = [
    'City' => ['Paris','New York City','Dubai','Agra','Sydney'],
    'Country' => ['India','USA','UAE','China','Italy']
];
// 3/* (Mode counts all the elements of multidimensional arrays) */

echo "4.sizeof(location,1):-".sizeof($location,1).'<br>';
echo "5.count-location:- ".count($location['City'],1).'<br>';
echo  "6.sizeof(location['City'],1):-".sizeof($location['City'],1).'<br>';

//4// using loop print values
$lenghth = count($Building) ;

for($i= 0; $i < $lenghth;$i++ ){
echo $Building [$i].'<br>';

}

//
// echo array_count_values($location);
echo"<pre>";
print_r( array_count_values($Building));
echo "</pre>";







?>
