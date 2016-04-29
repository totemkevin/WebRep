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
			<form action="class_constraint.php?action=insert" method="POST">
				class_constraint<br>
				pat_name:<input type="text" name="pat_name"><br>
				class1:<input type="text" name="class1"><br>
				class2:<input type="text" name="class2"><br>
				<input type="submit" value="Submit">
			</form>
		</div>
	</div>
	<?php
		include("db_conn.php");
		include("db_func.php");

		if(isset($_GET['action']) )
		{
			
			$sql="INSERT INTO `class_constraint`(`pat_name`,`class1`,`class2`)
				 VALUE('".$_POST['pat_name']."','".$_POST['class1']."','".$_POST['class2']."')";
			db_query($sql);
		}
	?>
</body>
</html>
