<!DOCTYPE html>
<html>
	<head>
		<title>Arrays</title>
	</head>
	<body>
	<h1>Arrays</h1>
        <?php
        $numbers = [4,8,5,17,44,88,5];
        echo $numbers[0];
        ?>
    <br><br>
        <?php $mixed = array(6, "fox", "dog", array("x", "y", "z")); ?>
        <?php echo $mixed[2]; ?><br>
        <?php echo $mixed[3]; ?><br>
    <br><br>
        <?php echo $mixed[3][1]; ?><br>
    <br><br>
        <?php $mixed[2] = "cat"; ?>
        <?php $mixed[4] = "mouse"; ?>
        <?php $mixed[] = "horse"; ?>
        <pre><?php echo print_r($mixed); ?><br></pre>
	</body>
</html>
