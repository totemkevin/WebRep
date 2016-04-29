<?php
	include("../SQL/SQL_mysql.php");
	include("../SQL/SQL_content.php");
	
	$content = new content(new Mysql());
	
	if(isset($_GET['search']) && $_GET['search']!="")
	{
		$content->Select($_GET['search']);
		
	}
	else
	{
		$content->Select("");
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
					<form class="sform" action="subw_SC.php" method="get" target="_self">
						search : <input id="inputtext" type="text" placeholder="Please input content name" name="search"></input>
						<input id="sub" type="submit" value="start"></input>
					</form>
				</div>
				<div class="searchresult">
					<?php 
						while($content->HasNext())
						{	
							echo "<a href='showcontent.php?search=".$content->name."' style='text-decoration:none;'>";
							echo "<div class='result'> name : ".$content->name."</br>";
							echo "problem : ".$content->problem."</br>";
							echo "solution : ".$content->solution."</br>";
							echo "consequences : ".$content->consequences."</div>";
							echo "</a>";
						} 
					?>
				</div>
				
			</div>
		</div>
	</div>
</body>
</html>