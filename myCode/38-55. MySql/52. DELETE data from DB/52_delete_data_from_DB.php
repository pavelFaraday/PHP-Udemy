<?php

include "connection_DB.php";
include "functions.php";

if (isset($_POST['delete'])) {
    deleteData();
}

?>

<!-- Header -->
<?php include "../includes/header.php"; ?>

<title>52. DELETE data from DB | PHP Udemy</title>
</head>

<body>

    <h1 style="text-align: center;"> Update Login</h1>

    <div class="container">
        <div class="col-sm-6 mx-auto mt-4">
            <h4>CRUD - DELETE Data in DB</h4>
            <form action="52_delete_data_from_DB.php" method="post">
                <div class="form-group">
                    <select name="id" id="">
                        <?php
                        showAllData();
                        ?>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <input class="btn btn-primary" type="submit" name="delete" value="DELETE">
                </div>
            </form>
        </div>
    </div>

    <!-- footer -->
    <?php include "../includes/footer.php"; ?>