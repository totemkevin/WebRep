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
			<form action="class.php?action=insert" method="POST">
				class<br>
				pat_name:<input type="text" name="pat_name"><br>
				class_name:<input type="text" name="class_name"><br>
				description:<br>
				<textarea name="description" rows="10" cols="50"></textarea><br>
				<input type="submit" value="Submit">
			</form>
		</div>
	</div>
	<?php
		include("db_conn.php");
		include("db_func.php");

		if(isset($_GET['action']) )
		{
			
			$sql="INSERT INTO `class`(`pat_name`,`class_name`,`description`)
				 VALUE('".$_POST['pat_name']."','".$_POST['class_name']."','".$_POST['description']."')";
			db_query($sql);
		}
	?>
</body>
</html>
