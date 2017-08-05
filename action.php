<?php

$title = $_POST['title'];
$msg = $_POST['comment'];
$name = $_POST['name'];

	$host = "localhost";
	$database = "noticeboard_db";
	$user = "noticeboard_db";         
	$pass = "singham2";     

		$con=mysql_connect($host,$user,$pass)
        or die("Cannot Connect to the MySQL server");

        mysql_select_db($database)
		or die("Can't connect to the specified database");

	mysql_query("INSERT INTO nb_write(title,message,name) VALUES('$title','$msg','$name')")
	or die(mysql_error());

	echo "Data Sucessfully Uploaded. Please Visit the <a href=\"dashboard.php\">Dashboard</a>";

	mysql_close($con);