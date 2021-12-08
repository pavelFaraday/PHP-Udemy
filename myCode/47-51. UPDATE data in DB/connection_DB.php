<?php

/* -------------------------------------------------------------------------- */
/*                            1. Connection with DB                           */
/* -------------------------------------------------------------------------- */

$connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');

if (!$connection) {
    die('Something went wrong in connection!' . '<br>');
}
