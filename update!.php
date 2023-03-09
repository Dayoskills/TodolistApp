<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>Update</title>
   
</head>
<?php
$id = $_GET['id'];
include ("connection.php");
$Rdata = mysqli_query($conn, "select * from tabletodo where id = $id");
$data = mysqli_fetch_array($Rdata);
?>
<body class="bg-info">
<form action="update1.php" method="POST">
    <div class="container">
        <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
            <h3 class="text-center text-primary font-monospace">Update</h3>  
            <div class="col-10">
                <input type="text" required value="<?php echo $data['list']?>" name="list" class="form-control">
            </div>  
            <div class="col-2">
                <button class="btn btn-outline-primary">done</button>
                <input type="hidden" name="id" value="<?php echo $data['id']?>">
            </div>
        </div>
    </div>
</form>

</body>
</html>