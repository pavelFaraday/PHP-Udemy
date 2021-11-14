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
		Step 1: Use a pre-built math function here and echo it
		Step 2: Use a pre-built string function here and echo it
		Step 3: Use a pre-built Array function here and echo it
		*/

		/* -------------------------------------------------------------------------- */
		/*                               Math Functions                               */
		/* -------------------------------------------------------------------------- */

		$power = pow(2, 4); // 16 (2*2*2*2 = 16)
		echo $power . '<br>';
		/* -------------------------------------------------------------------------- */
		$random_num = rand();
		echo $random_num . '<br>'; // 1896469232, 397050180, 1232443356...
		$random_num = rand(1, 1000);
		echo $random_num . '<br>'; // random number from 1 to 1000
		/* -------------------------------------------------------------------------- */
		$square_root = sqrt(81);
		echo $square_root . '<br>'; // 9
		/* -------------------------------------------------------------------------- */
		$ceiling = ceil(4.1888);  // ceil() function rounds a number UP to the nearest integer
		echo $ceiling . '<br>';  // 5
		/* -------------------------------------------------------------------------- */
		$flooring = floor(4.1888);  // floor() function rounds a number DOWN to the nearest integer
		echo $flooring . '<br>';   // 4
		/* -------------------------------------------------------------------------- */
		$rounding = round(4.4966);  // The round() function rounds a floating-point number
		echo $rounding . '<br>';   // 4

		/* -------------------------------------------------------------------------- */
		/*                              String functions                              */
		/* -------------------------------------------------------------------------- */

		$myString = 'Hello student. Do you like a class?';
		/* -------------------------------------------------------------------------- */
		echo strlen($myString); // 35 - string length including empty spaces 
		echo '<br>';
		/* -------------------------------------------------------------------------- */
		echo strtoupper($myString); // HELLO STUDENT. DO YOU LIKE A CLASS?
		echo '<br>';
		/* -------------------------------------------------------------------------- */
		echo strtolower($myString); // hello student. do you like a class?
		echo '<br>';

		/* -------------------------------------------------------------------------- */
		/*                               Array function                               */
		/* -------------------------------------------------------------------------- */

		$myArray = [78, 1, 2, 90, 78, 100, 1898989898, 0.1];
		/* -------------------------------------------------------------------------- */
		echo max($myArray); // 1898989898 - highest number
		echo '<br>';
		echo min($myArray); // 0.1 - highest number
		echo '<br>';
		/* -------------------------------------------------------------------------- */
		print_r($myArray); // Array ( [0] => 78 [1] => 1 [2] => 2 [3] => 90 [4] => 78 [5] => 100 [6] => 1898989898 [7] => 0.1 )
		echo '<br>';
		/* -------------------------------------------------------------------------- */
		$result = sort($myArray); // sort array from lowest to highest number
		echo $result;
		echo '<br>';
		?>

	</article>
	<!--MAIN CONTENT-->
	<?php include "includes/footer.php"; ?>