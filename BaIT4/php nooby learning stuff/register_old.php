<?php
if (isset($_POST) && !empty($_POST))
                                  {
    $foo = True;
    if password 1 == password 2 {
    echo "passwords do not match";
                                   }
    if (empty($_POST['username'])){
        $foo = False; //is the username field empty? if yes return false
                                  }
    if (empty($_POST['password'])){
        $foo = False; //is the password field empty? if yes return false
                                  }
    if ($foo == False)            { //if it is false, then give below error message
       echo "no username or password selected";
                                  }
    else                          { 
    $username = $_POST['username'];
       mysql_select_db("mymovielist");
       //open database and query the following fields for username entered in fields
       $result = mysql_query("SELECT * 
       FROM Users
       WHERE username = '" . $username . "'");
                                  }
   if(mysql_num_rows($result) == 0) { // if there is no result, it means username is available, else it is not available and below message will be sent
   }
   else {
       echo "Username already exists, please try another";
   }
   $sql="INSERT INTO users (Username, Password)
        VALUES ('".$_POST[$username]."','".$_POST[$password]."')";
   $result = mysql_query($sql); //execute
}
?>
<form id='register' action='' method='post'
    accept-charset='UTF-8'>
<fieldset >
<legend>Register</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>
<label for='username' >UserName*:</label>
<input type='text' name='username' id='username' maxlength="50" />
<label for='password' >Password*:</label>
<input type='password' name='password' id='password' maxlength="50" />
<input type='submit' name='Submit' value='Submit' />

</fieldset>
</form>
