<html lang="en">
	<head>
		<title>Strings</title>
	</head>
	<body>
		<?php

		echo "Hello wold from Strings <br/>";
		$greeting = "hello";
		$target = "MIHAI";

		$phrase = $greeting . " ".$target;
		echo $phrase;
		?>

		<br />
		<?php

		echo "$phrase Again<br/>"; 

		echo" <br/>";

		$strada ="Calarasilor";
		$bloc = "D";
		$apt = "54";
		$adresa = $strada ." " .$bloc . " " . $apt;

		echo $adresa;
		


		?>

	</body>
</html>