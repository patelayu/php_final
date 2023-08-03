<?php
// Retrieve all bookings
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $result = $mysqli->query("SELECT * FROM bookings");

    $bookings = array();
    while ($row = $result->fetch_assoc()) {
        $bookings[] = $row;
    }

    header("Content-Type: application/json");
    echo json_encode($bookings);
}
?>
