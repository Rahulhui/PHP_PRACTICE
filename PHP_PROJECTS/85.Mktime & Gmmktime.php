<!--
    
PHP mktime() Function
The mktime() function returns the Unix timestamp for a date.

Tip: This function is identical to gmmktime() except the passed parameters represents a date (not a GMT date).

Syntax
mktime(hour, minute, second, month, day, year, is_dst)
Parameter Values
Parameter	Description
hour	Optional. Specifies the hour
minute	Optional. Specifies the minute
second	Optional. Specifies the second
month	Optional. Specifies the month
day	Optional. Specifies the day
year	Optional. Specifies the year
is_dst	Optional. Set this parameter to 1 if the time is during daylight savings time (DST), 0 if it is not, or -1 (the default) if it is unknown. If it's unknown, PHP tries to find out itself (which may cause unexpected results). Note: This parameter is removed in PHP 7.0. The new timezone handling features should be used instead 
Return Value:	Returns an integer Unix timestamp. FALSE on error

PHP gmmktime() Function
The gmmktime() function returns the Unix timestamp for a GMT date.

Syntax
gmmktime(hour, minute, second, month, day, year, is_dst)
Parameter Values
Parameter

Description

hour              Optional. Specifies the hour

minute          Optional. Specifies the minute

second             Optional. Specifies the second

month              Optional. Specifies the month

day            Optional. Specifies the day

year          Optional. Specifies the year

is_dst     Optional. Parameters always represent a GMT date so is_dst doesn't influence the result. Note: This parameter is removed in PHP 7.0. The new timezone handling features should be used instead

Return Value:

Returns an integer Unix timestamp 


-->

<?php
/*------MK Time Function------- */
echo "Time & Date : " . date("d-m-Y h:i:sa"). "<br><br>";
echo "Time :".date ("h:i:s a")."<br><br>";
echo date("d-m-Y h:i:sa",mktime(0,0,0,10, 15, 2003)). "<br><br>";

/*------GMT Time Function------- */
echo date("d-m-Y h:i:sa",gmmktime(0,0,0,10, 15, 2003))




?>