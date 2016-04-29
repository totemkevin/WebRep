<?php
	include("../SQL/SQL_mysql.php");
	include("../SQL/SQL_content.php");
	
	$content = new content(new Mysql());
	
	if(isset($_GET['search']))
	{
		$content->Select($_GET['search']);
		
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
			<?php while($content->HasNext()){ ?>
				
				Content</br>
				Name : <input type="text" value="<?php echo $content->name ; ?>"></input></br>
				Problem :</br>
				<textarea class="text"><?php echo $content->problem ; ?></textarea></br>
				Solution :</br>
				<textarea class="text"><?php echo $content->solution ; ?></textarea></br>
				Consequences :</br>
				<textarea class="text"><?php echo $content->consequences ; ?></textarea>
				
			<?php } ?>
			</div>
			<div id="showR">
				Class</br>
				</br>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>