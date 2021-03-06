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

			if ($_SESSION["surveyComplete"] == false) {
				$_SESSION["myName"] = $_POST["name"];
				$_SESSION["importance"] = $_POST["importance"];
				$_SESSION["personality"] = $_POST["personality"];
				$_SESSION["roleModel"] = $_POST["roleModel"];
				$_SESSION["class"] = $_POST["class"];
			}
			

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
			}

			getResult($_SESSION["importance"]);
			getResult($_SESSION["personality"]);
			getResult($_SESSION["roleModel"]);
			getResult($_SESSION["class"]);

			finalResult();

			$newFile = getcwd(void) . "mySurvey.txt";
			$myFile = fopen($newFile, "a+") or die("Unable to open file!");
			fwrite($myFile, $_SESSION["myName"]);
			fwrite($myFile, $_SESSION["final"]);
			fclose($myFile);

			$_SESSION["surveyComplete"] = true;
		?>
	</body>
</html>