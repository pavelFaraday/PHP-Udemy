<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>16. Comparison Operators PHP</title>
</head>

<body>
    <h2>Comparison Operators</h2>
    <pre>
        equal ==
        identical ===
        compare > <  >= <= <>
        not equal !=
        not identical !==    
    </pre>

    <h2>Logical Operators</h2>
    <pre>
        And &&
        Or  ||
        Not !   
    </pre>


    <?php
    if (4 <= 4) {
        echo '<code>' . '4 <= 4' . '<code>';
    }

    echo '<br>';

    if (5 != 4) {
        echo '<code>' . '5 != 4' . '<code>';
    }

    echo '<br>';

    if (4 === '4') {
        echo '<code>' . '4 === "4"' . '<code>';
    } else {
        echo '<code>' . '4 is not identical to "4"' . '<code>';
    }

    echo '<br>';

    if (12 === '12' || 12 < 16) {
        echo '<code>' . '12 < 16' . '<code>';
    }

    echo '<br>';

    if (118 === 118 && 90 < 120) {
        echo '<code>' . '118 === 118 and 90 < 120' . '<code>';
    }

    ?>
</body>

</html>