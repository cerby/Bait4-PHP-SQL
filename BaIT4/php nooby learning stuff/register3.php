<?php
if (isset($_POST) && !empty($_POST))
{
    
    $foo = False; //X3: Start out assuming no errors
    $error = '';
    
    if (empty($_POST['username'])){
        $foo = True; //X3: Set error flag to true since no username //is the username field empty? if yes return false
        $error .= 'No username was provided.<br />'; 
    }
    if (empty($_POST['password'])){
        $foo = True; //X3: Set error flag to true since no password //is the password field empty? if yes return false
        $error .= 'No password was provided.<br />';
    }
    else {
        if ($_POST['password'] != $_POST['password2']) {
            $error .= 'passwords do not match.<br />';
            $foo = True; //X3: Set error flag to true since passwords dont match
        }
    }
    if ($foo == True) { //X3: Check for error and output it
       echo $error; //echo the error string set below if statement, if more than one error, it will show username error first, then password error below.
    }
    else { 
        $username = $_POST['username'];
        $con = mysql_connect("localhost","root","");
    if (!$con)
  { //if it cannot access the database, you cannot go on, therefore the die command
  die('Could not connect: ' . mysql_error());
  }    // gotta connect to database before you can open it
           mysql_select_db("mymovielist", $con);
           //open database and query the following fields for username entered in fields
           $result = mysql_query("SELECT * 
           FROM Users
           WHERE username = '" . $username . "'");
                                      
       if(mysql_num_rows($result) == 0) { // if there is no result, it means username is available, else it is not available and below message will be sent
           $sql="INSERT INTO `mymovielist`.`users` (username, password)
                VALUES ('".$_POST['username']."','".$_POST['password']."')";
           $result = mysql_query($sql); //execute
           //X3: Echo registration complete
       }
       else {
           echo "Username already exists, please try another";
       }
   }
}?>
<form id='register' action='' method='post'
    accept-charset='UTF-8'>
<fieldset >
<legend>Register</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>
<label for='username' >UserName...........:</label>
<input type='text' name='username' id='username' maxlength="50" /><br />
<label for='password'  >Password............:</label>
<input type='password' name='password' id='password' maxlength="50" /><br />
<label for='password2' >Retype Password:</label>
<input type='password' name='password2' id='password2' maxlength="50" /><br />
<input type='submit' name='Submit' value='Submit' />

</fieldset>
</form>