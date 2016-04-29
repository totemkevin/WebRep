<!DOCTYPE html>
<html>
	<head>
		<title>
		</title>
		<link rel="stylesheet" type="text/css" href="xxx.css">
	</head>

	<body>
		<form action="db_search_test1.php?action=insert" method="POST" target="_self">
			Name<input type="text" name="name">
			Cellphone<input type="text" name="cell">
			<input type="submit" value="Submit">
		<?php
			include("db_conn.php");
			include("db_func.php");

			if(isset($_GET['action']) )
			{
				if(($_POST['name'] !=null) & ($_POST['cell'] !=null))
				{
					//echo $_POST['name'].",".$_POST['cell'];
					$sql="INSERT INTO `student`(`s_name`,`s_cellphone`) VALUE('".$_POST['name']."','".$_POST['cell']."')";
					db_query($sql);
				}
				else
				{
					echo "Not Null";
				}
				
			}
			
			$sql='SELECT * FROM `student`';
			$res=db_query($sql);
			$num=db_num_rows($res);
			for($i=0;$i<$num;$i++)
			{
				$row =db_fetch_array($res);
				echo "<div>"." id = ".$row['s_id']." name = ".$row['s_name'] ." cellphone = ".$row['s_cellphone']."</div>";
			}
			
		?>
	</body>
</html>

