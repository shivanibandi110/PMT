<?php
 $con = mysqli_connect("localhost", "root","", "pms_project");
/*try {
    $conn = new PDO("mysql:host=localhost;dbname=pms_project", "root");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }*/
 if (!$con) {
    die("not connected");
}
 ?>