<?php
 require_once('config.php');
 if (isset($_GET['deleteid'])){
  $id = $_GET['deleteid'] ;
  

  $sql ="DELETE FROM emp WHERE id=$id";
  if ($conn->query($sql)){
      echo "Delete successfully";
      header ('location:index.php');
  }else {
     echo 'error: ' .$sql . '<br>';
  }
   }

?>