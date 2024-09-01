<!--
    
PHP checkdate() Function
The checkdate() function is used to validate a Gregorian date.

Syntax
checkdate(month, day, year)
Parameter Values
Parameter	Description
month	Required. Specifies the month as a number between 1 and 12
day	Required. Specifies the day as a number between 1 and 31
year	Required. Specifies the year as a number between 1 and 32767
Return Value:	TRUE if the date is valid. FALSE otherwise
PHP date_diff() Function
The date_diff() function returns the difference between two DateTime objects.

Syntax
date_diff(datetime1, datetime2, absolute)
Parameter Values
Parameter	Description
datetime1	Required. Specifies a DateTime object
datetime2	Required. Specifies a DateTime object
absolute	Optional. Specifies a Boolean value. TRUE indicates that the interval/difference MUST be positive. Default is FALSE
Return Value:	Returns a DateInterval object on success that represents the difference between the two dates. FALSE on failure


-->

<?php
/*------Checkdate Function------- */

echo checkdate(2, 15, 2014). "<br><br>";

echo checkdate(2, 29, 2014). "<br><br>";

echo checkdate(2, 29, 2004). "<br><br>";

echo checkdate(2, 15, 2024). "<br><br>";


/*------Date Difference Function------- */
$date1 = date_create("2013-03-15");

$date2 = date_create("2013-12-12");

$diff = date_diff($date1,$date2);

echo $diff->days . "days";

echo "<pre>";
print_r($diff);
echo "</pre>";

/*------Date Difference Function ----II--Example------- */
$date1 = date_create("2013-12-15");

$date2 = date_create("2013-03-12");

$diff = date_diff($date1,$date2);

echo $diff->format("%R%a %m days");

echo "<pre>";
print_r($diff);
echo "</pre>";
?>