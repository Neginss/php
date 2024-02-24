<?php

//first 
$servername="localhost";
$username="root";
$userpassworde="mysql";


try{
    //by pod connection in database
   $conn=new PDO("mysql:host=$servername;dbname=php",$username,$userpassworde);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "database created successfully";
}
catch(PDOException $e){

    echo $e->getMessage();

}