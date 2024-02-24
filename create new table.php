<?php
//first 
$servername="localhost";
$username="root";
$password="mysql";
$dbname="php";
 try{

     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "CREATE TABLE price(id INT(6) AUTO_INCREMENT PRIMARY KEY,firstName VARCHAR(30) NOT NULL,
     lastName VARCHAR(30) NOT NULL,email VARCHAR(50))";
     $conn->exec($sql);
     echo "table created successfully";
 } 
 catch(PDOException $e){
     echo $e->getMessage();

 }
 $conn = null;










