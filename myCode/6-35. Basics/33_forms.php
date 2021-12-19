<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>33. Forms </title>
</head>

<!-- 
https://www.tutorialspoint.com/php/php_get_post.htm

PHP $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables.

The example below shows a form with an input field and a submit button. When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the <form> tag. In this example, we point to the file itself for processing form data. If you wish to use another PHP file to process form data, replace that with the filename of your choice. Then, we can use the super global variable $_POST to collect the value of the input field
-->

<body>
    <!-- ---------------------------- PHP $_GET Method ---------------------------- -->

    <?php
    /*
    if ($_GET["name"] || $_GEeT["age"]) {
        echo "Welcome " . $_GET['name'] . "<br />";
        echo "You are " . $_GET['age'] . " years old.";

        exit();
    }
    */
    ?>
    <!-- <form action="<?php $_PHP_SELF ?>" method="GET">
        Name: <input type="text" name="name" />
        Age: <input type="text" name="age" />
        <input type="submit" />
    </form> -->

    <!-- ---------------------------- PHP $_POST Method ---------------------------- -->

    <?php
    if ($_POST["name"] || $_POST["age"]) {
        if (preg_match("/[^A-Za-z'-]/", $_POST['name'])) {
            die("invalid name and name should be alpha");
        } elseif (isset($_POST["submit"])) {
            echo "It works! <br>";
        }
        echo "Welcome " . $_POST['name'] . "<br />";
        echo "You are " . $_POST['age'] . " years old.";

        exit();
    }
    ?>

    <form action="<?php $_PHP_SELF ?>" method="POST">
        Name: <input type="text" name="name" />
        Age: <input type="text" name="age" />
        <input type="submit" name="submit" />
    </form>

</body>

</html>