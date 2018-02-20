<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="yoga.css">
  <title>Path of Light Yogo Studio</title>
<script type="text/javascript">
function myFunction() {

    var name = document.getElementById('name');
    var email = document.getElementById('email');
    var comment = document.getElementById('comment');

    var letters = /^[A-Za-z, ]+$/;  
    if(name.value.match(letters)) {
        return true;
    }else{
      alert("Please enter a valid name!");  
      return false;
    }
    var mailformat = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(email.value.match(mailformat)) {
        return true;
    }else{
      alert("Please enter a valid email!");  
      return false;
    }     
    if(comment.value == "") {
        return true;
    }else{
      alert("Please enter a comment!");  
      return false;
    }
}
</script>

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
<div id="wrapper">
<h2>Contact Path of Light Yoga Studio</h2>
<p>Required information is marked with an astrisk (*)</p>
</div>
<br><br><br>

<?php
    if($_SERVER['REQUEST_METHOD']==='POST'){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$comments = $_POST['comments'];
		$pass = true;

	if (empty($name)) {
 	   echo "Name type is empty" . "<br />";
 	   $pass = false;
	    	}
	if (empty($email)) {
	   	echo "Email Address is empty" . "<br />";
		$pass = false;
	}
	if (empty($comments)) {
	   	echo "Please enter a comment" . "<br />";
		$pass = false;
	}
	if ($pass) {
    		$sql = "INSERT INTO contact (name, email, comments) VALUES ('" . $name . "', '" . $email . "', '" . $comments . "');";
    		require 'connection/connection.php';
    		if ($conn->query($sql) === false) {
				echo "Error: " . $sql . "<br />" . $conn->error . "<br />";
			} else {
				echo "<script type='text/javascript'>alert('Your comment has been submitted successfully!')</script>";
			}
    }
 }
 ?>
<div>
<form method = 'post' name = "myform" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="return myFunction();">
<label for="name"><b>* Name:&nbsp;&nbsp;</b></label>
<input type="text" name="name" id = "name" value="" required>
<br><br>
<label for="email"><b>* E-mail:&nbsp;&nbsp;</b></label>
<input type="email" name="email" id = "email" value="" required>
<br><br>
<label for="comments"><b>* Comments:&nbsp;&nbsp;</b></label>
<textarea name="comments" id = "comments" maxlength = "300" required></textarea>
<br><br>
<input class = but1 type="submit" value="Send Now">
</form> 
</div>
<br><br><br><br><br><br><br>
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