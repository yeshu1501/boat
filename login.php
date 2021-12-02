<!DOCTYPE html>
<html>
<head>
<title> Login </title>
<link rel="stylesheet" href="login.css" />
</head>


<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking if user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            // Redirect user to index.php
     header("Location: home.php");
         }else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
 }
    }else{
?>

<form id=frm_sign action=""  method="POST">
<div align="right">



<font color="#E3E4FA">Username<input type=text name="username">
                      Password<input type=password name="password"></font>
<input type=submit name="btnSubmit" value="Sign in">
</div>
</form>
<div align="right">
<p>Not registered yet? <a href='register.php'>Register Here</a></p>
</div>
<div align="center">
<img src="pictures/logobc.jpg" alt="logo" width="100" height="100">

</div>



<br>
<br>

<CENTER><font color="#E3E4FA">


<p><blink>Welcome to Boat City</blink></p>

Boat City is a family-run trading company based in Mauritius, involved in different sectors and activities.</br>
Boat City is specially built for boats. It contains Cruise boats and so on.</br>
 Leader since decades in some of its activities, and cooperating with internationally recognized partners and brands, such as Speedster, legend, albin Marlin and many others.</br>
Boat City meets the expectations of its customers by offering high-quality and reliable products.</br>
Click <a href="register.php"> here</a> to register first.
</font></CENTER>
<br>

<a><CENTER><img src="pictures/boat3.jpg" alt="consoles"></CENTER> </a>



</div>
<?php } ?>
</body>
</html>
