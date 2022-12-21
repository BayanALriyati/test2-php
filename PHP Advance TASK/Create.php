<?php
 require_once('config.php');
 if (isset($_POST['sub'])){
    $Name = $_POST['name'];
    $Address= $_POST['address'];
    $Salary= $_POST['salary'];
 
    $sql ="INSERT INTO emp (Name,Address,Salary) 
VALUES('$Name' , '$Address ', '$Salary')";
if ($conn->query($sql)){
    // echo "Data iserted successfully";
    header ('location:index.php');
}else {
   echo 'error: ' .$sql . '<br>';
}
 }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    <title>manage the employees</title>
<style>
    h1 {
text-align: center;
}
    </style>
  </head>
  <body>
     <h1 >employees</h1>
     <div class="container">
     <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your Name" name="name" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" placeholder="Enter your Address" name="address" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Salary</label>
    <input type="text" class="form-control" placeholder="Enter your Salary" name="salary" autocomplete="off">
  </div>
  
  <button type="submit" name="sub" class="btn btn-primary">Submit</button>
</form>
</div>

  </body>
</html>