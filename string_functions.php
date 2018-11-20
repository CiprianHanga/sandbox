<!DOCTYPE html>
<html>
	<head>
		<title>String Functions</title>
	</head>
	<body>
		<h1>String Functions</h1>
		<?php
			$first = "the quick brown fox";
			$second = " jumped over the lazy dog";
			$first .= $second;
			echo $first;
		?>
		<br><br>
		<!-- Totul devine lowercase -->
		Lowercase: <?php echo strtolower($first); ?><br>
		<!-- Totul devine uppercase -->
		Uppercase: <?php echo strtoupper($first); ?><br>
		<!-- Fiecare cuvant incepe cu un upper case -->
		Title case: <?php echo ucwords($first); ?><br>
		<!-- Primul caracter din string devine upper case -->
		First upper case: <?php echo ucfirst($first); ?><br>
		<br>
		<h2>More String Functions</h2>
		<!-- Cate caractere are stringul -->
		Length: <?php echo strlen($first); ?><br>
		<!-- Face trim la primul si ultimul spatiu liber din string (daca exista) -->
		Trim: <?php echo "+++" . trim(" {$first} ") . "+++"; ?><br>
		<!-- Afiseaza stringul incepand cu stringul definit ca punct de pornire 
		(string within a string) -->
		Find: <?php echo strstr($first, "brown"); ?><br>
		<!-- inlocuieste stringul indicat ca prim argument (the needle) cu al doilea,
		in interiorul celui de-al treilea argument (the heystack) -->
		Replace 1: <?php echo str_replace("quick", "super-fast", $first); ?><br>
		<!-- Atentie: valoarea lui $first ramane cea initiala dupa inlocuire
		(in exemplul urmator quick este pastrat dupa functia anterioara) -->
		Replace 2: <?php echo str_replace("lazy", "slob", $first); ?><br>
		<br>
		<!-- Stringul este repetat de cate ori specifica al doilea argument al functiei -->
		Repeat: <?php echo str_repeat($first, 2); ?><br>
		<!-- Se extrage un numar de 10 caractere ("substring"), incepand de la pozitia 5 -->
		Make substring: <?php echo substr($first, 5, 10); ?><br>
		<!-- Se arata cate caractere sunt inaintea celui de-al doilea argument,
		in stringul indicat $first -->
		Find position: <?php echo strpos($first, "quick"); ?><br>
		<!-- Similar cu strstr(), dar argumentul este un caracter, nu un string -->
		Find character: <?php echo strchr($first, "o"); ?><br> 
	</body>
</html>
