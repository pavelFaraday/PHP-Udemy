<!-- db connection -->
<?php include 'includes/db.php'; ?>
<!-- Header -->
<?php include 'includes/header.php'; ?>
<!-- Navigation -->
<?php include 'includes/navigation.php'; ?>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <?php

            // SEARCH LOGIC
            if (isset($_POST['submit'])) {
                $search = $_POST['search']; // 1. to know what user types in search fild
                // Finds in DB any values that have "$search" value in any position
                $querySearch = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' ";
                $resultSearch = mysqli_query($connection, $querySearch);

                // Check if query works properly | Check it always, otherwise you can't find errors
                if (!$resultSearch) {
                    die("Query Failed" . mysqli_error($connection));
                }

                // Check if searched words fit to DB Table words
                $count = mysqli_num_rows($resultSearch);
                if ($count == 0) {
                    echo "<h1 style='color:red;'>NO RESULT ! :(</h1>";
                } else {
                    while ($row = mysqli_fetch_assoc($resultSearch)) {
                        $post_title = $row['post_title'];
                        $post_author = $row['post_author'];
                        $post_date = $row['post_date'];
                        $post_image = $row['post_image'];
                        $post_content = $row['post_content'];

            ?>
                        <h1 class="page-header">
                            Page Heading
                            <small>Secondary Text</small>
                        </h1>

                        <!-- First Blog Post -->
                        <h2>
                            <a href="#"><?php echo $post_title; ?></a>
                        </h2>
                        <p class="lead">
                            by <a href="index.php"><?php echo $post_author; ?></a>
                        </p>
                        <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date; ?></p>
                        <hr>
                        <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
                        <hr>
                        <p><?php echo $post_content; ?></p>
                        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                        <hr>

            <?php
                    }
                }
            }
            ?>

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <?php include 'includes/sidebar.php'; ?>

    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>