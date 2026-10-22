<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    
	<?php 
		//========== If
		$age = 20;
		if ($age >= 18) {
			echo "je bent volwassen.<br>";
		}
		//========== Else
		$age = 16;
		if ($age >= 18) {
			echo "je bent volwassen.<br>";
		} else {
			echo "je bent minderjarig.<br>";
		}


		//========== Else if
		$age = 70;
			if ($age < 18) {
				echo "je bent minderjarig.<br>";
			} elseif ($age < 65) {
				echo "je bent volwassen.<br>";
			} else {
				echo "je bent gepensioneerd.<br>";
			}



		//========== List all comparison operators (7)
		// ==, ===, !=, <>, !==, >, <, >=, <=


		//========== List all logical operators (3)
		//&& || !


		// Time: 6-10 minutes
		// Record: ???
	    // Ready? Push to GIT!
	?>

	<a href="04TASK-multi-dimension.php" class='previousTopic' disabled>Ga naar vorig topic</a>
    <a href="06-get.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>