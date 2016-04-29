<!DOCTYPE html>
<html>
	<head>
		<title>
		</title>
		<link rel="stylesheet" type="text/css" href="xxx.css">
	</head>

	<body>
		<form action="pross.php" method="GET" target="_self">
			<?php
				for ($i=0; $i < 5; $i++) { 
					echo "<input type='text' name='name[]'>";
				}
			?>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
