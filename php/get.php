<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <form action=<?php echo $_SERVER["PHP_SELF"] ?> method="post">
    <h1>GET METHOD</h1>
    <div class="form-group ">
        <label >Name</label>
        <input type="text" class="form-control"   placeholder="Enter your name" name="name">
    </div>
    <div class="form-group ">
        <label >Email</label>
        <input type="email" class="form-control"   placeholder="Enter your Email" name="email">
    </div>
    <button type="submit" class="btn btn-primary" name="save">Submit</button>
</form>
</div>
<div>
<?php
if(isset($_POST['save'])){
    echo $_POST['name']."<br>";
    echo $_POST['email'];
}







?>

</div>
</body>
</html>