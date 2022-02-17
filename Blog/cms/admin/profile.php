<?php include 'includes/admin_header.php'; ?>

<?php

if (isset($_SESSION['username'])) {
    echo $_SESSION['username'];
}

?>


<div id="wrapper">
    <!-- Navigation -->
    <?php include 'includes/admin_navigation.php'; ?>

    <div id="page-wrapper">
        <div class="container-fluid"></div>
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Admin
                    <small>Author</small>
                </h1>

                <!-- ---- NEW FORM --- -->
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Firstname</label>
                        <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="user_firstname">
                    </div>
                    <div class="form-group">
                        <label for="post_author">Lastname</label>
                        <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="user_lastname">
                    </div>
                    <div class="form-group">
                        <select name="user_role" id="post_category">
                            <option value="subscriber"><?php echo $user_role; ?></option>

                            <?php
                            if ($user_role == 'admin') {
                                echo "<option value='subscriber'>subscriber</option>";
                            } else {
                                echo "<option value='admin'>admin</option>";
                            }
                            ?>

                        </select>
                    </div>
                    <!-- <div class="form-group">
                            <label for="post_image">Post Image</label>
                            <input type="file" name="post_image">
                         </div> -->
                    <div class="form-group">
                        <label for="post_tags">Username</label>
                        <input type="text" value="<?php echo $username; ?>" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label for="post_content">Email</label>
                        <input type="email" value="<?php echo $user_email; ?>" class="form-control" name="user_email">
                    </div>

                    <div class="form-group">
                        <label for="post_content">Password</label>
                        <input type="password" value="<?php echo $user_password; ?>" class="form-control" name="user_password">
                    </div>

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="edit_user" value="Add User">
                    </div>

                </form>

                <!-- ---- NEW FORM --- -->


            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

    <?php include 'includes/admin_footer.php'; ?>