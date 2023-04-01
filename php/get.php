<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Bootstrap CSS -->
    

</head>
<body>
<style>  
  .form{
   
    margin: auto;
  width: 30%;
  border: 3px solid green;
  padding: 10px;
  text-align: center;
  }
  .file{
    margin-left: 40px;
    padding-top: 20px;
    border: 2px ;
  }
</style>
    <div class="form">
    <form action=<?php echo $_SERVER["PHP_SELF"] ?> method="post" enctype="multipart/form-data">
    <h1>GET METHOD</h1>
    <div class=" ">
        <label >Name</label>
        <input type="text" class="form-control"   placeholder="Enter your name" name="name">
    </div>
    <div class="email ">
        <label >Email</label>
        <input type="email" class="form-control"   placeholder="Enter your Email" name="email">
    </div>
    <div class="file">
        <label >file</label>
        <input type="file" class="form-control"   placeholder="Add file" name="image">
    </div>
    <button type="submit" class="btn btn-primary" name="save">Submit</button>
</form>
</div>
<div>
<?php
// if(isset($_POST['save'])){
//     echo $_POST['name']."<br>";
//     echo $_POST['email'];
// }


if(isset($_FILES['image'])){

    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
}
// making varible and by using those we can set conditions on the file 
$file_name = $_FILES['image']['name'];
$file_size = $_FILES['image']['size'];
$file_tmp_name = $_FILES['image'] ['tmp_name'];
$file_error = $_FILES['image']['error'];
$file_type = $_FILES['image']['type'];

if(move_uploaded_file($file_tmp_name,"uploaded_images/".$file_name)){
    echo "File Uploaded";
}else{
    echo "File Upload Failed";
}

?>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</body>
</html>