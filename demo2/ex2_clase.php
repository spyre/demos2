<html>
	<head>
		<title>Hello</title>
	</head>
	<body>
	Pizza<br/>
	<?php
		class Persoana{

			// field-uri
			private $nume;
			public $varsta;


			// toate functiile sunt declarate cu cuvantul cheie 'function'
			// in cazul constructorului sunt anumite reguli: se chema ori __construct ori Persoana
			public function __construct($x, $y){
				echo "PERSOANA NOUA!!!!<br/>";
				$this->nume = $x;
				$this->varsta = $y;
			}

			public function setNume($param){
				$this->nume = $param;
			}

			public function getNume(){
				return $this->nume;
			}
			// metode / functii
			public function hello(){
				echo 'Hello from Persoana<br/>';
			}
		}

		$p1 = new Persoana('Ion', 20);  // din clasa PErsoana apeleaza __construct
		$p2 = new Persoana('Vasile', 44);

		// $p1->nume = 'Ion';
		// $p2->nume = 'Bill';
		// $p1->setNume('Ion');
		$p2->setNume('Vasile');

		echo 'Numele unui obiect: '.$p1->getNume().'<br/>';
		echo 'Varsta unui obiect: '.$p1->varsta.'<br/>';

		$p1->hello();

		echo '<br/>';
	?>
	</body>
</html>