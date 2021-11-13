<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>24. return values from functions | return keyword</title>
</head>

<body>
    <?php
    function calculate($x, $y)
    {
        $sum = $x + $y;
        return $sum;
    }
    $result = calculate(10, 50);
    $refined_result = $result / 2;
    $result = calculate(33, $refined_result);
    $result2 = calculate(100, $result);
    ?>

    <h3>Your are <?php echo $refined_result; ?> years old.</h3> <!-- 30  -->
    <h4><?php echo $result; ?></h4> <!-- 63 || 33 + (50 +  10) / 2  -->
    <h4><?php echo $result2; ?></h4> <!-- 163  || 100 + 63  -->
</body>

</html>