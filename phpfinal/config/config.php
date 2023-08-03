<?php

class Config {
// Database configuration
private $host = "localhost";
private $username = "root";
private $password = "";
private $database = "examdb";
private $train_booking_system = "train_booking_system";
public $conn;

// Create a new instance of MySQLi
// $mysqli = new mysqli($host, $username, $password, $database);

public function connect() {
    $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);  

    return $this->conn; // bool
}

public function insert_recode($train_number, $passenger_name, $departure_station, $arrival_station) {
    $this->connect();

    $query = "INSERT INTO $this->train_booking_system(train_number, passenger_name, departure_station, arrival_station) VALUES($train_number,' $passenger_name', '$departure_station', '$arrival_station');";

    $res = mysqli_query($this->conn, $query);  

    return $res;  // bool
}
}

?>
