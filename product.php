<!DOCTYPE html>

<head>

	<link rel="stylesheet" type="text/css" href="index.css">

	<meta charset="UTF-8">

	<?php 

		$output = '';

		if ($_GET['id']){

			$product = $_GET['id'];

				if ($product == 1){

					$output = 'You chose MacBook';

						} elseif ($product == 2){

						$output = 'You chose Ubuntu';

						} elseif ($product == 3){

						$output = 'You chose Windows';

				} else {

					$output = 'Invalid Request';

					}
		}

	?>

</head>

<body>

	<?php include 'header.php'; ?>

	<?php echo $output; ?>

	<?php include 'footer.php';?>

</body>

</html>