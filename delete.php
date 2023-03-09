<?php 
include('connection.php');
$id = $_GET['delete'];
$sql = "DELETE FROM `tasks` WHERE id= $id";
mysqli_query($conn, $sql);
header("location: index.php");
?>