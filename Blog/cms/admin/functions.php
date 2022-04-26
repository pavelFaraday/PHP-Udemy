<?php

function escape($string)
{
    global $connection;
    // trim() — Strip whitespace (or other characters) from the beginning and end of a string
    // strip_tags() — Strip HTML and PHP tags from a string
    return mysqli_real_escape_string($connection, trim($string));
}

function users_online()
{
    if (isset($_GET['onlineusers'])) {
        global $connection;

        if (!$connection) {
            session_start();
            include("../includes/db.php");

            $session = session_id();
            $time = time();
            $time_out_in_seconds = 05;
            $time_out = $time - $time_out_in_seconds;

            $query = "SELECT * FROM users_online WHERE session = '$session'";
            $send_query = mysqli_query($connection, $query);
            $count = mysqli_num_rows($send_query);

            if ($count == NULL) {
                mysqli_query($connection, "INSERT INTO users_online(session, time) VALUES ('$session','$time')");
            } else {
                mysqli_query($connection, "UPDATE users_online SET time = '$time' WHERE session = '$session'");
            }

            $users_online_query = mysqli_query($connection, "SELECT * FROM users_online WHERE time > '$time_out'");
            echo $count_user = mysqli_num_rows($users_online_query);
        }
    } // get Request isset
}
users_online();

function confirmQuery($result)
{
    global $connection;

    if (!$result) {
        die("QUERY FAILED - " . mysqli_error($connection));
    }
}

function insert_categories()
{
    global $connection;

    // add Data into DB
    if (isset($_POST['submit'])) {
        $cat_title = $_POST['cat_title'];

        if ($cat_title == "" || empty($cat_title)) {
            echo "<h3 style='color:red;'>Please, fill required fild!</h3>";
        } else {
            $query = "INSERT INTO categories(cat_title) ";
            $query .=  "VALUE ('{$cat_title}') ";
            $result = mysqli_query($connection, $query);

            if (!$result) {
                die('Query Failed!' . mysqli_error($connection));
            } else {
                echo "Good";
            }
        }
    }
}

function add_category()
{
    global $connection;

    // Insert DATA from DB
    $query_SelectCategoriesCMS = 'SELECT * from categories';
    $result_SelectCategoriesCMS = mysqli_query($connection, $query_SelectCategoriesCMS);

    while ($row = mysqli_fetch_assoc($result_SelectCategoriesCMS)) {
        $cat_title = $row['cat_title'];
        $cat_id = $row['cat_id'];
        echo "<tr>";
        echo "<td>{$cat_id}</td>";
        echo "<td>{$cat_title}</td>";
        echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
        echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
        echo "</tr>";
    }
}

function delete_category()
{
    global $connection;

    // DELETE DATA from DB
    if (isset($_GET['delete'])) {
        $the_cat_id = $_GET['delete'];

        $queryDelete = "DELETE from categories WHERE cat_id = {$the_cat_id} ";
        $resultDelete = mysqli_query($connection, $queryDelete);
        header("Location: categories.php"); // redirect user into another page or redirect into same page (REFRESH page)
    }
}

function recordCount($table)
{
    global $connection;

    $query = "SELECT * FROM " . $table;
    $select_all = mysqli_query($connection, $query);
    $result = mysqli_num_rows($select_all);
    return $result;

    confirmQuery($result);
}

function checkStatus($table, $column, $status)
{
    global $connection;

    $query = "SELECT * FROM $table WHERE $column = '$status' ";
    $select_all = mysqli_query($connection, $query);
    $result = mysqli_num_rows($select_all);
    return $result;

    confirmQuery($result);
}

function checkUserRole($table, $column, $role)
{
    global $connection;

    $query = "SELECT * FROM $table WHERE $column = '$role' ";
    $select_all = mysqli_query($connection, $query);
    $result = mysqli_num_rows($select_all);
    return $result;

    confirmQuery($result);
}

function is_admin($username = '')
{
    global $connection;

    $query = "SELECT user_role FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);

    $row = mysqli_fetch_array($result);

    if ($row['user_role'] == 'admin') {
        return true;
    } else {
        return false;
    }
}
