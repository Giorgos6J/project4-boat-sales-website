<?php
include("header.php");
?>


<?php

$sql = "SELECT BoatID, BoatName FROM Warehouse
        JOIN Boats ON Warehouse.BoatID = Boats.BoatID
        WHERE MONTH(DateStored) = 11";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "3. Boats Stored in the Warehouse in November:<br>";
    while ($row = $result->fetch_assoc()) {
        echo "BoatID: " . $row["BoatID"] . ", BoatName: " . $row["BoatName"] . "<br>";
    }
} else {
    echo "3. No results";
}


$conn->close();
?>