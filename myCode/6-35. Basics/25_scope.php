<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>25. Global & Local Scope</title>
</head>

<body>
    <?php

    $x = 100; // global 

    function convert()
    {
        global $x; // $x - convert into global variable 
        $x = 15;
    }

    $scope_link_PHP = 'https://www.php.net/manual/en/language.variables.scope.php';

    ?>


    <h1><?php echo $x; ?></h1> <!-- 100 -->
    <h2><?php convert(); ?></h2> <!-- with this function local variable - $x is converted/modified to global -->
    <h3><?php echo $x; ?></h3> <!-- 15 -->

    <a href="<?php echo $scope_link_PHP; ?>" target="_blank">See Scope in PHP Official Guide</a>
</body>

</html>