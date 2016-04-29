<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<div class="outer">
		<?php
			include("header.php");
			include("LBar.php");
		?>
		<div class = "inner">
			content<br>
			<form action="content.phpaction=insert" method="POST">
				name:<input type="text" name="name"><br>
				problem:<br>
				<textarea name="problem" rows="5" cols="50"></textarea><br>
				solution:<br>
				<textarea name="solution" rows="5" cols="50"></textarea><br>
				consequences:<br>
				<textarea name="consequences" rows="5" cols="50"></textarea><br>
				<input type="submit" value="Submit">
			</form>
		</div>
	</div>
	<?php
		include("db_conn.php");
		include("db_func.php");

		if(isset($_GET['action']) )
		{
			
			$sql="INSERT INTO `content`(`name`,`problem`,`solution`,`consequences`)
				 VALUE('".$_POST['name']."','".$_POST['problem']."','".$_POST['solution']."','".$_POST['consequences']."')";
			db_query($sql);
		}
	?>
</body>
</html>
