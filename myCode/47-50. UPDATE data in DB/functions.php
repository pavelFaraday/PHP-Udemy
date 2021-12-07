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
