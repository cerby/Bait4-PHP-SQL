<?php
include("config.php");
$qselect = "Select * from members where id = '1'";
$qadd = "
  INSERT INTO members
   (id, password, username)
   VALUES ('1', 'test', 'test') ";



$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
if( ($username=="") OR ($password=="") )
{
 include("addauser.php");
 exit;
}

$qupdate = "
  UPDATE members
    SET password = '$password',
     username = '$username'
    WHERE id = '1'";

$result = mysql_query($qselect);

// check the single record exists
if (mysql_num_rows($result)) $result = mysql_query($qupdate); // update original record
else $result = mysql_query($qadd); // if not add an initial record

if ($result) mysql_close();
else
{
 echo "ERROR - unable to save new username and password!<br>";
 $SQLError =  "SQL ERROR: ".mysql_errno().".  ".mysql_error()."<BR><BR>";
 echo "$SQLError";
 mysql_close();
}
include("addauser.php");
?>