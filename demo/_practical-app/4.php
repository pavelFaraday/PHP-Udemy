<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php

		/*  
		Step 1: Define a function and make it return a calculation of 2 numbers
		Step 2: Make a function that passes parameters and call it using parameter value 
		*/

		function sum_return()
		{
			$sum = 5 + 7;
			return $sum;
		}
		$returned_value = sum_return();
		// echo $returned_value; // 12
		$result = $returned_value * 5;

		/* -------------------------------------------------------------------------- */

		function greeting($x, $y)
		{
			echo $x . ' ' . $y;
		}
		?>

		<h2><?php echo $result; ?></h2> <!-- 60 -->
		<h2><?php echo greeting('Hello', 'World'); ?></h2>

	</article>
	<!--MAIN CONTENT-->


	<?php include "includes/footer.php"; ?>