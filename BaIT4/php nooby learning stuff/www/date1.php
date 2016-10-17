<?php 
$tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("y"));
echo "tomorrow is ".date("Y/m/d", $tomorrow) . "<br />";
echo date("Y/m/d") . "<br />";
echo date("Y.m.d") . "<br />";
echo date("Y-m-d") . "<br />";
?>