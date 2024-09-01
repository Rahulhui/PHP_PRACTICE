<!-- PHP Multidimensional Arrays -->
<!-- A multidimensional array is an array containing one or more arrays. ------------------------------->

<!-- PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.

The dimension of an array indicates the number of indices you need to select an element. 
------------------------------->

<!-- For a two-dimensional array you need two indices to select an element
For a three-dimensional array you need three indices to select an element
PHP - Two-dimensional Arrays
A two-dimensional array is an array of arrays (a three-dimensional array is an array of arrays of arrays.
------------------------------->
<?php
$emp  = [
    ["1", "John", "Smith", "Marketing", "Manager"],
    ["2", "Emily", "Johnson", "HR", "Assistant"],
    ["3", "Michael", "Williams", "Finance", "Accountant"],
    ["4", "Sarah", "Brown", "IT", "Developer"],
    ["5", "David", "Jones", "Operations", "Supervisor"]
];

//1
echo $emp [0][0]."<br>";
echo $emp [1][4]."<br>";
echo $emp [2][1]."<br>";
echo $emp [3][3]."<br>";
echo $emp [4][4]."<br>";
//
echo $emp [3][0]."<br>";
echo $emp [3][4]."<br>";
echo $emp [3][1]."<br>";
echo $emp [3][3]."<br>";
echo $emp [3][4]."<br>";

//2
echo"<pre>";
print_r($emp);
echo"</pre>" ;

for ($row=0; $row < 4 ; $row++) { 
    # code...
    for ($col=0; $col < 4 ; $col++) { 
        # code...
        echo "<pre>";
        echo $emp[$row][$col];
        echo "</pre>"."<br>";
    }

}
/* Multidimensional Array Foreach Loop */
foreach ($emp as $key => $value) {
    # code...
    foreach ($value as $key => $value) {
        # code...
        echo $value ."<br>";
    }


}

/* Print with Table tag */
echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
echo "<tr>
        <th>Emp Id</th>
        <th>Emp Name</th>
        <th>name</th>
        <th>roll</th>
    </tr>";
    foreach ($emp as $v1){
        echo "<tr>";
    foreach ($v1 as $v2){
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}
echo "</table>";



?>






