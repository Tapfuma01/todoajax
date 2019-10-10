
<?php

$servername = "167.71.74.228";
$username = "tapfuma";
$password = "Impunity86Eyepiece12carbide";
try {
   $conn = new PDO("mysql:host=$servername;port=3306;dbname=2019BWebIntensive_tapfuma", $username, $password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Connected successfully";
   }
catch(PDOException $e)
   {
   echo "Connection failed: " . $e->getMessage();
   }
?>