<?php
include("header.php");
?>


<?php


$sql = "SELECT s.SupplierName, COUNT(sa.SaleID) AS TotalSales
        FROM Suppliers s
        LEFT JOIN Boats b ON s.SupplierID = b.SupplierID
        LEFT JOIN Sales sa ON b.BoatID = sa.BoatID
        GROUP BY s.SupplierID, s.SupplierName
        ORDER BY TotalSales DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "11. Number of sales by supplier:<br>";
    while ($row = $result->fetch_assoc()) {
        echo $row["SupplierName"] . ": " . $row["TotalSales"] . " sales<br>";
    }
} else {
    echo "11. No sales information available";
}


$conn->close();
?>
