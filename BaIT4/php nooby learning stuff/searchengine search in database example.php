<?
//// filename = search.php3
<form method="post" action="result.php3">
<select name="metode" size="1">
<option value="row_name1">metode1</option>
<option value="row_name2">metode2</option>
</select>
<input type="text" name="search" size="25">
<input type="submit" value="Begin Searching!!">
</form>
?>

//// filename = result.php3
<?
$hostname = "127.0.0.1"; // Usually localhost.
$username = "username_for_mysql"; // If you have no username, leave this space empty.
$password = "your_password"; // The same applies here.
$usertable = "table_name"; // This is the table you made.
$dbName = "database_name"; // This is the main database you connect to.
MYSQL_CONNECT($hostname, $username, $password) OR DIE("Unable to connect to database");
@mysql_select_db( "$dbName") or die( "Unable to select database");
?>
<?
//error message (not found message)
$XX = "No Record Found";
$query = mysql_query("SELECT * FROM $usertable WHERE $metode LIKE '%$search%' LIMIT 0, 30 ");
while ($row = mysql_fetch_array($query))
{
$variable1=$row["row_name1"];
$variable2=$row["row_name2"];
$variable3=$row["row_name3"];
print ("this is for $variable1, and this print the variable2 end so on...");
}

//below this is the function for no record!!
if (!$variable1)
{
print ("$XX");
}
//end
?>