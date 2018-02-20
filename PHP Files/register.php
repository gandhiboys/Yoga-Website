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
    var address = document.getElementById('address');
    var phone = document.getElementById('phone');
    
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
    var lettersNum = \d{1,5}\s\w.\s(\b\w*\b\s){1,2}\w*\.; 
    if(address.value.match(lettersNum)) {
        return true;
    }else{
      alert("Please enter a valid address!");  
      return false;
    }
    var phoneNo = /^\d{10}$/;  
    if(phone.value.match(phoneNo)) {
        return true;
    }else{
      alert("Please enter a valid phone number!");  
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
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $classid = $_POST['classid'];
    $daysid = $_POST['daysid'];
    $timeid = $_POST['timeid'];
    $pass = true;
    $pass1 = true;

  if (empty($name)) {
     echo "Name type is empty" . "<br />";
     $pass = false;
        }
  if (empty($email)) {
      echo "Email Address is empty" . "<br />";
    $pass = false;
  }
  if (empty($phone)) {
      echo "Please enter a phone number" . "<br />";
    $pass = false;
  }
  if (empty($address)) {
      echo "Please enter an address" . "<br />";
    $pass = false;
  }
  $sql2 = "select count(*) from schedule where timeid = '" . $timeid . "' and classid = '" . $classid . "' and daysid = '" . $daysid . "';";
  require 'connection/connection.php';
  if ($conn->query($sql2) === false) {
        echo "Error: " . $sql2 . "<br />" . $conn->error . "<br/>";
  } else {
        $result2 = $conn->query($sql2);
        $row2 = $result2->fetch_assoc();
        foreach ($row2 as &$count){
          if ($count === 0 || $count === '0'){
            $pass1 = false; 
            echo "<script type='text/javascript'>alert('Schedule selected is not available for this class')</script>";
          }        
        } 
  }
  if($pass1){ 
       if ($pass) {
          $sql1 = "select max(clientid) from client;";
          require 'connection/connection.php';
          if ($conn->query($sql1) === false) {
            echo "Error: " . $sql1 . "<br />" . $conn->error . "<br />";
          } else {
            $result1 = $conn->query($sql1);
            $row = $result1->fetch_assoc();
            foreach ($row as &$clientid) {
              if (is_numeric($clientid)){
                  $clientid = $clientid + 1;
              }
            }
          }

          $sql3 = "INSERT INTO client (clientid, name, email, phone, address, password) VALUES ('" . $clientid . "','" . $name . "', '" . $email . "', '" . $phone . "',  '" . $address . "', 'Yoga2017');";
          $sql4 = "INSERT INTO cSchedule (clientid, timeid, classid, daysid) VALUES ('" . $clientid . "'," . $timeid . ", '" . $classid . "', '" . $daysid . "');";
          require 'connection/connection.php';
          if ($conn->query($sql3)  && $conn->query($sql4) === false) {
            echo "Error: " . $sql3 . "<br />" . $conn->error . "<br />";
            echo "Error: " . $sql4 . "<br />" . $conn->error . "<br />";
          } else {
            echo "<script type='text/javascript'>alert('Congratulations! You are now a client at  Path of Light Yoga Studio. Client ID: " . $clientid . " and Password: Yoga2017')</script>";
          }
        }
      }
  }
 ?>
<div>
<form method = 'post' name = "myform" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="return myFunction();">
<label for="name"><b>* Name: &nbsp;&nbsp; </b></label>
<input type="text" name="name" value="" id = 'name' required>
<br><br>
<label for="email"><b>* E-mail: &nbsp;&nbsp; </b></label>
<input type="email" name="email" value="" id = 'email' required>
<br><br>
<label for="phone"><b>* Phone: &nbsp;&nbsp; </b></label>
<input  type="tel" name="phone" value="" id = 'phone' required>
<br><br>
<label for="address"><b>* Address: &nbsp;&nbsp; </b></label>
<input class="cBox" type="text" name="address" maxlength = "100" id = 'address' value="" required>
<br><br>
<label for="classid"><b>* Type of Class: &nbsp;&nbsp; </b></label>
<select name="classid" value="Gentle">
<option value="gentle">Gentle</option>
<option value="vinyasa">Vinyasa</option>
<option value="restorative">Restorative</option>
</select>
<br><br>
<label for="daysid" ><b>* Schedule: &nbsp;&nbsp; </b></label>
<select name="daysid" >
<option value="weekday">Monday - Friday</option>
<option value="weekend">Saturday & Sunday</option>
</select>
<br><br>
<label for="timeid" ><b>* Time: &nbsp;&nbsp; </b></label>
<select name="timeid">
<option value="1">9:00 AM</option>
<option value="2">10:30 AM</option>
<option value="3">Noon</option>
<option value="4">1:30 PM</option>
<option value="5">3:00 PM</option>
<option value="6">5:30 PM</option>
<option value="7">7:00 PM</option>
</select>
<br><br>
<input class = but1 type="submit" value="Send Now" >
</form> 
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