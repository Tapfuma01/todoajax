

<?php
//database_connection.php

$connect = new PDO("mysql:host=localhost;dbname=todoajax", "root", "");

 session_start();

 $_SESSION["user_id"] = "1";

?>

