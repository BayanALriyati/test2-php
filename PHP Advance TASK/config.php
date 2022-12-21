
<?php
$hostname = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$hostname;dbname=employees", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //select type error
 
 
  echo "Database created successfully<br>";
  
} catch(PDOException $e) {
  echo 'falied' . "<br>" . $e->getMessage();
}

?>