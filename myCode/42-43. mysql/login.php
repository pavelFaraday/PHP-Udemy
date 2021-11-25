<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 1. server name - 'localhost'
    // 2. username - 'root'
    // 3. password - 'root' (MAMP) || '' (XAMPP)
    // 4. Database - 'loginapp'
    $connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');

    if ($connection) {
        echo 'You are connected!' . '<br>';
    } else {
        die('Something went wrong in connection!' . '<br>');
    }

    /* 
    if ($username && $password) {
        echo $username . '<br>' . $password;
    } else {
        echo 'Please, Enter username & password!';
    } 
    */
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>42-44. Connecting to DB | PHP Udemy</title>
</head>

<body>
    <div class="container">
        <div class="col-sm-4 mx-auto mt-4">
            <form action="login.php" method="post">
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

    <!-- Boostrap JavaScript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>