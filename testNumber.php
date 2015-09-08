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

		$result3 = 10*(10+3) % 4;
		echo 'result3 = '.$result3.'<br/>';
		?>

		<?php
		$var1 =3;
		$var2 =4;
		?>

		Basic math: <?php echo $var1 + $var2;?><br/>
		Basic math 2: <?php echo ((1+2+$var1)* $var2)/2-5; ?><br/>
		Basic math 3: <?php echo ($var1 + $var2)/ 7; ?> <br/>
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