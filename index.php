<!DOCTYPE html>
<html lang="hu">
<head>
  <title>Dobos Levente</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>
​
<div class="p-5 bg-primary text-white text-center">
  <h1>Dobos Levente Webáruháza</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>
​
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="webaruhaz/index.php" target="_blank">Webáruház</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
​<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webaruhaz";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect() );
}
echo "Az adatbázishoz kapcsolódtam!". "<br>"."<br>";
$sql = "SELECT * FROM termek";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["id"]. " ". $row["termek_neve"]. " " . $row["kategoria"] . " " . $row["termek_ara"]. " ". $row["termek_kepe_nagy"]. " ". $row["termek_kepe_kicsi"]. " ". $row["mennyiseg"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</body>
</html>