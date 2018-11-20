<!DOCTYPE html>
<html>
	<head>
		<title>Spell Checking</title>
	</head>
	<body>
		<?php
		/** Works only with PHP compiled with support for the pspell extension. */
				
		// define the string to be spell checked
		$str = "someun pleez helpp me i canot spel";
		
		// check spelling 
		// open dictionary link
		$dict = pspell_new("en", "british");
		
		// decompose string into individual words
		// check spelling each word
		$str = preg_replace('/[0-9]+/', '', $str);
		$words = preg_split('/[^0-9A-Za-z\']+/', $str, -1, PREG_SPLIT_NO_EMPTY);
		foreach ($words as $s) {
			if (!pspell_check($dict, $w)) {
				$errors[] = $w;
			}
		}
		
		// if errors exist
		// print error list
		if (sizeof($errors) > 0) {
			echo "The following words were wrongly spelt: " . implode(" ", $errors);
		}
		
		
		?>
	</body>
</html>
