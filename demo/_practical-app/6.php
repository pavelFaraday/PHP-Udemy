<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>

	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">

		<?php
		if (isset($_POST['submit'])) {
			$username = $_POST['name'];
			$userAge = $_POST['age'];
			$customer_list = ['Johnatan', 'Banjove', 'Michel', 'Vanesa']; // image this is customer list in DB

			$min_str_len = 5;
			$max_str_len = 15;

			if (strlen($username) < $min_str_len) {
				echo '<br> Username length should be more then 5! <br>';
			} elseif (strlen($username) > $max_str_len) {
				echo '<br> Username length should be less then 15! <br>';
			} elseif (!in_array($username, $customer_list)) {
				echo '<br>' . $username . ',' . ' you are not registred!';
			} else {
				echo 'Hello ' . $username . '!' . '<br>';
				echo 'Your age is ' . $userAge;
			}

			exit();
		}
		?>

		<form action="<?php $_PHP_SELF ?>" method="POST">
			<input type="text" name="name" />
			<input type="number" name="age" />
			<input type="submit" name="submit" />
		</form>



	</article>
	<!--MAIN CONTENT-->
	<?php include "includes/footer.php"; ?>