<?php
include("header.php");
?>
<?php

$sql = "SELECT CustomerName
        FROM Customers
        WHERE MONTH(Birthday) = 5 OR MONTH(NameDay) = 5";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "9. Customers with birthdays or name days in May:<br>";
    while ($row = $result->fetch_assoc()) {
        echo $row["CustomerName"] . "<br>";
    }
} else {
    echo "9. No customers with birthdays or name days in May";
}


$conn->close();
?>
