<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
       <tr>
       <th>id</th>
       <th>fname</th>
       <th>lname</th>
       <th>email</th>

       </tr>

   
    
<?php
$servername = "localhost";
$username = 'root';
$password = "mysql";
$dbname = "php";
try{  
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="SELECT * FROM users";
    $results=$conn->query($sql);
    var_dump($results);
    foreach($results as $result){?>


    <?}

}
catch(PDOException $e){
  echo $e->getMessage;
}
$conn=NULL;
?>
 </table>
</body>
</html>