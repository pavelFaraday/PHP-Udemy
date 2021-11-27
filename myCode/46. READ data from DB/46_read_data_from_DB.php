<?php

if (isset($_POST['submit'])) {
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

/* -------------------------------------------------------------------------- */
/*                              READ Data from DB                             */
/* -------------------------------------------------------------------------- */

$queryRead = 'SELECT * from users';
$resultRead = mysqli_query($connection, $queryRead);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>46. Read data from DB | PHP Udemy</title>
</head>

<body>
    <div class="container">
        <div class="col-sm-6 mx-auto mt-4">
            <form action="46_read_data_from_DB.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="col-sm-9 mx-auto mt-4">
            <?php
            while ($row = mysqli_fetch_assoc($resultRead)) {
            ?>
                <pre>
                    <?php
                    print_r($row);
                    ?>
                </pre>
            <?php
            }
            ?>
        </div>
    </div>


    <!-- Boostrap JavaScript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>