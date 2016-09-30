<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Confirmation Page</title>
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
				default:
					$purple = $purple + 1.0;
					break;
				}
			}
			
			function finalResult() {
				global $blue, $green, $orange, $purple;
				$myFile = fopen("mySurvey.txt", "a+") or die("Unable to open file!");

				if ($blue > $green && $blue > $orange && $blue > $purple) {
					$_SESSION["final"] = "Blue";
					echo $_SESSION["myName"] . ", your Lightsaber color is " . $_SESSION["final"] . "<br>";
				}
				else if ($green > $blue && $green > $orange && $green > $purple) {
					$_SESSION["final"] = "Green";
					echo $_SESSION["myName"] . ", your Lightsaber color is " . $_SESSION["final"] . "<br>";
				}
				else if ($orange > $blue && $orange > $green && $orange > $purple) {
					$_SESSION["final"] = "Orange";
					echo $_SESSION["myName"] . ", your Lightsaber color is " . $_SESSION["final"] . "<br>";
				}
				else {
					$_SESSION["final"] = "Purple";
					echo $_SESSION["myName"] . ", your Lightsaber color is " . $_SESSION["final"] . "<br>";
				}

				fwrite($myFile, $_SESSION["myName"]);
				fwrite($myFile, $_SESSION["final"]);

				echo fread($myFile, filesize("mySurvey.txt"));
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