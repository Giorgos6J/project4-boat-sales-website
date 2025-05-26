<?php
include("header.php");
?>


<?php

$sql = "SELECT BoatID, BoatName FROM Sales
        JOIN Boats ON Sales.BoatID = Boats.BoatID
        WHERE MONTH(SaleDate) = 12 AND CategoryID = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "4. Jet Ski Sold in December:<br>";
    while ($row = $result->fetch_assoc()) {
        echo "BoatID: " . $row["BoatID"] . ", BoatName: " . $row["BoatName"] . "<br>";
    }
} else {
    echo "4. No results";
}


$conn->close();
?>