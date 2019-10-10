<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">
    <link href="css/styles.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Text|Fira+Sans|PT+Sans+Narrow|Roboto+Mono&display=swap" rel="stylesheet">
    <style type="text/css">
        body{ font: 14px sans-serif; 
              text-align: center; 
              background:url(https://image.freepik.com/free-photo/bright-bursting-vibrant-yellow-powder_23-2148209012.jpg);
              background-size:cover;
              color:white;
              
              /* font-family: 'Roboto Mono', monospace;
            font-family: 'Big Shoulders Text', cursive;
            font-family: 'PT Sans Narrow', sans-serif; */
            font-family: 'Fira Sans', sans-serif;
              }
        h1{font-family: 'Roboto Mono', monospace;
        color:black;
        }
        .size{
            font-size:16px;
        }
        .image{
           
            width:380px;
            margin-left:auto;
            margin-right:auto;
            margin-top:-1%;
        }
        .card-title{
            width:380px;
            margin-left:auto;
            margin-right:auto;
            

        }
        .todo{
            font-size:30px;
            color:black;
            margin-right:16%;
        }
        .card{
            margin-top:10%;
               
            }
        
        
    </style>
</head>
<body>

  
        <!-- <h1>AWE!! <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to the</h1> -->
    </div>
    <?php

//index.php



</html>