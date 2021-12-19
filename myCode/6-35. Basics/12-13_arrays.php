<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12-13 Arrays in PHP</title>
</head>

<body>
    <?php

    /* -------------------------------------------------------------------------- */
    /*                         Lecture 12 - simple arrays                         */
    /* -------------------------------------------------------------------------- */

    // Array - We can store multiple types of data inside one container/variable
    // array - old way
    $numberList = array('Michel', 56, 'female', '<h1>Hello</h1>');

    // Lecture 12 | Simple arrays
    $numberList2 = ['John', 23, '<h1>Hello</h1>'];
    print_r($numberList2); //Array ( [0] => John [1] => 23 [2] => Hello)
    echo '<br>';
    var_dump($numberList2); //array(3) { [0]=> string(4) "John" [1]=> int(23) [2]=> string(14) "Hello" }
    echo '<br>';

    echo $numberList2[0];
    echo '<br>';
    echo $numberList2[1];
    echo '<br>';
    echo $numberList2[2];
    echo '<br>';

    /* -------------------------------------------------------------------------- */
    /*                        Lecture 13 | Associative arrays                     */
    /* -------------------------------------------------------------------------- */

    // Associative arrays - Arrays that don't need to be in order. They can be call by name/label we refer to it
    // Associative arrays are arrays that use named keys that you assign to them.

    $numberList3 = ['name' => 'Poly', 'age' => 15, 'tag' => '<span>Hello</span>'];
    print_r($numberList3); // Array ( [name] => Poly [age] => 15 [tag] => Hello )
    echo '<br>';

    echo $numberList3['name'];
    echo '<br>';
    echo $numberList3['tag'];
    echo '<br>';
    echo $numberList3['age'];
    echo '<br>';
    echo '<br>';

    echo $numberList3['name'] . ' is ' . $numberList3['age'] . ' old. '; // Poly is 15 old.
    echo '<br>';
    echo 'Say "' . $numberList3['tag'] . '" to ' . $numberList3['name'] . '.'; // Say "Hello" to Poly.

    ?>
</body>

</html>