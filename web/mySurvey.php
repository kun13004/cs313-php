<!DOCTYPE html>
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
			$final;

			$blue = 0.4;
			$green = 0.3;
			$orange = 0.2;
			$purple = 0.1;

			function getResult($x) {
				global $blue, $green, $orange, $purple;

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
				global $blue, $green, $orange, $purple;
				$myFile = fopen("mySurvey.txt", "a") or die("Unable to open file!");

				if ($blue > $green && $blue > $orange && $blue > $purple) {
					$final = "Blue";
					echo $_SESSION["final"];
				}
				else if ($green > $blue && $green > $orange && $green > $purple) {
					$final = "Green";
					echo $_SESSION["final"];
				}
				else if ($orange > $blue && $orange > $green && $orange > $purple) {
					$final = "Orange";
					echo $_SESSION["final"];
				}
				else {
					$final = "Purple";
					echo $_SESSION["final"];
				}

				fwrite($myFile, $final);
				fclose($myFile);
			}

			getResult($importance);
			getResult($personality);
			getResult($roleModel);
			getResult($class);

			finalResult();
		?>
	</body>
</html>