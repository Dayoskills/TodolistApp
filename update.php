<?php
include ("connection.php");
$id = $_POST['id'];
$name = $_POST['name'];
mysqli_query($conn, "UPDATE `tasks` SET `name`='$name' WHERE id = '$id'");
header("location: index.php");
?>