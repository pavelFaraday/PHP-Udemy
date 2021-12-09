<?php if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

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

    /* -------------------------------------------------------------------------- */
    /*                             2. Save Data in DB                             */
    /* -------------------------------------------------------------------------- */

    /*
    users - table in DB (loginapp)
    username, password - Those columns in the database, where we want the data to be saved
    "$username", "$password" - Those Data, that we want to save in DB 

    $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";

    mysqli_query($connection, $query) --- mysqli_query() function performs a query against a database.
    */

    $query = "INSERT INTO users(username, password) ";
    $query .= "VALUES ('$username', '$password')";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed!' . mysqli_error($connection));
    } else {
        echo 'Data is Saved';
    }
}
