--1.

INSERT:

The INSERT statement adds new records (rows) into a table. It specifies both the table to insert into and the values to insert.
sql
/
INSERT INTO employees (employee_id, first_name, last_name, department_id)
VALUES (101, 'John', 'Doe', 3);
/


---------------------------------------------------------
--2.
UPDATE:

The UPDATE statement modifies existing records in a table. It identifies the records to update based on specified conditions.
sql
/

UPDATE employees
SET department_id = 4
WHERE employee_id = 101;
/

----------------------------------------------------------------
-- 3.
...DELETE:

The DELETE statement removes records from a table based on specified conditions.
sql
/
DELETE FROM employees
WHERE employee_id = 101;
/

----------------------------------------------------------------
-- 4
JOIN:

JOIN is used to combine rows from two or more tables based on a related column between them.
-----------------
INNER JOIN:


The INNER JOIN returns only the rows that have matching values in both tables. It filters out unmatched rows from both tables.

/
SELECT employees.employee_id, employees.first_name, departments.department_name
FROM employees
INNER JOIN departments ON employees.department_id = departments.department_id;

/
In this example, only the employees who belong to a department (i.e., have a matching department_id in both tables) will be returned.



-----------------------------------------------------
--5
LEFT JOIN (or LEFT OUTER JOIN):


The LEFT JOIN returns all rows from the left table (first table mentioned) and the matched rows from the right table (second table mentioned).
 If there s no match, NULL values are returned for columns from the right table


/
SELECT employees.employee_id, employees.first_name, departments.department_name
FROM employees
LEFT JOIN departments ON employees.department_id = departments.department_id;
/


This query will return all employees, including those who might not be assigned to any department. If an employee has no matching department, the "department_name" column will be NULL
-----------------------------------------------------------
--6
RIGHT JOIN (or RIGHT OUTER JOIN):

The RIGHT JOIN is the reverse of the LEFT JOIN. It returns all rows from the right table and the matched rows from the left table. If theres no match, NULL values are returned for columns from the left table.


/
SELECT employees.employee_id, employees.first_name, departments.department_name
FROM employees
RIGHT JOIN departments ON employees.department_id = departments.department_id;
/


This query will return all departments, including those without any assigned employees. If a department has no matching employee, the "employee_id" and "first_name" columns will be NULL.

-----------------------------------------------------------
--7
FULL JOIN (or FULL OUTER JOIN):The FULL JOIN returns all rows when there's a match in either left or right table. It combines the results of both LEFT JOIN and RIGHT JOIN. If there's no match, NULL values are returned for columns from the table without a match.
 

/

SELECT employees.employee_id, employees.first_name, departments.department_name
FROM employees
FULL JOIN departments ON employees.department_id = departments.department_id;

/


This query will return all employees and all departments, including those without matches in the other table. If an employee has no matching department or vice versa, the respective columns will contain NULL values.

----------------------------------------------------------
--7

CROSS JOIN:
The CROSS JOIN returns the Cartesian product of the two tables, meaning it combines each row of the first table with every row of the second table. It does not require any condition to be met.
/


SELECT employees.employee_id, employees.first_name, departments.department_name
FROM employees
CROSS JOIN departments;


/
This query will return a combination of every employee with every department, effectively creating a matrix of all possible combinations.
//

AND
as
In
Where in 
alius