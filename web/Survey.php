<?php 
	header("Content-type: text/html \n\n");
	$keys = array_keys($_POST);
?>
<html>
	<head>
		<title>Confirmation Page</title>
</head>
	<body >
		<?php print($_POST["name"])?>
	</body>
</html>
