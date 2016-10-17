<?php
//uses welcome.php to give welcome screen when logged in
//post, so password does not show up in url
?>
<form action="welcome.php" method="post">
Username: <input type="text" name="username" /><br />
Password: <input type="password" name="password" />
<input type="submit" />
</form>