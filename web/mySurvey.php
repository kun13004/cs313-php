<html>
	<head>
		<title>Confirmation Page</title>
    </head>
	<body>
		
		Name: <?php echo $_POST["name"]; ?><br>

		Lightsaber Color: 
		<?php 
			$importance = $_POST["importance"];
			echo $importance;
			/* $importance = $_POST["importance"];
			$personality = $_POST["personality"];
			$roleModel = $_POST["roleModel"];
			$class = $_POST["class"];
			$blue = 0.4;
			$green = 0.3;
			$orange = 0.2;
			$purple = 0.1;

			function getResult($x) {
				switch ($x) {
				case "Blue":
					$blue = $blue + 1.0;
					break;
				case "Green":
					$green = $green + 1.0;
					break;
				case "Orange":
					$orange = $orange + 1.0;
					break;
				default:
					$purple = $purple + 1.0;
					break;
				}
			}

			function finalResult() {
				if ($blue > $green && $blue > $orange && $blue > $purple) {
					echo "Blue";
				}
				else if ($green > $blue && $green > $orange %% $green > $purple) {
					echo "Green";
				}
				else if ($orange > $blue && $orange > $green && $orange > $purple) {
					echo "Orange";
				}
				else
					echo "Purple";
			}

			getResult($importance);
			getResult($personality);
			getResult($roleModel);
			getResult($class);

			finalResult(); */
		?><br><br>
		
		Lightsaber Color: <?php echo $_POST["personality"]; ?><br>
		Lightsaber Color: <?php echo $_POST["roleModel"]; ?><br>
		Lightsaber Color: <?php echo $_POST["class"]; ?><br>
	</body>
</html>