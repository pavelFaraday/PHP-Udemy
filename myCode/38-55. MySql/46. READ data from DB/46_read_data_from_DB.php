<?php



if (isset($_POST['submit'])) {
    include "connection.php";


    /* -------------------------------------------------------------------------- */
    /*                              READ Data from DB                             */
    /* -------------------------------------------------------------------------- */
    $queryRead = 'SELECT * from users';
    $resultRead = mysqli_query($connection, $queryRead);
}

?>

<!-- Header -->
<?php include "../includes/header.php"; ?>

<title>46. Read data from DB | PHP Udemy</title>
</head>

<body>
    <div class="container">
        <div class="col-sm-6 mx-auto mt-4">
            <h4>CRUD - READ Data from DB</h4>
            <form action="46_read_data_from_DB.php" method="post">
                <div class="form-group mt-2">
                    <input class="btn btn-primary" type="submit" name="submit" value="READ">
                </div>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="col-sm-9 mx-auto mt-4">
            <?php
            while ($row = mysqli_fetch_assoc($resultRead)) {
            ?>
                <pre>
                    <?php
                    print_r($row);
                    ?>
                </pre>
            <?php
            }
            ?>
        </div>
    </div>

    <!-- Footer -->
    <?php include "../includes/footer.php"; ?>