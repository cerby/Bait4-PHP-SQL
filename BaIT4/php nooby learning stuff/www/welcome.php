<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mymovielist", $con);

$username = $_POST['username'];
$password = $_POST['password'];

//do a query to check if there is a person with the matching username and password from the form
$result = mysql_query("SELECT * FROM Users
WHERE username = '" . $username . "' AND password = '" . $password . "' ");
//checks if the query has returned 1 row (thus the user exists)
if(mysql_num_rows($result) == 1)
{ //if statement
    //puts the database data in an array
    $data = mysql_fetch_array($result);
    echo $data ['user_id'] . " " . $data ['username'];
    echo "Welcome " . $username . "<br />";
}
else 
{
    echo "Error, wrong password or username"; //else statement
}

mysql_close($con);
?> 