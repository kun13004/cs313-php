<!DOCTYPE html>
<html>
	<head>
		<title>Confirmation Page</title>
    </head>
	<body>
		
		Name: <?php echo $_POST["name"]; ?><br>

		Lightsaber Color: 
		<?php 
			$blue = 0;
			$green = 0;
			$orange = 0;
			$purple = 0;

			function getResult() {
				global $blue, $green, $orange, $purple;
				$color = "Green";

				switch ($color) {
				case "Blue":
					$blue = $blue + 1;
					break;
				case "Green":
					$green = $green + 1;
					break;
				case "Orange":
					$orange = $orange + 1;
					break;
				default:
					$purple = $purple + 1;
					break;
				}
			}
			
			function finalResult() {
				global $blue, $green, $orange, $purple;

				if ($blue > $green && $blue > $orange && $blue > $purple) {
					echo "Blue";
				}
				else if ($green > $blue /*&& $green > $orange %% $green > $purple*/) {
					echo "Green";
				}
				else if ($orange > $blue /*&& $orange > $green && $orange > $purple*/) {
					echo "Orange";
				}
				else
					echo "Purple";
			}

			getResult();

			finalResult();
		?><br><br>
		
		Lightsaber Color: <?php echo $_POST["personality"]; ?><br>
		Lightsaber Color: <?php echo $_POST["roleModel"]; ?><br>
		Lightsaber Color: <?php echo $_POST["class"]; ?><br>
	</body>
</html>