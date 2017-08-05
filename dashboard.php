
<html>
<head>
<title>Home</title>
<link href="styles/global_dashboard.css" rel="stylesheet" type="text/css"/>
<meta name="viewport" content="width=device-width, initial-scale: 1.0, user-scalable=0" />
<script src="scripts/jquery-3.2.1.min.js"></script>
<script src="scripts/general.js"></script>
</head>

<body>

	<div id="header">
		<img class="sidelogo" src="images/info.png">
		<div class="logo"><a href="#">Notice<span><strong>Board</strong></span></a></div>
		<div class="exit"><a href="javascript:window.open('','_self').close();"><img src="images/exit.png"></a></div>
	</div>

	<a class="mobile" href="#">&nbsp;MENU</a>
	<a class="time" id="clock">HH:MM:SS</a>

	<div id="container">
		<div class="sidebar">
		<ul id="nav">
			<li><a href="Dashboard.php">Dashboard</a></li>
			<li><a href="Write.html">Write</a></li>
			<li><a href="Search1.html">Search</a></li>
			<li><a href="Feedback.html">Feedback</a></li>
			<li><a href="help.html">Help</a></li>

		</ul>
		</div>
		<div class="content">
		<h1>Dashboard</h1>
		<p> &nbsp;&nbsp;&nbsp;What do we have for you....</p>

		<?php
		$con=mysql_connect("localhost","noticeboard_db","singham2")
        or die("Cannot Connect to the MySQL server");

        mysql_select_db("noticeboard_db")
		or die("Can't connect to the specified database");
		$results=mysql_query("SELECT * FROM nb_write")
		or die("Can't Connect to the specified Table");
			while($row = mysql_fetch_array($results)) 
			{
				$title=$row['title'];
  				$msg=$row['message'];
  				$name=$row['name'];
		echo "<div id=\"box\">
			<div class=\"box-top\">".$title."</div>
			<div class=\"box-panel\">".$msg."<br><br>".$name."
			</div>
			</div>";
			}
			mysql_close($con);
			?>



		</div>
	</div>

</body>
</html>