<!--PHP Recursive Function  -->
<!-- PHP also supports recursive function call like C/C++. In such case, we call current function within function. It is also known as recursion. -->
<!-- 
    It is recommended to avoid recursive function call over 200 recursion level because it may smash the stack and may cause the termination of script.
 -->
 <!-- *-----Recursive Function------ */
function display($number) {
    if($number<=5){
     echo "$number <br/>";
     display($number+1);
    }
}
    
display(1); -->
 
    <?php
 function fatorial($n)  {
    if ($n < 0 ) {
        # code...
        return -1 ;
    }
    elseif  ($n == 0) {
        # code...
      return 1;
    } else {
        # code...
        return ($n * fatorial($n-1));///this line

    }
    
    
 }
 echo fatorial(4);
 

 
 ?>