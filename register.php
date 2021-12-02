<!DOCTYPE html>
<header>
<title>Registration</title>
<link rel="stylesheet" href="login.css" />
</header>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
	<div style="position:relative;left:5px;width:500px;border-width:1px;border-style:solid;border-color:white;">


</br>
</br>
<img src="pictures/logobc.jpg" alt="logo" width="100" height="100">


<h2> <font color="#E3E4FA">REGISTRATION PAGE </font></h2>
 
  


<form id=frm_signup method="POST"  enctype="multipart/form-data" >


 <font color="#E3E4FA"> User Name  </font>:<input type=text name="username" id="username"  size="30" maxlength ="30"><br><br>

 <font color="#E3E4FA"> Email </font>:<input type=text name="email" id="email"  size="30" maxlength ="30"><br><br>

  <font color="#E3E4FA"> Password </font>:<input type=text name="password" id="password"  size="30" maxlength ="30"><br><br>

  <input type="submit" name="btnSubmit" value="Sign up">
  


</form>

<?php } ?>
</body>
</html>