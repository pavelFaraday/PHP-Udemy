<?php

/* -------------------------------------------------------------------------- */
/*                                 Set Cookies                                */
/* -------------------------------------------------------------------------- */

// The time() function is a built-in function in PHP which returns the current time measured in the number of seconds since the Unix Epoch. The number of seconds can be converted to the current date using date() function in PHP.

// This is only one cookie
$name = "CookieName";
$value = 100;
$expiration = time() + (60 * 60 * 24 * 7); // 1 week from current time
// cookie name, value, expiration period
setcookie($name, $value, $expiration);
// This is only one cookie

// WE CAN SET MULTIPLE COOKIES!

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>62. Cookies | PHP Udemy</title>
</head>

<body>

    <?php
    /* -------------------------------------------------------------------------- */
    /*                                Read Cookies                                */
    /* -------------------------------------------------------------------------- */

    if (isset($_COOKIE["CookieName"])) {
        $someOne = $_COOKIE["CookieName"];
        echo $someOne;  // 100
    } else {
        $someOne = 'Cookie is not set!';
        echo $someOne;
    }

    ?>

</body>

</html>