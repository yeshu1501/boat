<?php

include 'db.php';

$id = $_GET['ID'];

$q = " DELETE FROM `boattbl` WHERE ID = $id ";

mysqli_query($con, $q);

header('location:listproduct.php');

?>