<!-- 
    PHP date_add() Function
The date_add() function adds some days, months, years, hours, minutes, and seconds to a date.

Syntax
date_add(object, interval)

Parameter Values
Parameter          Description

object    Required. Specifies a DateTime object returned by date_create()

interval    Required. Specifies a DateInterval object

Return Value:  Returns a DateTime object on success. FALSE on failure

PHP date_sub() Function
The date_sub() function subtracts some days, months, years, hours, minutes, and seconds from a date.

Syntax
date_sub(object, interval)

Parameter Values
Parameter      Description

object     Required. Specifies a DateTime object returned by date_create()

interval         Required. Specifies a DateInterval object

Return Value:

Returns a DateTime object on success. FALSE on failure

PHP date_modify() Function
The date_modify() function modifies the timestamp.

Syntax
date_modify(object, modify)
Parameter Values
Parameter        Description

object       Required. Specifies a DateTime object returned by date_create()

modify         Required. Specifies a date/time string

Return Value:

Returns a DateTime object on success. FALSE on failure

 -->

 <?php
/*------Date Add Function------- */
$date = date_create("2015-05-15");

date_add($date,date_interval_create_from_date_string("30 days"));

echo date_format($date, "d-m-Y"). "<br><br>";

/*------Date Subtract Function------- */
$date = date_create("2015-05-15");

date_sub($date,date_interval_create_from_date_string("10days"));

echo date_format($date, "d-m-Y"). "<br><br>";


/*------Date Modify Function------- */
$date = date_create("2015-05-15");

date_modify($date,"10  days");

echo date_format($date, "d-m-Y"). "<br><br>";

?> 