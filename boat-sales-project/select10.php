<?php
include("header.php");
?>
<?php

$sql = "SELECT s.SupplierName
        FROM Suppliers s
        JOIN Boats b ON s.SupplierID = b.SupplierID
        JOIN Sales sa ON b.BoatID = sa.BoatID
        GROUP BY s.SupplierID
        ORDER BY COUNT(sa.SaleID) DESC
        LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "10. Supplier whose boats sold the most:<br>";
    while ($row = $result->fetch_assoc()) {
        echo $row["SupplierName"] . "<br>";
    }
} else {
    echo "10. No supplier information available";
}


$conn->close();
?>
