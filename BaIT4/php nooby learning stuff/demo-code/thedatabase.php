<?php include("header.inc"); ?>
<p align="center"><big><strong>2. The Database</strong></p></big>
<blockquote>
  <p align="left">&nbsp;</p>
  <p align="left">The MySQL database used for this example has a simple three field table
  named members.&nbsp; The SQL query used to create the table is shown below:</p>
</blockquote>

<blockquote>
  <blockquote>
    <blockquote>
      <blockquote>
        <blockquote>
          <p align="left"><font face="System">CREATE TABLE members (<br>
          id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,<br>
          password VARCHAR(12) NOT NULL,<br>
          username VARCHAR(12) NOT NULL,<br>
          index(password),<br>
          index(username))<br>
          </font></p>
        </blockquote>
      </blockquote>
    </blockquote>
  </blockquote>
</blockquote>

<blockquote>
  <p align="left">As can be seen above the &quot;id&quot; is the primary key and is auto
  incremental.&nbsp; The &quot;username&quot; and &quot;password&quot; fields are both
  indexed and must have a value to enter a valid record.&nbsp; Now <a href="addauser.php">add
  a User</a> to this table.</p>
  <p align="left">&nbsp;</p>
</blockquote>
<?php include("footer.inc"); ?>