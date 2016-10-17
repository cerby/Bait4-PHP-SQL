<?php
$page_title="PHP source code to insert a username and password";
$page_keywords="php source code, sql insert query";
$page_desc="free PHP code to insert a username and password";
include("header.inc");
?>
<p align="center">This page shows the PHP and JavaScript code used in the &quot;Add a
User&quot; section.</p>

<table border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%"><p align="center"><small><strong>addauser.php</strong></small><div align="center">
    <div align="left" style="border:solid 2px #0000FF; background:#EAEDFC; color:#000000; padding:2px; width:800px; height:300px; overflow:auto;">
          <?php show_source("addauser.php"); ?>
        </div>
      </div>
      <p></p>
      <p align="center">      
      
      <p align="center"></td>
  </tr>
  <tr>
    <td width="100%"><div align="center"><center><table border="0" width="645" cellspacing="1"
    cellpadding="0" bgcolor="#000000">

    </table>
    </center></div></td>
  </tr>
</table>

<p align="center">&nbsp;</p>

<table border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%"><p align="center"><small><strong>validateform.inc</strong></small>          
      
      <div align="center">
        <div align="left" style="border:solid 2px #0000FF; background:#EAEDFC; color:#000000; padding:2px; width:800px; height:300px; overflow:auto;">
          <?php show_source("getrecord.inc"); ?>
        </div>
      </div>
      <p></p>
    </td>
  </tr>
  <tr>
    <td width="100%">&nbsp;</td>
  </tr>
</table>

<p align="center">&nbsp;</p>

<table border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%"><p align="center"><small><strong>config.php</strong></small></td>
  </tr>
  <tr>
    <td width="100%"><div align="center"><center><table border="0" width="645" cellspacing="1"
    cellpadding="0" bgcolor="#000000">
      <tr>
        <td width="643" bgcolor="#FFFFFF">&lt;?php<br>
        <br>
        $mysql_database=&quot;a_db&quot;; // change to your own<br>
        $mysql_username=&quot;a_username&quot;; // change to your own<br>
        $mysql_password=&quot;a_password&quot;; // change to your own<br>
        <br>
        $link = mysql_connect(&quot;localhost&quot;,$mysql_username,$mysql_password) or die
        (&quot;Unable to connect to SQL server&quot;);<br>
        mysql_select_db($mysql_database,$link) or die (&quot;Unable to select database&quot;);<br>
        <br>
        ?&gt;</td>
      </tr>
    </table>
    </center></div></td>
  </tr>
</table>

<p align="center">&nbsp;</p>

<table border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%"><p align="center"><small><strong>getrecord.inc</strong></small>    
      <p align="center">      
      <div align="center">
        <div align="left" style="border:solid 2px #0000FF; background:#EAEDFC; color:#000000; padding:2px; width:800px; height:300px; overflow:auto;">
          <?php show_source("getrecord.inc"); ?>
        </div>
      </div>
      <p></p>
      <p align="center">      
      <p align="center"></td>

  </tr>
</table>

<p align="center">&nbsp;</p>

<table border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%"><p align="center"><small><strong>savedata.php</strong></small>    
      <p align="center">

      <div align="center">
        <div align="left" style="border:solid 2px #0000FF; background:#EAEDFC; color:#000000; padding:2px; width:800px; height:300px; overflow:auto;">
          <?php show_source("savedata.php"); ?>
        </div>
      </div>
      <p></p>
      <p align="center">      
      
      <p align="center"></td>
  </tr>
</table>

<p align="center"><a href="javascript:history.go(-1)">&lt; Go Back&lt;</a></p>
<?php include("footer.inc"); ?>