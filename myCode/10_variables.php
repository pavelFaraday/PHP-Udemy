<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>

<body>
    <?php
    $name = 'Giorgi';
    $age = 32;
    $AGE = 32; // $age is not equal to $AGE, they are different
    $GENDER = 'male';
    $main_job = 'Programmer';
    $cityLives = 'Tbilisi';
    $sentanse =  '<h1>My name is Giorgi</h1>';

    // concatination
    echo $name . ' ' . $age . ' ' . $main_job;

    // assine HTML tags to PHP variables
    echo $sentanse;


    ?>
</body>

</html>