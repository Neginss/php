<?php
//first define
$servername = "localhost";
$username = 'root';
$password = "mysql";

try{
    // this part we do not have bdname becuse we want craete new database
    $conn = new PDO("mysql:host=$servername;", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //create
    $sql = "CREATE DATABASE pdo";
    //execution(run)
    $conn->exec($sql);
    echo "database created successfully";
}
catch(PDOException $e){

    echo $e->getMessage();

}
//this part is normal
$conn = null;