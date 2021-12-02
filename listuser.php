<!DOCTYPE html>
<html>
<head>
	<title>List Of Users</title>
	<style type="text/css">
	table, th, td {
 		border: 1px solid black;
  		border-collapse: collapse;
	}

	th, td {
  		padding: 15px;
	}

	th {
  		text-align: left;
	}

</style>
<br>
<a href="home.php"><img src="pictures/logobc.jpg" alt="logo"  align="left" width="100" height="100">
</a
<br>

<br>
<br>
<br>
<br>

	<a href="listproduct.php">Products</a>
	<a href="register.php">Add New User</a>
</head>
<body>
	<div class="table">
	<table border="5">
	<tr>
	    <th>User id</th>
	    <th>Username</th>
	    <th>Email</th>
	    <th>Password</th>
		<th>Action</th>
 	</tr>
	<?php

  	include 'db.php'; 
 	$q = "select * from users ";

  	$query = mysqli_query($con,$q);

  	while($res = mysqli_fetch_array($query)){
 	?>
 	<tr class="text-center">
 	<td> <?php echo $res['id'];  ?> </td>
 	<td> <?php echo $res['username'];  ?> </td>
 	<td> <?php echo $res['email'];  ?> </td>
 	<td> <?php echo $res['password'];  ?> </td>
 	<td> <button class="btn-danger btn"> <a href="deleteuser.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 	<td> <button class="btn-primary btn"> <a href="updateuser.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>

  </tr>

  <?php 
 }
  ?>
 
 </table>  

</div>
</body>
</html>