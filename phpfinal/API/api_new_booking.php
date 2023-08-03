<?php
// Create a new booking
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $trainNumber = $_POST["train_number"];
    $passengerName = $_POST["passenger_name"];
    $departureStation = $_POST["departure_station"];
    $arrivalStation = $_POST["arrival_station"];

    $stmt = $mysqli->prepare("INSERT INTO bookings (train_number, passenger_name, departure_station, arrival_station) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $trainNumber, $passengerName, $departureStation, $arrivalStation);

    if ($stmt->execute()) {
        $response = array("message" => "Booking created successfully.");
    } else {
        $response = array("error" => "Failed to create booking.");
    }

    header("Content-Type: application/json");
    echo json_encode($response);
}
?>
