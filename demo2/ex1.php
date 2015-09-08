<html>
	<head>
		<title>Hello</title>
	</head>
	<body>
	<h3>Query stuff</h3>
	<?php

		// mysql -u root -p    

		$conexiune = new mysqli('localhost', 'root', '', 'university_student');
		$sql_query = 'select * from student';
		$randuri = $conexiune->query($sql_query);
		
		/*
		$primulRand = $randuri->fetch_assoc();
		print_r($primulRand);
		$alDoileaRand = $randuri->fetch_assoc();
		print_r($alDoileaRand);
		$alTreileaRand = $randuri->fetch_assoc();
		print_r($alTreileaRand);
		*/
		while($rand = $randuri->fetch_assoc()){ // read line by line, until hit the end of the result set => return false
			//print_r($rand);
			// echo '<br/>';	
			echo 'First name: '.$rand["first_name"].' Last name: '.$rand['last_name'].'<br/>';
		}
	?>	
	</body>
</html>