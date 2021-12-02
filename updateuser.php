<?php

  include 'db.php';

  if(isset($_POST['done'])){

  $id = $_GET['id'];
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $q = " update users set id=$id, username='$username', email='$email', password='$password' where id=$id  ";

  $query = mysqli_query($con,$q);

  header('location:listuser.php');
 }

?>
<!DOCTYPE html>
<header>
<title>User List</title>
<style>
input
{
  color:blue;  
}
textarea
{
  
  color:blue;
}

body
{
background-color:black;
}

input
{
color:blue;
}
.imge{
	width: 200px;
	height:200px;
}
</style>
</header>
<body>
	<div style="position:relative;left:5px;width:500px;border-width:1px;border-style:solid;border-color:white;">


</br>
</br>
<img src="pictures/logobc.jpg" alt="logo" width="100" height="100">


<h2> <font color="#E3E4FA">UPDATE USER DETAILS </font></h2>
 
  
 <form method="post">
 
 <br><br><div class="card">


  <label> username: </label>
 <input type="text" name="image" class="form-control"> <br>

  <label> email: </label>
 <input type="text" name="image_text" class="form-control"> <br>
 <label> password: </label>
 <input type="text" name="image_text" class="form-control"> <br>

  <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

  </div>
 </form>

  


</body>
</html>