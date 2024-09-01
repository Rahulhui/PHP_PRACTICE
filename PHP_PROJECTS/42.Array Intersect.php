<!-- PHP Array Intersect
The array_intersect() function compares the values of two (or more) arrays, and returns the matches.

This function compares the values of two or more arrays, and return an array that contains the entries from array1 that are present in array2, array3, etc.

Syntax
array_intersect(array1, array2, array3, ...)
Parameter Values
Parameter	Description
array1	Required. The array to compare from
array2	Required. An array to compare against
array3,...	Optional. More arrays to compare against 
 -->
 <?php
/* -----------array_intersect-------------- */
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

$a2=array("a"=>"red","f"=>"green","d"=>"purple");

// $newArray = array_intersect($a1,$a2);

// echo "<pre>";
// print_r($newArray);
// echo "</pre>";
//show change case

/* ----------Multiple Array intersect------------- */
// $a3=array("a"=>"red","b"=>"black","h"=>"yellow");

// $newArray11 = array_intersect($a1,$a2,$a3);

// echo "<pre>";
// print_r($newArray11);
// echo "</pre>";
/* ----------- Match only Key-------------*/
// $newArray1 = array_intersect_key($a1,$a2);

// echo "<pre>";
// print_r($newArray1);
// echo "</pre>";
/* ---------Match Key and Value both---------- */
// $newArray2 = array_intersect_assoc($a1,$a2);

// echo "<pre>";
// print_r($newArray2);
// echo "</pre>";
/* ---------Match Key and Value both with callback function----------- */

function compare($a,$b){
    if ($a===$b){
      return 0;
    }
    return ($a > $b)?1:-1;
  }
  
  function compareValue($a,$b){
    if ($a===$b){
      return 0;
    }
    return ($a > $b)?1:-1;
  }
  
  $newArray3 = array_intersect_uassoc($a1,$a2, "compare"); 
  
  echo "<pre>";
  print_r($newArray3);
  echo "</pre>";
  
  $newArray4 = array_uintersect_assoc($a1,$a2, "compare");  //this function can write also like this -- Important
  
  echo "<pre>";
  print_r($newArray4);
  echo "</pre>";
  
  
  /* ----------Match only key with function------------ */
  $newArray5 = array_intersect_ukey($a1,$a2, "compare");
  
  echo "<pre>";
  print_r($newArray5);
  echo "</pre>";
  
  
  /* --------Match only value with function----------- */
  $newArray6 = array_uintersect($a1,$a2, "compare");
  
  echo "<pre>";
  print_r($newArray6);
  echo "</pre>";
  
  
  /* --------Match both value and key with two different functions----------- */
   
  $newArray7=array_uintersect_uassoc($a1,$a2,"compare","compareValue");
  
  echo "<pre>";
  print_r($newArray7);
  echo "</pre>";
  
  ?>
  
 
