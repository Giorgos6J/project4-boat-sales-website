<?php
include("header.php");
?>

<?php

$sql = "SELECT c.CategoryName, COUNT(sa.SaleID) AS TotalSales
        FROM Categories c
        LEFT JOIN Boats b ON c.CategoryID = b.CategoryID
        LEFT JOIN Sales sa ON b.BoatID = sa.BoatID
        GROUP BY c.CategoryID, c.CategoryName
        ORDER BY TotalSales DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "12. Number of sales by boat category:<br>";
    while ($row = $result->fetch_assoc()) {
        echo $row["CategoryName"] . ": " . $row["TotalSales"] . " sales<br>";
    }
} else {
    echo "12. No sales information available";
}


$conn->close();
?>