<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		

<?php



		$number1 = 10;
		$number2 = 20;
		echo $number1;
		echo $number2;

		$array1 = [25, 15, 24];
		print_r($array1);
		$array2 = ["first_name" => "Charles"];
		print_r($array2);

		


		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>