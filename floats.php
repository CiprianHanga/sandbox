<!DOCTYPE html>
<html>
	<head>
		<title>Floating Point Numbers</title>
	</head>
	<body>
	<h1>Floating Point Numbers</h1>
        <?php echo $float = 3.14; ?><br>
        <?php echo $float + 7; ?><br>
        <?php echo 4/3; ?><br>
        <br>
        Round: <?php echo round($float, 1); ?><br>
        Ceiling: <?php echo ceil($float); ?><br>
        Floor: <?php echo floor($float); ?><br>

        <?php $integer = 3; ?>

        <?php echo "Is {$integer} integer? " . is_int($integer); ?><br>
        <?php echo "Is {$float} integer? " . is_int($float); ?><br>
        <br>
        <?php echo "Is {$integer} float? " . is_float($integer); ?><br>
        <?php echo "Is {$float} float? " . is_float($float); ?><br>
        <br>
        <?php echo "Is {$integer} numeric? " . is_numeric($integer); ?><br>
        <?php echo "Is {$float} numeric? " . is_numeric($float); ?><br>


	</body>
</html>
