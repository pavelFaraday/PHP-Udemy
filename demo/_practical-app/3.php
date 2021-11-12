<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">
	<aside class="col-xs-4">
		<?php Navigation(); ?>
	</aside>

	<article class="main-content col-xs-8">
		<?php
		/*  
		Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
		Step 2: Make a forloop  that displays 10 numbers
		Step 3 : Make a switch Statement that test againts one condition with 5 cases
 		*/

		if (5 > 10) {
			echo 'I dont like blalla';
		} elseif (5 < 10) {
			echo 'I love PHP';
		} else {
			echo 'I dont like Naturo';
		}

		echo '<br><br><br>';

		for ($i = 0; $i < 10; $i++) {
			echo $i . '<br>';
		}

		echo '<br><br>';

		$x = 10;
		switch ($x) {
			case 5:
				echo '10 dont equals to 5';
				break;
			case 10:
				echo '10 equals to 10';
				break;
			default:
				echo 'I dont Know';
				break;
		}
		?>
	</article>

	<?php include "includes/footer.php"; ?>