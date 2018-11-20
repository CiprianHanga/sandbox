<!DOCTYPE html>
<html>
	<head>
		<title>Array Functions</title>
	</head>
	<body>
	<h1>Array Functions</h1>
        <?php $numbers = array(8,23,15,42,16,4); ?>
        Count: <?php echo count($numbers); ?><br>
        Maximum value: <?php echo max($numbers); ?><br>
        Minimum value: <?php echo min($numbers); ?><br>
    <br><br>
        <?php ?><br>
    <pre>
        Sort: <?php sort($numbers); print_r($numbers); ?><br>
        Reverse sort: <?php rsort($numbers); print_r($numbers); ?><br>
    </pre>
    <br>
        Implode: <?php echo $num_string = implode(" * ", $numbers); ?><br>
        <?php echo gettype($num_string); ?><br>
        Explode: <?php print_r(explode(" * ", $num_string)); ?><br>
	</body>
</html>
