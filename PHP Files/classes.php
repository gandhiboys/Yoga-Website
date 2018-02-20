<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="yoga.css">
  <title>Path of Light Yogo Studio</title>
</head>

<body>
<div class= "header">
<h1 class = "h1"> &nbsp; Path of Light Yogo Studio <img class = "himg" src="images/lilyheader.jpg" alt="Lily"></h1>
</div>
<br>
<div id="mylinks" class="links">
<form style="display:inline-block">
<nav>
<a class = "but" href="index.php">Home</a>
&nbsp;
<a class = "but" href="classes.php">Classes</a>
&nbsp;
<a class = "but" href="schedule.php">Schedule</a>
&nbsp;
<a class = "but" href="register.php">Register</a>
&nbsp;
<a class = "but" href="contact.php">Contact</a>
&nbsp;
</nav>
</form>
</div>

<img src="images/yogamat.jpg" alt="Mat" style="width:750px;height:300px;">

<div id="wrapper">
<h2>Yoga Classes</h2>

<?php 
	$sql = "SELECT * FROM class";
	require 'connection/connection.php';
	if ($conn->query($sql) === false) {
	echo "Error: " . $sql . "<br />" . $conn->error . "<br />";
	} else {
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
  			while($row = $result->fetch_assoc()) {
				echo "<h3 style = 'font-weight: normal;' > " . $row['classname'] . " </h3> " ;
				echo "<p style = 'margin-left: 40px'> " . $row['description'] . " </p> " ;
			} 
		}
	}
	$conn->close();
?>
</div>

<div class="footer">
<footer>
<small>Copyright &copy; 2016, Path of Light Yoga Studio</small>
</footer>
<address>
<small><a href="mailto:candicereneeromeo@gomes.com">candicereneeromeo@gomes.com</a></small>
</address>
</div>

</body>
</html>