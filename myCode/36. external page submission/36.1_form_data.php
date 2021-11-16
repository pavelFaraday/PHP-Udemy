<?php
if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $userAge = $_POST['age'];
    $customer_list = ['Johnatan', 'Banjove', 'Michel', 'Vanesa']; // image this is customer list in DB

    $min_str_len = 5;
    $max_str_len = 15;

    if (strlen($username) < $min_str_len) {
        echo '<br> Username length should be more then 5! <br>';
    } elseif (strlen($username) > $max_str_len) {
        echo '<br> Username length should be less then 15! <br>';
    } elseif (!in_array($username, $customer_list)) {
        echo '<br>' . $username . ',' . ' you are not registred!';
    } else {
        echo 'Hello ' . $username . '!' . '<br>';
        echo 'Your age is ' . $userAge;
    }

    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>36. External Page submission</title>
</head>

<body>
    <form action="form_process.php" method="POST">
        <input type="text" name="name" />
        <input type="number" name="age" />
        <input type="submit" name="submit" />
    </form>
</body>

</html>