<?php

include "connection_DB.php";
include "functions.php";

if (isset($_POST['submit'])) {
    updateData();
}

?>

<!-- Header -->
<?php include "../includes/header.php"; ?>

<title>47-50. UPDATE data in DB | PHP Udemy</title>
</head>

<body>

    <div class="container">
        <div class="col-sm-6 mx-auto mt-4">
            <h4>CRUD - UPDATE Data in DB</h4>
            <form action="47_51_update_data_in_DB.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <select name="id" id="">
                        <?php
                        showAllData();
                        ?>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <?php include "../includes/footer.php"; ?>