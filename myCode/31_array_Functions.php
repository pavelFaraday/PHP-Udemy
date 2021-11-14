<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>31. Array Functions</title>
</head>

<body>
    <?php
    $myArray = [78, 1, 2, 90, 78, 100, 1898989898, 0.1];
    /* -------------------------------------------------------------------------- */
    echo max($myArray); // 1898989898 - highest number
    echo '<br>';
    echo min($myArray); // 0.1 - highest number
    echo '<br>';
    /* -------------------------------------------------------------------------- */
    print_r($myArray); // Array ( [0] => 78 [1] => 1 [2] => 2 [3] => 90 [4] => 78 [5] => 100 [6] => 1898989898 [7] => 0.1 )
    echo '<br>';
    /* -------------------------------------------------------------------------- */
    $result = sort($myArray); // sort array from lowest to highest number
    echo $result;
    echo '<br>';

    ?>
</body>

</html>