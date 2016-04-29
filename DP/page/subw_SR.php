<?php
	include("../SQL/SQL_mysql.php");
	include("../SQL/SQL_requirement.php");
	
	$requirement = new requirement(new Mysql());
	
	if(isset($_POST['search']) && $_POST['search']!="")
	{
		$requirement->Select($_POST['search']);
	}
	else
	{
		$requirement->Select("");
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
			<div id="search">
				<form class="sform" action="subw_SR.php" method="POST" target="_self">
					search : <input id="inputtext" type="text" placeholder="Please input requirement" name="search"></input>
					<input id="sub" type="submit" value="start"></input>
				</form>
			</div>
			<div class="searchresult">
				<?php 
						while($requirement->HasNext())
						{	
							echo "<div class='result'> ID : ".$requirement->id."</br>";
							echo "description : ".$requirement->description."</div>";
						} 
				?>
			</div>
		</div>
	</div>
</div>
</body>
</html>