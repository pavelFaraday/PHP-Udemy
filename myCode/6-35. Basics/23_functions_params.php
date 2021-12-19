<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>23. Functions Parametres | PHP</title>
</head>

<body>
    <?php
    function greeting($message)
    {
        echo $message;
    }

    function calculate($x, $y)
    {
        $sum = $x + $y;
        echo $sum;
    }
    ?>

    <h2><?php greeting('Hello User, You are in Facebook.'); ?></h2>
    <h3>Your are <?php calculate(23, 40); ?> years old.</h3>
</body>

</html>