<?php
	include("../SQL/SQL_mysql.php");
	include("../SQL/SQL_content.php");
	
	$content = new content(new Mysql());
	
	if(isset($_POST['name']) && $_POST['name']!="")
	{
		$content->Insert($_POST['name'],$_POST['problem'],$_POST['solution'],$_POST['consequences']);
		
		header("Location: addclass.php?content=".$_POST['name']); 
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet"  type="text/css" href="../CSS/style.css">
	<link rel="stylesheet"  type="text/css" href="../CSS/subwindow.css">
</head>
<body>
	<div id="header">分析模式導入工具</div>	
	<div id="content">
		<?php include('head.php'); ?>
		<div id="window">
			<div id="subwindow">
				<div id="showL">
					<form action="subw_CC.php" method="post" target="_self">
						Content</br>
						Name : <input type="text" name="name" ></input></br>
						Problem :</br>
						<textarea class="text" name="problem"></textarea></br>
						Solution :</br>
						<textarea class="text" name="solution"></textarea></br>
						Consequences :</br>
						<textarea class="text" name="consequences"></textarea>
						<input type="submit" value="送出">
					</form>
					
				</div>
				<div id="showR"></div>
			</div>
		</div>
	</div>
</body>
</html>