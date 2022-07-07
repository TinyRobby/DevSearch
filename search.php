<?php
//$sql = "SELECT * FROM searces WHERE frontname =";
//if($result = mysqli_query($link, $sql)){
//    if(mysqli_num_rows($result) > 0){
//        echo "<table>";
//            echo "<tr>";
//                echo "<th>id</th>";
//            echo "<th>first_name</th>";
//              echo "<th>last_name</th>";
//              echo "<th>email</th>";
//              echo "</tr>";
//    while($row = mysqli_fetch_array($result)){
//          echo "<tr>";
//              echo "<td>" . $row['id'] . "</td>";
//              echo "<td>" . $row['first_name'] . "</td>";
//              echo "<td>" . $row['last_name'] . "</td>";
//              echo "<td>" . $row['email'] . "</td>";
//          echo "</tr>";
//      }
//      echo "</table>";
//      // Free result set
//      mysqli_free_result($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
<h1>Search</h1>
<input type="text" id="searchbar"></input><input type="button" value="Search" id="searchbutton" onclick="search()"></input>
</body>
</html>