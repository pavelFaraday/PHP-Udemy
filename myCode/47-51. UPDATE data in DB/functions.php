<?php

include "connection_DB.php";

function showAllData()
{
    global $connection;
    $queryRead = 'SELECT * from users';
    $resultRead = mysqli_query($connection, $queryRead);

    while ($row = mysqli_fetch_assoc($resultRead)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function updateData()
{
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];;
    $id = $_POST['id'];

    $queryUpdate = "UPDATE users SET ";
    $queryUpdate .= "username = '$username', ";
    $queryUpdate .= "password = '$password' ";
    $queryUpdate .= "WHERE id = '$id'";

    $result = mysqli_query($connection, $queryUpdate);

    if (!$result) {
        die('QUERY FAILED! ' . mysqli_error($connection));
    } else {
        echo "Data Saved!";
    }
}
