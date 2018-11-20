<!DOCTYPE html>
<html>
	<head>
		<title>Associative Arrays</title>
	</head>
	<body>
	<h1>Associative Arrays</h1>
        <?php $person = array("first_name" => "Ciprian", "last_name" => "Hanga", "age" => "41"); ?>
        <?php echo $person["first_name"] . " " .  $person["last_name"] . " are varsta de " . $person["age"] . " ani."; ?><br>
        <?php $person["first_name"] = "Claudiu"; ?>
        <?php $person["age"] = 31; ?>
        <?php echo $person["first_name"] . " " .  $person["last_name"] . " are varsta de " . $person["age"] . " ani."; ?><br>
    <br><br>
        <?php $person["profession"] = "engineer"; ?>
    <pre>
        <?php echo print_r($person); ?>
    </pre>
	</body>
</html>
