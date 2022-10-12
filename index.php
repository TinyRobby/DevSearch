<?php 
    require 'db-connect.php';
    //Just
    //A
    //Spacer
?>
<!DOCTYPE html>
<html>
<head>
     <?php $version = 1 ?> 
     <style>
        body {
            background-color: limegreen;
            color: coral;
            font-family: Arial, sans-serif;
        }
    </style>
     <title>DevSearch</title>
</head>
<body> 
    <h1>DevSearch is on version <?php echo $version; ?></h1>
    <a href="search.php">Search</a>
</body>
</html>