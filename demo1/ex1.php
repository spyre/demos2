<html>
	<head>
		<title>Hello</title>
	</head>
	<body>
	<?php
		
		
		/*$grade1 = 7;
		$grade2 = 10;
		$grade3 = 2;


		echo 'Grade: '.$grade1.'<br/>';
		*/
		$grades = array();
		$grades[0] = 7;
		$grades[1] = 10;
		$grades[200] = 2;
		$grades[3] = 9;
		$grades[4] = 10;
		/* for($i=0; $i<3; $i++){
			echo 'Grade: '.$grades[$i].'<br/>';
		} */
		for($i=0; $i < count($grades); $i++){
			echo 'Grade: '.$grades[$i].'<br/>';
		}

		echo '<hr/>';
		echo '<h4>Foreach element in array without index</h4>';
		// in order to avoid missing indexes 0, 1, 200(??), 3...
		// for(String s : ....)
		foreach($grades as $grade){
			echo 'Element in array: '.$grade.'<br/>';
		}
		echo '<hr/>';
		echo '<h4>Foreach element in array, but keep the index and show it</h4>';
		$index = 0;
		// foreach $grade keep the $index
		// pentru fiecare pereche de index<->grade ...
		foreach($grades as $index => $grade){
			echo 'Element in array: '.$grade.' at position: '.$index.'<br/>';
		}
		echo '<hr/>';
		echo '<h4>Associative arrays</h4>';
		$usersAndPasswords = array();
		$usersAndPasswords['john'] = '1234';
		$usersAndPasswords['bill'] = '@@@@yyyy';
		echo 'INFO: '.$usersAndPasswords['john'].'<br/>';
		print_r($usersAndPasswords);

		echo '<br/>';
		foreach($usersAndPasswords as $pwd){
			echo 'PASSWORD: '.$pwd.'<br/>';
		}
		echo '<br/>';
		echo 'Users AND passwords:<br/>';
		foreach($usersAndPasswords as $user=>$pwd){
			echo 'Username: '.$user.' password: '.$pwd.'<br/>';
		}
		echo '<hr/>';
		

		echo '<br/><br/>';
		echo 'Length of array is: '.count($grades).'<br/>';

		print_r($grades);

		echo '<br/>';



	?>
	</body>
</html>