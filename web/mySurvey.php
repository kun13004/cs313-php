<html>
	<head>
		<title>Confirmation Page</title>
            </head>
	<body >
		
		Name: <?php echo $_POST["name"]; ?><br>


		<?php 
			$importance = $_POST["importance"];
			$personality = $_POST["personality"];
			$roleModel = $_POST["roleModel"];
			$class = $_POST["class"];
			$blue = 0.4;
			$green = 0.3;
			$orange = 0.2;
			$purple = 0.1;

			function getResult($x) {
				switch ($x) {
				case "blue":
					$blue = $blue + 1;
					break;
				case "green":
					$green = $green + 1;
					break;
				case "orange":
					$orange = $orange + 1;
					break;
				default:
					$purple = $purple + 1;
					break;
				}
			}

			function finalResult() {
				if ($blue > $green && $blue > $orange && $blue > $purple) {
					return $blue;
				}
				else if ($green > $blue && $green > $orange %% $green > $purple) {
					return $green;
				}
				else if ($orange > $blue && $orange > $green && $orange > $purple) {
					return $orange;
				}
				else
					return $purple;
			}

			getResult($importance);
			getResult($personality);
			getResult($roleModel);
			getResult($class);

		?>
		
		Lightsaber Color: <?php echo finalResult(); ?><br>
		Lightsaber Color: <?php echo $_POST["personality"]; ?><br>
		Lightsaber Color: <?php echo $_POST["roleModel"]; ?><br>
		Lightsaber Color: <?php echo $_POST["class"]; ?><br>
	</body>
</html>