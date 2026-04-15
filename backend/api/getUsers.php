<?php
include("../config/db.php");

$sql = "SELECT name, age, city FROM users";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['name'] . " - " . $row['age'] . " - " . $row['city'] . "<br>";
}
?>
