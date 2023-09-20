<?php
$conn = new mysqli('localhost', 'root', '', 'weather_app');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM seven_days";

$result = $conn->query($sql);

// Initialize arrays for each field
$dayArray = array();
$temp = array();
$humid = array();
$speed = array();
$pressure = array();
$data_column = array();
$iconId = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Add each value to the respective array
        $dayArray[] = $row['Day'];
        $temp[] = $row['Temperature'];
        $humid[] = $row['Humidity'];
        $speed[] = $row['Windspeed'];
        $pressure[] = $row['Pressure'];
        $date_column[] = $row['DateColumn'];
        $iconId[] = $row['iconID'];
    }
} else {
    echo "No results found.";
}

// Close the connection
$conn->close();

// Print the arrays (for demonstration purposes)

?>