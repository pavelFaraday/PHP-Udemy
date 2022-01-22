<?php include 'includes/admin_header.php'; ?>

<div id="wrapper">

    <!-- Navigation -->
    <?php include 'includes/admin_navigation.php'; ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to Admin
                        <small>Author</small>
                    </h1>
                    <!-- Left Side -->
                    <div class="col-xs-6">
                        <?php

                        // add Data in DB
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

                        // Insert DATA from DB
                        $query_SelectCategoriesCMS = 'SELECT * from categories';
                        $result_SelectCategoriesCMS = mysqli_query($connection, $query_SelectCategoriesCMS);

                        ?>

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="cat_title">Categories</label>
                                <input class="form-control" type="text" name="cat_title">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                            </div>
                        </form>
                    </div>
                    <!-- Right Side -->
                    <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Title</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                while ($row = mysqli_fetch_assoc($result_SelectCategoriesCMS)) {
                                    $cat_title = $row['cat_title'];
                                    $cat_id = $row['cat_id'];
                                    echo "<tr>";
                                    echo "<td>{$cat_id}</td>";
                                    echo "<td>{$cat_title}</td>";
                                    echo "</tr>";
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

        <?php include 'includes/admin_footer.php'; ?>