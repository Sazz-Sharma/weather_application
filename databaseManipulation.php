<?php 
require 'weatherData.php';
$data = weatherData();
// echo $data['main']['humidity'];
date_default_timezone_set('Asia/Kathmandu');
$current_date = date("Y-m-d");
echo $current_date;
$temperature = ceil($data['main']['temp'] - 273);
$humidity = $data['main']['humidity'];
$windspeed = $data['wind']['speed'];
$atm_pressure = $data['main']['pressure'];
$icon_id = $data['weather'][0]['icon'];
$servername = "localhost";
$username = "root";
$password = "";
$day_arr = array('MON', 'TUE', 'WED', 'THU', 'FRI','SAT','SUN');
$day_val = date("N");


// echo $current_date;

// Create connection
$conn = new mysqli('localhost', 'root', '', 'weather_app');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $insertSql = "INSERT INTO seven_days (Day, Temperature, Humidity,Windspeed,Pressure, DateColumn, iconID)
//               VALUES (?, ?, ?, ?, ?, ?,?)";

// $stmt = $conn->prepare($insertSql);

// if ($stmt) {
//     // Bind parameters and execute the statement
//     $stmt->bind_param("sddddss", $day_arr[$day_val - 1], $temperature, $humidity, $windspeed,$atm_pressure, $current_date, $icon_id);
//     if ($stmt->execute()) {
//         echo "Data inserted successfully.";
//     } else {
//         echo "Error: " . $stmt->error;
//     }
    
//     // Close the statement
//     $stmt->close();
// } else {
//     echo "Error: " . $conn->error;
// }

// $runQuery = "UPDATE seven_days
//             SET Day = ?, Temperature = ?, Humidity = ?, Windspeed = ?, Pressure = ?, iconID = ?
//             WHERE DateColumn = '$current_date'
//             ";

// $stmt2 = $conn->prepare($runQuery);
// if ($stmt2){
//     $stmt2->bind_param("sdddds", $day_arr[$day_val - 1], $temperature, $humidity, $windspeed, $atm_pressure, $icon_id);
//     if($stmt2->execute()){
//         echo "Updated";
//     }
//     else{
//         echo "Error". $stmt2->error;
//     }
//     $stmt2->close();
// }



$sqlCheckDate = "SELECT DateColumn FROM seven_days ORDER BY DateColumn DESC LIMIT 1";
$result = $conn->query($sqlCheckDate);

// echo $current_date;
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $lastDate = $row['DateColumn'];
    
    // echo $row['DateColumn'];
    // echo $lastDate;
    // echo $current_date;

    if ($lastDate == $current_date) {
        // echo $lastDate;
        // Update the last row
        $sqlUpdate = "UPDATE seven_days SET Temperature = ?, Humidity = ?, Windspeed = ?, Pressure = ?, iconID =? WHERE DateColumn = ?";
        $stmt = $conn->prepare($sqlUpdate);
        // Bind parameters and execute the statement
        $stmt->bind_param("ddddss", $temperature, $humidity, $windspeed, $atm_pressure,$icon_id,$current_date);
        $stmt->execute();
        $stmt->close();

    } else {
        // Delete the last row
        $sqlDelete = "DELETE FROM seven_days ORDER BY DateColumn ASC LIMIT 1";
        $stmt = $conn->prepare($sqlDelete);
        $stmt->execute();
        $stmt->close();
        $sqlInsert = "INSERT INTO seven_days (Day, Temperature, Humidity, Windspeed, Pressure, DateColumn, iconID) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sqlInsert);

        $stmt->bind_param("sdddsss", $day_arr[$day_val - 1], $temperature, $humidity, $windspeed, $atm_pressure, $current_date, $icon_id);

        $stmt->execute();
        $stmt->close();
    }
}

$conn->close();

?>
