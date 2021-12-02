<!DOCTYPE html>
<html>
<head>
	<title>List Of Motorcycles</title>
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

	<a href="listuser.php">Users</a>
	<a href="boat.php">Add Product</a>
</head>
<body>
	<div class="table">
	<table border="5">
	<tr>
	    <th>Boat ID</th>
	    <th>image</th>
	    <th>Description</th>
		<th>Action</th>
 	</tr>
	<?php

  	include 'db.php'; 
 	$q = "select * from boattbl ";

  	$query = mysqli_query($con,$q);

  	while($res = mysqli_fetch_array($query)){
 	?>
 	<tr class="text-center">
 	<td> <?php echo $res['ID'];  ?> </td>
 	<td> <?php echo $res['image'];  ?> </td>
 	<td> <?php echo $res['image_text'];  ?> </td>
 	<td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['ID']; ?>" class="text-white"> Delete </a>  </button> </td>
 	<td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['ID']; ?>" class="text-white"> Update </a> </button> </td>

  </tr>

  <?php 
 }
  ?>
 
 </table>  

</div>
</body>
</html>