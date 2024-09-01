<?php
/*------String To Time Function------- */
echo ( strtotime("now"))."<br><br>";

echo date("d-m-Y" ,strtotime("now"))."<br><br>";

echo date("d-m-Y" ,strtotime("3 march 2005"))."<br><br>";

echo date("d-m-Y H:m" ,strtotime("+5 hours"))."<br><br>";

echo date("d-m-Y H:m" ,strtotime("+1 week"))."<br><br>";

echo date("d-m-Y H:m" ,strtotime("+1 week 3 days 7 hours 5 seconds"))."<br><br>";

echo date("d-m-Y H:m" ,strtotime("next Monday"))."<br><br>";

echo date("d-m-Y H:m" ,strtotime("last Sunday"))."<br><br>";

echo date("d-m-Y H:m" ,strtotime("First day of last month"))."<br><br>";
echo ("-------------------------------")."<br><br>";

/*------String F Time Function------- */
echo  strftime("%B %d %Y %X %Z")."<br>";

echo  strftime("%B %d %Y %X %Z", mktime(21,30,0,05,18,2005))."<br><br>";

echo  strftime("%d/%m/%Y %H:%M:%S", mktime(21,30,0,05,18,2005))."<br><br>";

echo  gmstrftime("%d/%m/%Y %H:%M:%S", mktime(21,30,0,05,18,2005));
?>