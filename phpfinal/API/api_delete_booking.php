<?php
// Update an existing booking
if ($_SERVER["REQUEST_METHOD"] === "PUT") {
    parse_str(file_get_contents("php://input"), $_PUT);

    $id = $_PUT["id"];
    $trainNumber = $_PUT["train_number"];
    $passengerName = $_PUT["passenger_name"];
    $departureStation = $_PUT["departure_station"];
    $arrivalStation = $_PUT["arrival_station"];

    $stmt = $mysqli->prepare("UPDATE bookings SET train_number = ?, passenger_name = ?, departure_station = ?, arrival_station = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $trainNumber, $passengerName, $departureStation, $arrivalStation, $id);

    if ($stmt->execute()) {
        $response = array("message" => "Booking updated successfully.");
    } else {
        $response = array("error" => "Failed to update booking.");
    }

    header("Content-Type: application/json");
    echo json_encode($response);
}
?>
