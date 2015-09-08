<html>
	<head>
		<title>Hello</title>
	</head>
	<body>
	<?php
		$numbers = array();
		$numbers[0] = 100;
		$numbers[1] = 200;
		$numbers[] = 300;
		$numbers[] = 313;
		// $numbers = 400;
		array_push($numbers, 1000);
		array_push($numbers, 2000);
		array_push($numbers, 11, 12, 13, 14);

		//ready
		print_r($numbers);
	?>
	</body>
</html>