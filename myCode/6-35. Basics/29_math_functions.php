<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>29. Math Functions</title>
</head>

<body>
    <?php
    $power = pow(2, 4); // 16 (2*2*2*2 = 16)
    echo $power . '<br>';
    /* -------------------------------------------------------------------------- */
    $random_num = rand();
    echo $random_num . '<br>'; // 1896469232, 397050180, 1232443356...
    $random_num = rand(1, 1000);
    echo $random_num . '<br>'; // random number from 1 to 1000
    /* -------------------------------------------------------------------------- */
    $square_root = sqrt(81);
    echo $square_root . '<br>'; // 9
    /* -------------------------------------------------------------------------- */
    $ceiling = ceil(4.1888);  // ceil() function rounds a number UP to the nearest integer
    echo $ceiling . '<br>';  // 5
    /* -------------------------------------------------------------------------- */
    $flooring = floor(4.1888);  // floor() function rounds a number DOWN to the nearest integer
    echo $flooring . '<br>';   // 4
    /* -------------------------------------------------------------------------- */
    $rounding = round(4.4966);  // The round() function rounds a floating-point number
    echo $rounding . '<br>';   // 4
    ?>
</body>

</html>