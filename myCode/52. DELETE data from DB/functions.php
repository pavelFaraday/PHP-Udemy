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

function deleteData()
{
    global $connection;
    $id = $_POST['id'];

    $queryDelete = "DELETE FROM users ";
    $queryDelete .= "WHERE id = '$id'";

    $result = mysqli_query($connection, $queryDelete);

    if (!$result) {
        die('QUERY FAILED! ' . mysqli_error($connection));
    } else {
        echo "Data Deleted!";
    }
}
