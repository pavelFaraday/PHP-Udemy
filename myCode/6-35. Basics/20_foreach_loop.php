<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>20. Foreach Loop | PHP</title>
</head>

<body>
    <?php
    // Works fine with Arrays

    $numbers = [1, 12, 14, 76, 536, 7288, 100];

    foreach ($numbers as $numItem) {
        echo $numItem . '<br>';
    }

    echo '<br><br><br><br>';

    foreach ($numbers as $numItem2) {
        echo $numItem2 * 100 . '<br>';
    }
    ?>
</body>

</html>