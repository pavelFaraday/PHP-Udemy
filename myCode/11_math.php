<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11. Math in PHP</title>
</head>

<body>
    <h1>
        <?php
        // Simple Math Operations
        echo 56 * 43;
        echo '<br>';
        echo 80 / 4;
        echo '<br>';
        echo 80 + 4;
        echo '<br>';
        echo 80 - 4;
        echo '<br>';
        echo '<br>';

        // Math Operations Order in PHP
        echo 5 + 5 * 10; // 55
        echo '<br>';
        echo (5 + 5) * 10; // 100
        echo '<br>';
        echo 5 + 5 / 10; // 5.5
        echo '<br>';

        // We can save number in Variables & then make Math calculations
        $num1 = 10;
        $num2 = 5;
        $num3 = 3;
        echo $num1 + $num2 * $num3; // 25
        ?>
    </h1>
</body>

</html>