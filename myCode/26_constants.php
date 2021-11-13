<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>25. Constants</title>
</head>

<body>
    <?php
    $x = 100;
    $x = 23;
    $x = 'Hello';
    echo $x . '<br>'; // Hello

    /* -------------------- Method 1 - define constants -------------------- */

    // define CONSTANT
    define('AGE', 35);
    echo AGE; // 35

    echo '<br>';

    // AGE = 1; // ERROR
    // define('AGE', 35); // We cannot redefine constant ! it will be the same as first 
    echo AGE;
    echo '<br>';

    /* -------------------- Method 2 - use const keyword -------------------- */

    const GENDER = 'male';
    echo GENDER;

    echo '<br>';

    /* ----------------------------- CONSTANT arrays ---------------------------- */

    const ANIMALS = ['dog', 'cat', 'bird'];
    echo ANIMALS[1];

    echo '<br>';

    define('ANIMALS2', array('hoarse', 'monkey', 'rabbit'));
    echo ANIMALS2[2]; // rabbit

    ?>

</body>

</html>