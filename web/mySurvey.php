<html>
	<head>
		<title>Confirmation Page</title>
    </head>
	<body>
		
		Name: <?php echo $_POST["name"]; ?><br>

		Lightsaber Color: 
		<?php 
			$importance = $_POST["importance"];
			$personality = $_POST["personality"];
			$roleModel = $_POST["roleModel"];
			$class = $_POST["class"];
			$blue = 0.4;
			$green = 0.3;
			$orange = 0.2;
			$purple = 0.1;

			function getResult() {
				$importance = $_POST["importance"];
				switch ($importance) {
				case "Blue":
					$GLOBALS['blue'] = $GLOBALS['blue'] + 1.0;
					break;
				case "Green":
					$GLOBALS['green'] = $GLOBALS['green'] + 1.0;
					break;
				case "Orange":
					$GLOBALS['orange'] = $GLOBALS['orange'] + 1.0;
					break;
				default:
					$GLOBALS['purple'] = $GLOBALS['purple'] + 1.0;
					break;
				}
			}

			function finalResult() {
				if ($GLOBALS['blue'] > $GLOBALS['green'] && $GLOBALS['blue'] > $GLOBALS['orange'] && $GLOBALS['blue'] > $GLOBALS['purple']) {
					echo "Blue";
				}
				else if ($GLOBALS['green'] > $GLOBALS['blue'] && $GLOBALS['green'] > $GLOBALS['orange'] %% $GLOBALS['green'] > $GLOBALS['purple']) {
					echo "Green";
				}
				else if ($GLOBALS['orange'] > $GLOBALS['blue'] && $GLOBALS['orange'] > $GLOBALS['green'] && $GLOBALS['orange'] > $GLOBALS['purple']) {
					echo "Orange";
				}
				else
					echo "Purple";
			}

			getResult();
			//getResult($personality);
			//getResult($roleModel);
			//getResult($class);

			finalResult();
		?><br><br>
		
		Lightsaber Color: <?php echo $_POST["personality"]; ?><br>
		Lightsaber Color: <?php echo $_POST["roleModel"]; ?><br>
		Lightsaber Color: <?php echo $_POST["class"]; ?><br>
	</body>
</html>