
<?php 

include('config/config.php');

    $config = new Config();


    if(isset($_REQUEST['btn_submit'])) {
        $train_number = $_REQUEST['train_number'];
        $passenger_name = $_REQUEST['passenger_name'];
        $departure_station = $_REQUEST['departure_station'];
        $arrival_station = $_REQUEST['arrival_station'];

       $res =  $config->insert_recode($train_number,$passenger_name,$departure_station,$arrival_station);

      
       if($res) {
        header("Location: success.php");
    } else {
        echo "Student insertion failed...";
    }
        
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Railway Train Booking System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        form {
            margin: 20px auto;
            /* height: 300px; */
            width: 300px;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }
        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        table {
            /* padding: 8px; */
            margin: 50px auto;
            border-collapse: collapse;
        }
        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">   
</head>
<body>
    <h1>Railway Train Booking System</h1>
<div class="mb-3">
<form method="GET" action="">
        <input type="text" name="train_number" placeholder="Train Number" required>
        <input type="text" name="passenger_name" placeholder="Passenger Name" required>
        <input type="text" name="departure_station" placeholder="Departure Station" required>
        <input type="text" name="arrival_station" placeholder="Arrival Station" required>
        <input type="submit" name="btn_submit"value="Book Train">
    </form>
    </div>
  

    <!-- <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Train Number</th>
                <th>Passenger Name</th>
                <th>Departure Station</th>
                <th>Arrival Station</th>
            </tr>
        </thead> -->
        <!-- <tbody> -->
            <?php 
            // $bookings = json_decode(file_get_contents("config/config.php"), true);
            // foreach ($bookings as $booking) {
                // echo "<tr>";
                // echo "<td>{$booking['id']}</td>";
                // echo "<td>{$booking['train_number']}</td>";
                // echo "<td>{$booking['passenger_name']}</td>";
                // echo "<td>{$booking['departure_station']}</td>";
                // echo "<td>{$booking['arrival_station']}</td>";
                // echo "</tr>";
            // }
            // ?>
        <!-- </tbody> -->
    <!-- </table> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
