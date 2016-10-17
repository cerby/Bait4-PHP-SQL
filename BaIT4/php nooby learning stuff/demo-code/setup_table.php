<?php
$database_tds="thedemosite"; // change to your own
$username_tds="thedemosite"; // change to your own
$password_tds="tds12wn7"; // change to your own

$link = mysql_connect("localhost",$username_tds,$password_tds) or die ("Unable to connect to SQL server");
mysql_select_db($database_tds,$link) or die ("Unable to select database");

$qdrop = "drop table members";

$qsetup = "
CREATE TABLE members (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
password VARCHAR(12) NOT NULL,
username VARCHAR(12) NOT NULL,
index(password),
index(username))";

$result = mysql_query($qdrop);
$result = mysql_query($qsetup);

if ($result) echo "sucess - created table.";
else
{
 $SQLError =  "SQL ERROR: ".mysql_errno().".  ".mysql_error()."<BR><BR>";
 echo "$SQLError";
}

mysql_close();
?>