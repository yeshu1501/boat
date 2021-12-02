<?php

  include 'db.php';

  if(isset($_POST['done'])){

  $id = $_GET['ID'];
 $image = $_POST['image'];
 $image_text = $_POST['image_text'];
 $q = " update boattbl set id=$id, image='$image', image_text='$image_text' where id=$id  ";

  $query = mysqli_query($con,$q);

  header('location:listproduct.php');
 }

?>
<!DOCTYPE html>
<header>
<title>Boat List</title>
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


<h2> <font color="#E3E4FA">UPDATE BOAT DETAILS </font></h2>
 
  
 <form method="post">
 
 <br><br><div class="card">


  <label> image: </label>
 <input type="file" name="image" class="form-control"> <br>

  <label> image_text: </label>
 <input type="text" name="image_text" class="form-control"> <br>

  <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

  </div>
 </form>

  


</body>
</html>