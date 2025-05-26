<html><head><title>test</title></head>
<body bgcolor = "lightgreen">
<hr>Boat selling store<hr>

    <a href = "select1.php">select 1</a> | <a href = "select2.php">select 2</a> | <a href = "select3.php">select 3 </a> <a href = "select4.php">select 4</a>  <a href = "select5.php">select 5</a>  <a href = "select6.php">select 6</a>  <a href = "select7.php">select 7</a>  <a href = "select8.php">select 8</a>  <a href = "select9.php">select 9</a>  <a href = "select10.php">select 10</a>  <a href = "select11.php">select 11</a> <a href = "select12.php">select 12</a>
<hr>
<?php
$servername = "localhost";
$username = "id21425981_bash1";
$password = "s1s2s3A!";
$dbname = "id21425981_bash1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>