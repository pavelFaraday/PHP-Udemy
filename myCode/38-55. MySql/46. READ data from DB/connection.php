<?php

/* -------------------------------------------------------------------------- */
/*                            1. Connection with DB                           */
/* -------------------------------------------------------------------------- */

/*  
    1. server name - 'localhost'
    2. username - 'root'
    3. password - 'root' (MAMP) || '' (XAMPP)
    4. Database - 'loginapp' 
    */

$connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');

if ($connection) {
    echo 'You are connected!' . '<br>';
} else {
    die('Something went wrong in connection!' . '<br>');
}
