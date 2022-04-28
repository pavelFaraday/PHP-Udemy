<?php

function escape($string)
{
    global $connection;
    // trim() — Strip whitespace (or other characters) from the beginning and end of a string
    // strip_tags() — Strip HTML and PHP tags from a string
    return mysqli_real_escape_string($connection, trim($string));
}

function redirect($location)
{
    return header("Location:" . $location);
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

function is_admin($username)
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

function username_exists($username)
{
    global $connection;

    $query = "SELECT username FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);

    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}

function email_exists($email)
{
    global $connection;

    $query = "SELECT user_mail FROM users WHERE user_mail = '$email'";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);

    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}

function register_user($username, $email, $password)
{
    global $connection;
    $username = mysqli_real_escape_string($connection, $username);
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);
    $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 10));

    $query = "INSERT INTO users (username, user_email, user_password, user_role) ";
    $query .= "VALUES('{$username}', '{$email}', '{$password}', 'subscriber' )";
    $register_user_query = mysqli_query($connection, $query);

    confirmQuery($register_user_query);
}

function login_user($username, $password)
{
    global $connection;

    $username = trim($username);
    $password = trim($password);
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM users WHERE username='{$username}' ";
    $select_user_query = mysqli_query($connection, $query);

    if (!$select_user_query) {
        die("QUERY FAILED " . mysqli_error($connection));
    }

    while ($row = mysqli_fetch_assoc($select_user_query)) {
        $db_user_id = $row['user_id'];
        $db_username = $row['username'];
        $db_user_password = $row['user_password'];
        $db_user_firstname = $row['user_firstname'];
        $db_user_lastname = $row['user_lastname'];
        $db_user_role = $row['user_role'];
    }

    if (password_verify($password, $db_user_password)) {
        $_SESSION['username'] = $db_username;
        $_SESSION['firstname'] = $db_user_firstname;
        $_SESSION['lastname'] = $db_user_lastname;
        $_SESSION['user_role'] = $db_user_role;

        redirect("/php-udemy/Blog/cms/admin/");
    } else {
        redirect("/php-udemy/Blog/cms/index.php");
    }
}
