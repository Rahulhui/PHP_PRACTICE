<!-- Array In_array
The in_array() function searches an array for a specific value. 

Syntax
in_array(search, array, type)
Parameter Values
Parameter	Description
search	Required. Specifies the what to search for
array	Required. Specifies the array to search
type	Optional. If this parameter is set to TRUE, the in_array() function searches for the search-string and specific type in the array.
Return Value:	Returns TRUE if the value is found in the array, or FALSE otherwie
----------------------------->
<!-- 
    array_search()
The array_search() function search an array for a value and returns the key.

Syntax
array_search(value, array, strict)
Parameter Values
Parameter	Description
value	Required. Specifies the value to search for
array	Required. Specifies the array to search in
strict	Optional. If this parameter is set to TRUE, then this function will search for identical elements in the array. Possible values:
true
false - Default
When set to true, the number 5 is not the same as the string 5 (See example 2)
Return Value:	Returns the key of a value if it is found in the array, and FALSE otherwise. If the value is found in the array more than once, the first matching key is returned.
 ----------------------------->
 <?php 
 
 $Building = [
    "Eiffel Tower",
    "Empire State Building",
    "Burj Khalifa",
     100,
    "Taj Mahal",
    "Sydney Opera House",];

    echo in_array("Taj Mahal",$Building)."<br>";
 
function Buildings($Building) {
  if (in_array(100, $Building,true)) {
    echo "Find Sucessfully  ";
  } else {
   echo "can'nt Find";
  }
  
}
echo Buildings($Building);


/* --------Multipledimensional Associative Array------------- */
$a = array(array('p', 'h'), array('p', 'r'), 'o');

if (in_array(array('p', 'h'), $a)){
    echo "find <br>";
}
else {
    echo "can'nt Find <br>";
}
/* -----------Associative Array-------------- */
$food = array('a' => 'orange', 'b' => 'banana', 'c' => 'apple', 'd' => 'grapes');

echo array_search("apple", $food).'<br>';

echo in_array("apple", $food).'<br>';
 
 
 ?>