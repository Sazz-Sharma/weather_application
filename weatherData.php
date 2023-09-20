<?php
// Include your API key and other configuration settings
function weatherData(){

$apiKey = '7a75e0b1e45067b2b3f1792be43e1e10';
$lat = 53.9921491;
$lon = -1.5391039;
$city = 'Harrogate';


$apiUrl = "https://api.openweathermap.org/data/2.5/weather?lat=$lat&lon=$lon&appid=$apiKey";

$response = file_get_contents($apiUrl);

if ($response) {
    $data = json_decode($response, true);
    if ($data) {
        return $data;  
    } else {
        echo "Failed to decode JSON data.";
    }
} else {
    echo "Failed to fetch data from the API.";
}
}





// http://api.openweathermap.org/geo/1.0/direct?q=harrogate&limit=1&appid=7a75e0b1e45067b2b3f1792be43e1e10
// Fetch data from the API
// $response = file_get_contents($apiUrl);
// $data = json_decode($response, true);
// echo $data;


// $apiUrl = 'http://api.openweathermap.org/data/2.5/weather?q=your_city&units=metric&appid=your_api_key';

// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, $apiUrl);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// $response = curl_exec($curl);

// if ($response) {
//     $data = json_decode($response, true);
//     if ($data) {
//         // Process the JSON data
//     } else {
//         echo "Failed to decode JSON data.";
//     }
// } else {
//     echo "Failed to fetch data from the API.";
// }

// curl_close($curl);






// if ($data) {
//     // Extract relevant weather data
//     $city = $data['name'];
//     $date = $data('Y-m-d');
//     $condition = $data['weather'][0]['description'];
//     $temperature = $data['main']['temp'];
//     $pressure = $data['main']['pressure'];
//     $windSpeed = $data['wind']['speed'];
//     $humidity = $data['main']['humidity'];

//     // Connect to the MySQL database
//     $dbHost = 'localhost';
//     $dbUser = 'root';
//     $dbPassword = '';
//     $dbName = 'weather_app';
    
//     $conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     // Insert data into the database
//     $sql = "INSERT INTO weather_data (city, date, condition, temperature, pressure, wind_speed, humidity)
//             VALUES ('$city', '$date', '$condition', $temperature, $pressure, $windSpeed, $humidity)";

//     if ($conn->query($sql) === TRUE) {
//         echo "Weather data stored successfully!";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }

//     $conn->close();
// }



// else{
//     echo "Failed to fetch weather data.";
// }

?>
