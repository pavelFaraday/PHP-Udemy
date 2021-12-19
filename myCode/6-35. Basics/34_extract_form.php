<!-- 
isset(), unset()

* What is Isset in PHP?
The isset() function is an inbuilt function in PHP which checks whether a variable is set (not empty) and is not NULL. This function also checks if a declared variable, array or array key has null value, if it does, isset() returns false, it returns true in all other possible cases.

Determine if a variable is considered set, this means if a variable is declared and is different than null.

If a variable has been unset with the unset() function, it is no longer considered to be set.
-->

<?php
if (isset($_POST["submit"])) {
    $username =  $_POST['name'];
    $userage = $_POST['age'];

    echo "It works! <br>";
    echo "Welcome " . $username . "<br />";
    echo "You are " . $userage . " years old.";

    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>34. Extracting info from Forms </title>
</head>

<body>

    <form action="<?php $_PHP_SELF ?>" method="POST">
        Name: <input type="text" name="name" />
        Age: <input type="text" name="age" />
        <input type="submit" name="submit" />
    </form>

</body>

</html>