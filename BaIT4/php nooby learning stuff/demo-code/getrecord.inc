<?php
// version 1.1
$qstr = "SELECT * from members where id = '1' ";
$result = mysql_query($qstr); 

if (mysql_num_rows($result))  
{
 $username = mysql_result($result,0, "username");
 $password = mysql_result($result,0, "password");
 echo "<b>The username:</b> $username<br>";
 echo "<b>The password:</b> $password<br>";
}
else echo "ERROR - unable to find current username and password!";

mysql_close();   
?>