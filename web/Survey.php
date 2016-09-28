<html>
	<head>
		<title>Confirmation Page</title>
            </head>
	<body >
		
		Name: <?php echo $_POST["name"]; ?><br>
		Email: <?php echo $_POST["email"]; ?><br>
		Major: <?php echo $_POST["major"]; ?><br>
		Places: <?php $place = $_POST["continent"];
		$N = count($place);
		for($i = 0; $i < $N; $i++) {
			echo $_POST[$place[$i] + " "];
			} ?><br>
		Comments: <?php echo $_POST["comment"]; ?><br>
	</body>
</html>