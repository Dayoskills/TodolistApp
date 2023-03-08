<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/eb2cfeef2f.js" croossorigin="anonymous"></script>
</head>
<body class= "bg-primary">
<form action="insert.php" method= "POST">
<div class= "container">
    <div class= "row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
        <h3 class="text-center text-primary font-monospace">TODO LIST</h3>
        <div class="col-8">
            <input type="text" required name= "list" class= "form-control" id="">
        </div>
        <div class="col-2">
            <button class="btn btn-outline-primary">Add</button>
        </div>
    </div>    
</div>
</form>

<!-- select data from database -->
<?php
include ("connection.php");
$sql2 = "SELECT * FROM `todolist`";
$result = mysqli_query($conn, $sql2);

?>

<div class= "container">
    <div class= "col-8 bg-white m-auto mt-3">

<table class= "table">
    <tbody class="fs- text-primary shadow">
        <?php
        $count= 1;
        while ($row = mysqli_fetch_array($result)) {
            
        ?>

        <tr>
           <td><?php echo $count; ?></td>
           <td><?php echo $row['list']; ?></td>
           <td style="width: 10%;"> <a href="delete.php?del_list=  <?php echo $row['id']; ?>" class="btn btn-outline-danger">Delete</a></td> 
        </tr>
        <?php $count++; } ?>
    </tbody>
</table>
</div>

</body>
</html> 