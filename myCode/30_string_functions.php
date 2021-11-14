<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>30. String Functions</title>
</head>

<body>
    <?php
    $myString = 'Hello student. Do you like a class?';
    /* -------------------------------------------------------------------------- */
    echo strlen($myString); // 35 - string length including empty spaces 
    echo '<br>';
    /* -------------------------------------------------------------------------- */
    echo strtoupper($myString); // HELLO STUDENT. DO YOU LIKE A CLASS?
    echo '<br>';
    /* -------------------------------------------------------------------------- */
    echo strtolower($myString); // hello student. do you like a class?
    echo '<br>';


    ?>
</body>

</html>