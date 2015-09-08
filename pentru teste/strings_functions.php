<html lang="en">
	<head>
		<title>String functions</title>
	</head>
	<body>
		<?php

		$first = "the quick brown fox";
		$second = " jumped over the lazy dog.";
		$third = $first;
		$third .= $second;
		echo $third;

		?>
		<br/>
		Lowercase: <?php echo strtolower($third); ?> <br/>
		Uppercase: <?php echo strtoupper($third); ?> <br/>
		Uppercase first: <?php echo ucfirst($third); ?><br/>
		Uppercase each word: <?php echo ucwords($third); ?><br/>
		<br/>

		 Length: <?php echo "the length is: " .strlen($third); ?> <br/>
		 Finding a word: <?php echo strstr($third, "brown");?><br/>
		 Replacement: <?php echo str_replace("lazy", "idiot", $third); ?><br/>

		 <br/>

		 Repeat sentence: <?php echo str_repeat($third, 3); ?><br/>
		 Grab a portion of text: <?php echo substr($third, 5,10); ?><br/>
		 


	</body>
</html>