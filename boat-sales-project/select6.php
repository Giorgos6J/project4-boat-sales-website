<?php
include("header.php");
?>
<?php

$sql = "SELECT COUNT(*) AS LowStockBoats
        FROM Warehouse
        WHERE StockQuantity < 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "6. Number of boats in low stock:<br>";
    $row = $result->fetch_assoc();
    echo $row["LowStockBoats"];
} else {
    echo "6. No boats in low stock";
}


$conn->close();
?>
