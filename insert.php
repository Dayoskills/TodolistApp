<?php 
include ('connection.php');
$name = $_POST['name'];
$sql = "INSERT INTO `tasks`(`name`) VALUES ('$name');";
mysqli_query($conn, $sql);
header('location: index.php');
?>