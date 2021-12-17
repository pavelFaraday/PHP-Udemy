<?php if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    /* -------------------------------------------------------------------------- */
    /*                            1. Connection with DB                           */
    /* -------------------------------------------------------------------------- */

    $connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');

    if ($connection) {
        echo 'You are connected!' . '<br>';
    } else {
        die('Something went wrong in connection!' . '<br>');
    }


    // How to prevent injection
    // Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection. With this builtin function We make SQL Statements secure
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    // Password Encryption
    $hashFormat = "$2y$10$";
    $salt = "asdfghjklqwertyuiopz22";
    $hashFANDsalt = $hashFormat . $salt;
    $password = crypt($password, $hashFANDsalt);



    /* -------------------------------------------------------------------------- */
    /*                             2. Save Data in DB                             */
    /* -------------------------------------------------------------------------- */

    $query = "INSERT INTO users(username, password) ";
    $query .= "VALUES ('$username', '$password')";
    $result = mysqli_query($connection, $query);



    if (!$result) {
        die('Query Failed!' . mysqli_error($connection));
    } else {
        echo 'Data is Saved';
    }
}
