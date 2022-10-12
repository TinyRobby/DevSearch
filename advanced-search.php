<!DOCTYPE html>
<?php 
require "C:\Users\Robby Davis\Documents\DevSearch\db-connect.php";
?>
<html lang="en">
<head>
    <style src=style.css></style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Search</title>
    <script type="text/javascript">
    baseURL=document.URL;
    function search() {
        let search_bar = document.getElementById("searchbar").value;
        console.log(search_bar);
        const URL = baseURL.split('?');
        window.location.replace(`${URL[0]}?sb=${search_bar}&id`);
    }
</script>
</head>
<body>
    <div class=uno>
<h1>Advanced Search</h1>
<input type="text" id="searchbar" name="sb"></input><input type="button" value="Search" id="searchbutton" onclick="search()"></input>
    </div>
<pre type=tab>
    <div class=dos>
<h3>Results:</h3>
<hr></hr>
<?php
$sql = "SELECT * FROM searces WHERE frontname OR id OR backname LIKE '%" . $_GET['sb']."%'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id:</th>";
            echo "<th>Name:</th>";
              echo "<th>Backend-name:</th>";
              echo "<th>URL:</th>";
              echo "</tr>";
    }
    while($row = mysqli_fetch_array($result)){
          $url = $row['daURL'];
          $name = $row['frontName'];
          echo "<tr>";
              echo "<td>" . $row['id'] . "</td>";
              echo "<td>" . $row['frontName'] . "</td>";
              echo "<td>" . $row['backName'] . "</td>";
              echo "<td>" . $row['daURL'] . "</td></a>";
          echo "</tr>";
      }
      echo "</table>";
       // Free result set
      mysqli_free_result($result);
    } else{
        echo "<p>No records matching your query were found, or there was an error\nerror: ". mysqli_error($link). "</p>";
    }
?>
<a href="<?php $url ?>"><?php $name?></a>
</div>    
</body>
</html>