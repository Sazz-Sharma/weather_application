<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
<?php 
// include 'datafromsql.php';
// include 'databaseManipulation.php';
require "datafromsql.php";
require "databaseManipulation.php";
?>
    <a href="index.html">
        <div id="stack" class="normal grow">
            <img src="stack-of-square-papers.png" alt="stack">
        </div>
    </a>
<div id="weekpanel" class="flex none">
    <div class="eachpanel">
        <div class="date"><?php echo $date_column[0] ?></div>
        <div class="photo">
            <img src="<?php echo "https://openweathermap.org/img/wn/" . $iconId[0] . "@2x.png"; ?>" alt="clouds">
        </div>
        <div class="citydetails">
            <div class="upper">
                <div class="country">
                    GB
                </div>
                <div class="temperature">
                    <?php echo $temp[0] ?> C
                </div>
            </div>
            <div class="lower">
                Harrogate
            </div>
        </div>
        <div class="details">
            <div class="winds">
                <div class="img">
                    <img src="wind.png" alt="wind">
                </div>
                <div class="text">
                <?php echo $speed[0]?> m/s
                </div>
            </div>
            <div class="winds">
                <div class="img">
                    <img src="humidity.png" alt="humidity">
                </div>
                <div class="text">
                <?php echo $humid[0]?>%
                </div>
            </div>
            <div class="winds">
                <div class="img">
                    <img src="barometer-.png" alt="pressure">
                </div>
                <div class="text">
                <?php echo $pressure[0] ?>hPa
                </div>
            </div>
        </div>
    </div>


    <div class="eachpanel">
        <div class="date"><?php echo $date_column[1] ?></div>
        <div class="photo">
            <img src="<?php echo "https://openweathermap.org/img/wn/" . $iconId[1] . "@2x.png"; ?>" alt="clouds">
        </div>
        <div class="citydetails">
            <div class="upper">
                <div class="country">
                    GB
                </div>
                <div class="temperature">
                    <?php echo $temp[1] ?> C
                </div>
            </div>
            <div class="lower">
                Harrogate
            </div>
        </div>
        <div class="details">
            <div class="winds">
                <div class="img">
                    <img src="wind.png" alt="wind">
                </div>
                <div class="text">
                <?php echo $speed[1] ?> m/s
                </div>
            </div>
            <div class="winds">
                <div class="img">
                    <img src="humidity.png" alt="humidity">
                </div>
                <div class="text">
                <?php echo $humid[1] ?>%
                </div>
            </div>
            <div class="winds">
                <div class="img">
                    <img src="barometer-.png" alt="pressure">
                </div>
                <div class="text">
                    <?php echo $pressure[1] ?>hPa
                </div>
            </div>
        </div>
    </div>




    <div class="eachpanel">
        <div class="date"><?php echo $date_column[2] ?></div>
        <div class="photo">
            <img src="<?php echo "https://openweathermap.org/img/wn/" . $iconId[2] . "@2x.png"; ?>" alt="clouds">
        </div>
        <div class="citydetails">
            <div class="upper">
                <div class="country">
                    GB
                </div>
                <div class="temperature">
                    <?php echo $temp[2] ?> C
                </div>
            </div>
            <div class="lower">
                Harrogate
            </div>
        </div>
        <div class="details">
            <div class="winds">
                <div class="img">
                    <img src="wind.png" alt="wind">
                </div>
                <div class="text">
                <?php echo $speed[2] ?>m/s
                </div>
            </div>
            <div class="winds">
                <div class="img">
                    <img src="humidity.png" alt="humidity">
                </div>
                <div class="text">
                <?php echo $humid[2] ?>%
                </div>
            </div>
            <div class="winds">
                <div class="img">
                    <img src="barometer-.png" alt="pressure">
                </div>
                <div class="text">
                    <?php echo $pressure[2] ?> hPa
                </div>
            </div>
        </div>
    </div>




    <div class="eachpanel">
        <div class="date"><?php echo $date_column[3] ?></div>
        <div class="photo">
            <img src="<?php echo "https://openweathermap.org/img/wn/" . $iconId[3] . "@2x.png"; ?>" alt="clouds">
        </div>
        <div class="citydetails">
            <div class="upper">
                <div class="country">
                    GB
                </div>
                <div class="temperature">
                    <?php echo $temp[3] ?>
                </div>
            </div>
            <div class="lower">
                Harrogate
            </div>
        </div>
        <div class="details">
            <div class="winds">
                <div class="img">
                    <img src="wind.png" alt="wind">
                </div>
                <div class="text">
                <?php echo $speed[3] ?>m/s
                </div>
            </div>
            <div class="winds">
                <div class="img">
                    <img src="humidity.png" alt="humidity">
                </div>
                <div class="text">
                <?php echo $humid[3] ?>%
                </div>
            </div>
            <div class="winds">
                <div class="img">
                    <img src="barometer-.png" alt="pressure">
                </div>
                <div class="text">
                    <?php echo $pressure[3]?> hPa
                </div>
            </div>
        </div>
    </div>



    <div class="eachpanel">
        <div class="date"><?php echo $date_column[4] ?></div>
        <div class="photo">
            <img src="<?php echo "https://openweathermap.org/img/wn/" . $iconId[4] . "@2x.png"; ?>" alt="clouds">
        </div>
        <div class="citydetails">
            <div class="upper">
                <div class="country">
                    GB
                </div>
                <div class="temperature">
                    <?php echo $temp[4] ?> C
                </div>
            </div>
            <div class="lower">
                Harrogate
            </div>
        </div>
        <div class="details">
            <div class="winds">
                <div class="img">
                    <img src="wind.png" alt="wind">
                </div>
                <div class="text">
                <?php echo $speed[4] ?>m/s
                </div>
            </div>
            <div class="winds">
                <div class="img">
                    <img src="humidity.png" alt="humidity">
                </div>
                <div class="text">
                <?php echo $humid[4] ?>%
                </div>
            </div>
            <div class="winds">
                <div class="img">
                    <img src="barometer-.png" alt="pressure">
                </div>
                <div class="text">
                    <?php echo $pressure[4]?> hPa
                </div>
            </div>
        </div>
    </div>



    <div class="eachpanel">
        <div class="date"><?php echo $date_column[5] ?></div>
        <div class="photo">
        <img src="<?php echo "https://openweathermap.org/img/wn/" . $iconId[5] . "@2x.png"; ?>" alt="clouds">
        </div>
        <div class="citydetails">
            <div class="upper">
                <div class="country">
                    GB
                </div>
                <div class="temperature">
                    <?php echo $temp[5] ?> C
                </div>
            </div>
            <div class="lower">
                Harrogate
            </div>
        </div>
        <div class="details">
            <div class="winds">
                <div class="img">
                    <img src="wind.png" alt="wind">
                </div>
                <div class="text">
                <?php echo $speed[5] ?>m/s
                </div>
            </div>
            <div class="winds">
                <div class="img">
                    <img src="humidity.png" alt="humidity">
                </div>
                <div class="text">
                <?php echo $humid[5] ?>%
                </div>
            </div>
            <div class="winds">
                <div class="img">
                    <img src="barometer-.png" alt="pressure">
                </div>
                <div class="text">
                    <?php echo $pressure[5] ?>hPa
                </div>
            </div>
        </div>
    </div>





    <div class="eachpanel">
        <div class="date"><?php echo $date_column[6] ?></div>
        <div class="photo">
            <img src="<?php echo "https://openweathermap.org/img/wn/" . $iconId[6] . "@2x.png"; ?>" alt="clouds">
        </div>
        <div class="citydetails">
            <div class="upper">
                <div class="country">
                    GB
                </div>
                <div class="temperature">
                    <?php echo $temp[6] ?> C
                </div>
            </div>
            <div class="lower">
                Harrogate
            </div>
        </div>
        <div class="details">
            <div class="winds">
                <div class="img">
                    <img src="wind.png" alt="wind">
                </div>
                <div class="text">
                <?php echo $speed[6] ?>m/s
                </div>
            </div>
            <div class="winds">
                <div class="img" >
                    <img src="humidity.png" alt="humidity">
                </div>
                <div class="text">
                <?php echo $humid[6] ?>%
                </div>
            </div>
            <div class="winds">
                <div class="img">
                    <img src="barometer-.png" alt="pressure">
                </div>
                <div class="text">
                    <?php echo $pressure[6]?> hPa
                </div>
            </div>
        </div>
    </div>






</div>


</body>
</html>