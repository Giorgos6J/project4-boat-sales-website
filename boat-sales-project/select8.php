<?php
include("header.php");
?>

<?php

$sql = "SELECT CustomerName
        FROM Customers
        WHERE MONTH(Birthday) = 3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "8. Customers with birthdays in March:<br>";
    while ($row = $result->fetch_assoc()) {
        echo $row["CustomerName"] . "<br>";
    }
} else {
    echo "8. No customers with birthdays in March";
}


$conn->close();
?>
