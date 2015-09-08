<HTML>
	<HEAD>
		<TITLE> How to work with numbers, variables and constants? </TITLE>
	</HEAD>
	<BODY>
		<p>This segment is to see how PhP evaluates an arithmetic expression,
		its concept of precedence. We will also see how to work with constants. </p>
		<BR>
		<BR>

		<?php
		$result1=2*2+3*3-10;
		$result2=2*(2+3*3)-10;
		print("2*2+3*3-10=$result1, while");
		print(" 2*(2+3*3)-10=$result2<BR><BR>" );
		?>

		<p>We will also see how to declare a constant.</p>
		
		<?php

		//We now define a constant
		define("myAnswer", 42);
		print("The value of a constant myAnswer is <BR>");
		print(myAnswer); //Outputs the value of myAnswer
		print("<BR>"); //New line
		define("CONSTANT", "Hello world.");
		echo CONSTANT; // Outputs the value of CONSTANT"
		echo Constant; // outputs "Constant" and issues a notice.
		?>
	</BODY>
</HTML>
