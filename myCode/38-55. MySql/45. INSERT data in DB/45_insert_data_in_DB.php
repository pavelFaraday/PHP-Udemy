<?php include "functions.php"; ?>

<!-- Header -->
<?php include "../includes/header.php"; ?>

<title>45. insert data in DB | PHP Udemy</title>
</head>

<body>
    <div class="container">
        <div class="col-sm-4 mx-auto mt-4">
            <h4>CRUD - CREATE Data in DB</h4>
            <br>
            <form action="45_insert_data_in_DB.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <input class="btn btn-primary" type="submit" name="submit" value="CREATE">
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <?php include "../includes/footer.php"; ?>