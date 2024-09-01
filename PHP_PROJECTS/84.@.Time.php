<!--
 PHP time() Function
The time() function returns the current time in the number of seconds since the Unix Epoch (January 1 1970 00:00:00 GMT).

Syntax

time()

Return Value:	Returns an integer containing the current time as a Unix timestamp -->

<?php
/*----Time Functions------- */
echo "Hour is " . date("h"). "<br>";

echo "Hour is " . date("H"). "<br>";

echo "Hour is " . date("g"). "<br>";

echo "Hour is " . date("G"). "<br>";

echo "Minutes is " . date("i"). "<br>";

echo "Seconds is " . date("s"). "<br>";

echo "Meridiem is " . date("a"). "<br>";

echo "Meridiem is " . date("A"). "<br>";

echo "Time is " . date("h:i:sa e"). "<br>";

echo "Time & Date is " . date("d-m-Y h:i:sa"). "<br>";

date_default_timezone_set("Asia/Kolkata");
echo "Time is " . date("h:i:s a e"). "<br>";


?>