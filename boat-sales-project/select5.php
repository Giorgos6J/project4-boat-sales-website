<?php
include("header.php");
?>

<?php

$sql = "SELECT COUNT(*) AS MercuryBoatsSold
        FROM Sales
        JOIN Boats ON Sales.BoatID = Boats.BoatID
        JOIN Suppliers ON Boats.SupplierID = Suppliers.SupplierID
        WHERE Suppliers.SupplierName = 'Mercury' AND MONTH(Sales.SaleDate) = 12";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "5. Number of Mercury company boats sold in December:<br>";
    $row = $result->fetch_assoc();
    echo $row["MercuryBoatsSold"];
} else {
    echo "5. No Mercury company boats sold in December";
}


$conn->close();
?>
