<?php
$servername = "localhost";
$username = 'root';
$password = "mysql";
$dbname = "php";
try{

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (firstName, lastName, email) VALUES ('Sea', 'baziar', 'sea1383.baziar@gmail.com')";
    $conn->exec($sql);
    echo "new record created successfully";
}
catch(PDOException $e){

    echo $e->getMessage();

}
$conn = null;