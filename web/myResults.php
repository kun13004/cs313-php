<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Confirmation Page</title>
		<link rel="stylesheet" type="text/css" href="Survey.css">
    </head>
	<body>
		<?php 

			$_SESSION["myName"] = $_POST["name"];
			$importance = $_POST["importance"];
			$personality = $_POST["personality"];
			$roleModel = $_POST["roleModel"];
			$class = $_POST["class"];

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
				case "Purple":
					$purple = $purple + 1.0;
				default:
					break;
				}
			}
			
			function finalResult() {

				global $blue, $green, $orange, $purple;
				if ($blue < 1.0 && $green < 1.0 && $orange < 1.0 && $purple < 1.0) {
					return;
				}

				$myFile = fopen("https://blooming-beach-83437.herokuapp.com/mySurvey.txt", "a+") or die("Unable to open file!");

				if ($blue > $green && $blue > $orange && $blue > $purple) {
					$_SESSION["final"] = "Blue";
					echo "<h1>" . $_SESSION["myName"] . ", your Lightsaber color is " . $_SESSION["final"] . "</h1><br>";
					echo '<img src="http://i.imgur.com/6FfakhG.png" alt="blue lightsaber" />';
				}
				else if ($green > $blue && $green > $orange && $green > $purple) {
					$_SESSION["final"] = "Green";
					echo "<h1>" . $_SESSION["myName"] . ", your Lightsaber color is " . $_SESSION["final"] . "</h1><br>";
					echo '<img src="http://i.imgur.com/xTHn4aL.png" alt="green lightsaber" />';
				}
				else if ($orange > $blue && $orange > $green && $orange > $purple) {
					$_SESSION["final"] = "Orange";
					echo "<h1>" . $_SESSION["myName"] . ", your Lightsaber color is " . $_SESSION["final"] . "</h1><br>";
					echo '<img src="http://img12.deviantart.net/58e5/i/2015/075/c/6/beam_effect_dark_orange_by_kanbeikurodasamurai7-d8lx2g2.png" alt="orange lightsaber" />';
				}
				else if ($purple > $blue && $purple > $green && $purple > $orange) {
					$_SESSION["final"] = "Purple";
					echo "<h1>" . $_SESSION["myName"] . ", your Lightsaber color is " . $_SESSION["final"] . "</h1><br>";
					echo '<img src="http://i.imgur.com/VNs2L1Y.png" alt="purple lightsaber" />';
				}

				fwrite($myFile, $_SESSION["myName"]);
				fwrite($myFile, $_SESSION["final"]);

				echo fgets($myFile);
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