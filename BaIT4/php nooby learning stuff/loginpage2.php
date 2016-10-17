<?php
if (isset($_POST) && !empty($_POST)){
//preform php stuff if there is a post
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
WHERE username = '" . $username . "' AND password = '" . $password . "'");

//checks if the query has returned 1 row (thus the user exists)
if(mysql_num_rows($result) == 1)
{ //if statement
    //puts the database data in an array
    $data = mysql_fetch_array($result);
    echo "Welcome " . " " . $data ['username'];
}
else {
    echo "Error, wrong password or username" ;//else statement
}

mysql_close($con);
}
else { ?>

<form action="" method="post">
    // uses welcome.php to give welcome screen when logged in<br />
    // post, so password does not show up in url<br />
    Username: <input type="text" name="username" /><br />
    Password: <input type="password" name="password" />
    <input type="submit" />
</form>

<?php }