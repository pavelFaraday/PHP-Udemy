<?php

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
