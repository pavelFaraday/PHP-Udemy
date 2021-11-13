<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>22. Defining Functions | PHP</title>
</head>

<body>
    <?php
    function say_something()
    {
        echo '<br> I am Function & I am Logic';
    }
    say_something();

    /* -------------------------------------------------------------------------- */

    function tellMeYourAge()
    {
        echo 'My age is ';
    }

    function calculate()
    {
        echo 10 + 67;
    }

    function init()
    {
        tellMeYourAge();
        calculate();
        say_something();
    }
    ?>

    <h2 style="color: blue;"><?php say_something(); ?> in a HTML</h2>
    <br>
    <h3><?php init(); ?></h3>
</body>

</html>