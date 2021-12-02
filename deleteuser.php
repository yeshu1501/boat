<?php

include 'db.php';

$id = $_GET['id'];

$q = " DELETE FROM `users` WHERE id = $id ";

mysqli_query($con, $q);

header('location:listuser.php');

?>