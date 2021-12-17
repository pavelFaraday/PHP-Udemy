<?php include "functions.php"; ?>

<!-- Header -->
<?php include "includes/header.php"; ?>

<title>56. Prevent Injection | PHP Udemy</title>
</head>

<body>
    <div class="container">
        <div class="col-sm-4 mx-auto mt-4">
            <h4>56. Prevent Injection</h4>
            <br>
            <form action="56_injection.php" method="post">
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
    <?php include "includes/footer.php"; ?>