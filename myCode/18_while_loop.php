<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>18. While Loop | PHP </title>
</head>

<body>
    <?php

    /* 
    The while loop executes a block of code as long as the specified condition is true.

    $i = 1; - Initialize the loop counter ($i), and set the start value to 1
    $i <= 10 - Continue the loop as long as $i is less than or equal to 10
    $i++; - Increase the loop counter value by 1 for each iteration
    */

    $x = 1;
    while ($x <= 10) {
        echo $x . '<br>';
        $x++;
    }

    echo '<br><br><br>';

    $i = 1;
    while ($i <= 10) {
        echo 'This thext will printed 10 times <br>';
        $i++; // $i = $i + 1;  OR  $i += 1;
    }

    ?>
</body>

</html>