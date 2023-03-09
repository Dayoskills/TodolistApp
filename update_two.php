<!--connection-->
<?php
include ("connection.php");
$List = $_POST['list'];
$id = $_POST['id'];
$List = $_POST['list'];
mysqli_query($conn, "UPDATE `tabletodo` SET `list`='$List' WHERE id = '$id'");
header("location: index.php");
?>