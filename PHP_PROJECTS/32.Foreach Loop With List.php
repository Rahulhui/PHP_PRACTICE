<?php
//1
$employee_data = [
    ["ID", "First Name", "Last Name", "Department", "Position"],
    ["1", "Alice", "Smith", "Marketing", "Manager"],
    ["2", "Bob", "Johnson", "HR", "Assistant"],
    ["3", "Charlie", "Williams", "Finance", "Accountant"],
    ["4", "Diana", "Brown", "IT", "Developer"],
    ["5", "Eva", "Jones", "Operations", "Supervisor"]
];
echo "<table border = '1px' cellpaddin = '5px' cellspacing = '0px'  >" ;
foreach ($employee_data as list($ID,$First_Name,$Last_Name,$Department,$Position)) {
    # code...
echo ("<tr>
<td>$ID</td> <td>$First_Name</td> <td>$Last_Name</td> <td>$Department</td>  <td>$Position</td> 
</tr> 
</br>
" );
 
}
echo "</table>" ;
//2 
/* -----------Multidimensional Associative Array----------- */
$emp = [
    ["id" => 1,"name" => "Krishana","designation" => "Manager","salary" => 50000],
    ["id" => 2,"name" => "Salman","designation" => "Salesman","salary" => 20000],
    ["id" => 3,"name" => "Mohan","designation" => "Computer Operator","salary" => 12000],
    ["id" => 4,"name" => "Amir","designation" => "Driver","salary" => 5000]
];

foreach ($emp as list("id" => $id, "name" => $name,"designation" => $desg,"salary" => $salary)) {
  echo "Id: $id; Name: $name; Designation: $desg; Salary: $salary</br>";
}



?>