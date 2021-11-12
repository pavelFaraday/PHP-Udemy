<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>15. If Statement | PHP Udemy</title>
</head>

<body>
    <?php
    if (3 > 10) {
        echo '3 is greater than 10';
    } elseif (3 == 10) {
        echo '3 equals to 10';
    } else {
        echo '<h2>' . '3 is less than 10' . '</h2>';
    }
    ?>
</body>

</html>