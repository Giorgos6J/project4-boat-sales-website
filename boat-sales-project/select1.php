<?php
include("header.php");
?>


<?php

$sql = "SELECT COUNT(*) AS TotalBoatsInStock FROM Warehouse";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "1. Total Boats in Stock: " . $row["TotalBoatsInStock"] . "<br>";
    }
} else {
    echo "1. No results";
}


$conn->close();
?>
