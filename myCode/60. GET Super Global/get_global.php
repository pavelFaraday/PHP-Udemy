<?php

// $ _GET returns values from the URL. The main identifier of the variable in the URL is "?", And then variables from each other are distinguished by "&".
// for example: https://get_global.php?id=109&name=%27Bruno%27
print_r($_GET);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>60. Get Super Global</title>
</head>

<body>
    <?php
    $id = 109;
    $button = "Click Here";
    ?>

    <a href="get_global.php?id=<?php echo $id ?>&name='Bruno'"><?php echo $button; ?></a>
</body>

</html>