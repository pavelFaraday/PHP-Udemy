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

            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = "";
            }

            if ($page == "" || $page == 1) {
                $page_1 = 0;
            } else {
                $page_1 = ($page * 5) - 5;
            }

            if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'admin') {
                $post_query_count = "SELECT * FROM posts";
            } else {
                $post_query_count = 'SELECT * FROM posts WHERE post_status = "published"';
            }

            $find_qount = mysqli_query($connection, $post_query_count);
            $count = mysqli_num_rows($find_qount);

            if ($count < 1) {
                echo "<h1 class='text-center'>No Posts Available</h1>";
            } else {
                $count = ceil($count / 5);

                $query_SelectPosts = "SELECT * FROM posts LIMIT $page_1, 5 ";
                $result_SelectAllPosts = mysqli_query($connection, $query_SelectPosts);

                while ($row = mysqli_fetch_assoc($result_SelectAllPosts)) {
                    $post_id = $row['post_id'];
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = substr($row['post_content'], 0, 150);
                    $post_status = $row['post_status'];
            ?>

                    <h1 class="page-header">
                        Posts
                    </h1>

                    <!-- First Blog Post -->
                    <h1><?php echo $count; ?></h1>

                    <h2>
                        <a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a>
                    </h2>
                    <p class="lead">
                        by <a href="author_posts.php?author=<?php echo $post_author; ?>&p_id=<?php echo $post_id; ?>"><?php echo $post_author; ?></a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date; ?></p>
                    <hr>
                    <a href="post.php?p_id=<?php echo $post_id; ?>" target="_blank">
                        <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
                    </a>
                    <hr>
                    <p><?php echo $post_content; ?></p>
                    <a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id; ?>" target="_blank">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <hr>

            <?php }
            } ?>

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <?php include 'includes/sidebar.php'; ?>

    </div>
    <!-- /.row -->

    <hr>

    <ul class="pager">
        <?php
        for ($i = 1; $i <= $count; $i++) {
            if ($i == $page) {
                echo "<li><a class='active_link' href='index.php?page={$i}'>{$i}</a></li>";
            } else {
                echo "<li><a href='index.php?page={$i}'>{$i}</a></li>";
            }
        }

        ?>
    </ul>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>