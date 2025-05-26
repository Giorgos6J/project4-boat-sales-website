<?php
include("header.php");
?>

<?php
// Establish database connection (Ensure you include the connection logic here)

// 7. Which Poseidon boats are in low stock.
$sql = "SELECT Boats.BoatID, Boats.BoatName, Warehouse.StockQuantity
        FROM Warehouse
        JOIN Boats ON Warehouse.BoatID = Boats.BoatID
        JOIN Suppliers ON Boats.SupplierID = Suppliers.SupplierID
        WHERE Suppliers.SupplierName = 'Poseidon' AND Warehouse.StockQuantity < 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "7. Poseidon Boats in Low Stock:<br>";
    while ($row = $result->fetch_assoc()) {
        echo "BoatID: " . $row["BoatID"] . ", BoatName: " . $row["BoatName"] . ", StockQuantity: " . $row["StockQuantity"] . "<br>";
    }
} else {
    echo "7. No Poseidon boats in low stock";
}

// Close the database connection
$conn->close();
?>
