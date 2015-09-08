<html>
	<head>
		<title>Hello</title>
	</head>
	<body>
	Pizza
	<?php
	echo 'HELLO<br/>';

	function getMessage(){
		return 'pizza is amazing<br/>';
	}
	?>


	<br/>
	<form method="post">
		Username: <input type="text" name="usrnm"/>
		<br/>
		Password: <input type="password" name ="pwd"/>
		<br/>
		<input type="submit" value="Submit your information lol"/>
	</form>

	<br/><br/>

	<?php 
	echo 'pizza', ' ', ' is good'.'<br/>';
	$val = print("TEST...<br/>"); // returns 1 if successfully printed
	// can be assigned to a variable or used in an expression
	echo 'VALUE IS : '.$val.'<br/>';


	$info = getMessage();
	echo $info;
	echo print("WASSUP");
	 ?>
	</body>
</html>