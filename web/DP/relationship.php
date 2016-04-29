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
			relationship<br>
			<form action="relationship.phpaction=insert" method="POST">
				pat_name:<input type="text" name="pat_name"><br>
				class1:<input type="text" name="class1"><br>
				class2:<input type="text" name="class2"><br>
				type:<br>
				<select name="type">
					<option value=""></option>
					<option value="association">association</option>
					<option value="aggregation">aggregation</option>
					<option value="composition">composition</option>
				</select><br>
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
			
			$sql="INSERT INTO `relationship`(`pat_name`,`class1`,`class2`,`type`,`description`)
				 VALUE('".$_POST['pat_name']."','".$_POST['class1']."','".$_POST['class2']."','".$_POST['type']."','".$_POST['description']."')";
			db_query($sql);
		}
	?>
</body>
</html>
