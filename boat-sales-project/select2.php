<?php
include("header.php");
?>


<?php

$sql = "SELECT COUNT(*) AS BoatsStoredLastWeek FROM Warehouse WHERE DateStored >= DATE_SUB(NOW(), INTERVAL 1 WEEK)";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "2. Boats Stored in the Last Week: " . $row["BoatsStoredLastWeek"] . "<br>";
    }
} else {
    echo "2. No results";
}


$conn->close();
?>
