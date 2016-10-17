<html>
<body>

<?php
$file=fopen("Welcome.txt","r") or exit("unable to open file!");
//Output a line of te file until the end is reached
while(!feof($file))
	{
	echo fgets($file). "<br />";
	}
fclose($file);
?>

</body>
</html>