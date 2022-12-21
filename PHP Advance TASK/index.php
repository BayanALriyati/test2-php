<?php
 require_once('config.php');
 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <title>manage the employees</title>
       <style>
         h1 {
           text-align: center;
            }
         .btn {
           color = red ;
            }
       </style>
  </head>
  <body>
     <h1 >Employees Details</h1>
     <div class="container">
     <button type="button" class="btn btn-primary mx-5"><a href="Create.php" class="text-light">+ Add New Employees
     </a>
     </button>
     <table class="table table-striped border border-primary my-5 ">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Salary</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php
$sql = $conn->prepare("SELECT * FROM emp");
$sql->execute();
$result = $sql->fetchall();

foreach($result as $row)
    {
       $id = $row['id'] ;
       $name =$row["Name"];
       $address=$row["Address"];
       $salary =$row["Salary"];
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" .$row["Name"] . "</td>";
  echo "<td>" . $row["Address"] . "</td>";
  echo "<td>" . $row["Salary"] . "</td>";
  echo "<td><a href='update.php?updateid=".$id."'><i class='fa-sharp fa-solid fa-pencil'></i></a></td>";
  echo "<td><a href='delete.php?deleteid=".$id."'><i class='fa-sharp fa-solid fa-trash-can'></i></a></td>";
}
?>
  
</table>
</div>

  </body>
</html>